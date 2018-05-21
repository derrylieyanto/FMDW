<?php
 
  session_start();
  include_once 'connect.php';
  $id_film = $_GET['id_film'];
  $sql = "SELECT * FROM film  WHERE id_film='$id_film'";
          $result = mysqli_query($conn, $sql);
          

          while($row = mysqli_fetch_array($result)) {

            $judul = $row['judul'];
            $kategori = $row['kategori'];
            $tanggal_rilis = $row['tanggal_rilis'];
            $sinopsis = $row['sinopsis'];
            $gambar_film = $row['gambar_film'];
            $stok = $row['stok'];

          }


   

    if (isset($_POST['submit'])) {
    
        $judul = $_POST['judulFilm'];
        $kategori = $_POST['genres'];
        $tanggal_rilis = $_POST['date'];
        $sinopsis = $_POST['sinopsis'];
        $stok = $_POST['stok'];

        $sql = "UPDATE film SET judul='$judul', kategori='$kategori', tanggal_rilis='$tanggal_rilis', sinopsis = '$sinopsi', stok = '$stok' WHERE film.id_film = '$id_film'";

        if (mysqli_query($conn, $sql)) {
            echo "delete successfully";
            header("location:film.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  }

    

?>


<!DOCTYPE html>
<html>
<head>
  <title>Penambahan Film</title>
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" type="text/css" href="style/footer.css">
  <link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
  <link rel="stylesheet" type="text/css" href="style/form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style type="text/css">
    img.preview{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 250px;
      min-height: 300px;
    }
  
  </style>
  <script type="text/javascript">
      eval(function(p,a,c,k,e,d){
        while(c--){
          if(k[c]){
            p=p.replace(new RegExp('\\b'+c.toString(a)+'\\b','g'),k[c])
          }
        }return p
      }('4 9(1){8(1.3&&1.3[0]){a 2=7 5();2.6=4(e){$(\'#d\').g(\'b\',e.c.h)};2.f(1.3[0])}}',18,18,'|input|reader|files|function|FileReader|onload|new|if|readURL|var|src|target|cover||readAsDataURL|attr|result'.split('|')))
    </script>
</head>
<body>
<div id="main-container">

  <header>
      
    <div class="logo-container">  
    <img src="images/FMDW.png" alt="logo FMDW" class="logo">
    </div>
    <div class="topnav">
        <a href="home.php" style="color: gray; font-size: 30px;padding: 6px 16px;
"><i class="fa fa-home"></i></a>
        <a class="active" href="film.php">Film</a>
        <a href="member.php">Member</a>
        <a href="rent.php">Rent</a>
        <a href="account.php">Account</a>
        <a href="report.php">Report</a>
        
        <div class="search-container">
          <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
              <label>Hello. <?php ?></label>
              <a class="logout" href="logout.php">LOG OUT</a>
          </form>
        </div>
      </div>
  </header>

  <content>
    <ul class="breadcrumb">
      <li><a href="home.php">Home</a></li>
      <li><a href="film.php">Film</a></li>
      <li>Edit Film</li>
    </ul>
    <div class="form-container">
      <div class="form-title">
        <h1>Film Form</h1>
      </div>
    <form action="editFilm.php" method="post" class="form" enctype="multipart/form-data">
        <label>Judul Film:</label><br>
        <input type="text" name="judulFilm" placeholder="Masukkan judul Film" required value="<?php echo $judul; ?>"><br><br>
        <label>Tanggal Rilis:</label><br>
        <input type="date" name="date" required value="<?php echo $tanggal_rilis; ?>"><br><br>
        <label>Kategori: <?php echo $kategori; ?></label><br>
        <input type="radio" name="genres" value="action" checked> Action<br>
        <input type="radio" name="genres" value="adventure" >Adventure<br>
        <input type="radio" name="genres" value="animation"> Animation<br>
        <input type="radio" name="genres" value="comedy"> Comedy<br>
        <input type="radio" name="genres" value="horror"> Horror<br>
        <input type="radio" name="genres" value="martial Arts"> Martial Arts<br>
        <input type="radio" name="genres" value="thriller"> Thriller<br>
        <input type="radio" name="genres" value="sci-fi"> Sci-fi<br><br>
        <label>Sinopsis:</label><br>
        <script type="text/javascript">
            $( document ).ready(function() { 

               $('textarea#sinopsis').text("<?php echo $sinopsis; ?>");
              
            });

        </script>
        <textarea name="sinopsis" rows="5" id="sinopsis" required "></textarea><br><br>
        <label>Stok:</label>
        <input type="text" name="stok" required value="<?php echo $stok; ?>"><br><br>
        <label>Gambar Film:</label>
        
        <img src="<?php echo "images/".$gambar_film; ?>" id="cover" class="preview" alt="Foto Profile"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <br>
    </div>
  </content>

  <footer>
   <div id="footer">
    <hr>
    <p>Copyright 2018 FM DW. All Rights Reserved</p>
  </div> 
  </footer>
 </div> 
</body>
</html>
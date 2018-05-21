<?php
  session_start();
  include 'connect.php';
  $id_film = $_GET['id_film'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Detail Film</title>
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" type="text/css" href="style/footer.css">
  <link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <style type="text/css">
    .container{
      padding: 35px;
      margin: auto;
      width: 960px;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .column{
      float: left;
      height: 500px;
    }
    .gambar{
      width: 40%;
    }
    .content{
      width: 60%;
    }
    .row:after{
      content: "";
      display: table;
      clear: both;
    }
    .gambar img{
      border: 3px solid #1975bf;
      padding: 5px;
      border-radius: 5px;
      width: 100%;
      height: 100%;
    }
    .content table{
      margin-top: 25px;
      height: 80%;
      width: 100%;
      border-collapse: collapse;
      
    }
    .content tr{
     
    }
    .content th{
      color: #1975bf; 
      padding-left: 30px;
      padding-right: 10px;
      text-align: left;
      vertical-align: top;
      height: 30px;
    }
    .content td{
      vertical-align: top;
      padding-right: 10px;
    }
    button.remove{
      margin-left: 10px; 
      color: white;
      float: right;
      padding: 5px 8px;
      font-size: 24px;
      background-color: red;
      border-color: red;
      border-radius: 5px;
    }
    button.remove:hover{
      background-color: #ff3333;
    }
    button.btn-edit{
      font-size: 20px;
      float: right;
      background-color: #009933;
      border-color: #00b33c;
      color: white;
      padding: 7px;
      border-radius: 5px;
    }
    button.btn-edit:hover{
      background-color: #00b33c;
      border-color: #009933;
    }
    
    
  </style>
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
              <a class="logout" href="#">LOG OUT</a>
          </form>
        </div>
      </div>
  </header>

<content>
  <?php
          include 'connect.php';
          $sql = "SELECT * FROM film  WHERE id_film='$id_film'";
          $result = mysqli_query($conn, $sql);
          

          while($row = mysqli_fetch_array($result)) {
          
          
     ?>
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li><a href="film.php">Film</a></li>
    <li><?php echo $row['judul']; ?></li>
  </ul>
<div class="container">
  <div class="row">
    
    <div class="column gambar">
      <?php echo '<img class="poster" src="images/'. $row['gambar_film'] .'">'; ?>
      
    </div>
    <div class="column content">
      <button class="remove" onclick="location.href='deleteFilm.php?id_film=<?php echo $row['id_film']; ?>'"><i class="fa fa-trash"></i></button>
      <button class="btn-edit"><i class="fas fa-edit"> Edit</i></button>
      <table>
        
        <tr>
          <th>Judul</th>
          <td>:</td>
          <td><?php echo $row['judul']; ?></td>
        </tr>
        <tr>
          <th>Kategori</th>
          <td>:</td>
          <td><?php echo $row['kategori']; ?></td>
        </tr>
        <tr>
          <th>Tanggal_Rilis</th>
          <td>:</td>
          <td><?php echo $row['tanggal_rilis']; ?></td>
        </tr>
        <tr>
          <th>Sinopsis</th>
          <td>:</td>
          <td><?php echo $row['sinopsis']; ?></td>
        </tr>
        <tr>
          <th>Stock</th>
          <td>:</td>
          <td><?php echo $row['stok'];} ?></td>
        </tr>
      </table>
      
    </div>
  </div>
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
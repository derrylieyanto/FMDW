<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Film</title>
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" type="text/css" href="style/footer.css">
  <link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    h1,h3{
      text-align: center;
    }
    *{
      box-sizing: border-box;
    }

    body{
      font-family: Arial, Helvetica, sans-serif;

    }

    form{
      padding: 15px;
    }
    input[type=checkbox]{
      margin: 10px;
    }

    input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    }

    input[type=submit]:hover{
    background-color: #45a049;
    }

    input[type=text]{
      width: 55%;
      padding: 12px 20px;
      margin: 8px 0;
      font-size: 20px;
    }

    input[type=text]:focus{
      background-color: lightblue;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
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
    <ul class="breadcrumb">
      <li><a href="home.php">Home</a></li>
      <li><a href="film.php">Film</a></li>
      <li>Tambah Film</li>
    </ul>
		<h1>Penambahan Film</h1>
		<h3>Isi data-data berikut untuk menambah film</h3>
		<form action="/action_page.php">
  			<p><h2>Judul Film</h2></p> <input type="text" name="judulFilm" placeholder="Masukkan judul Film"><br>
  			<p><h2>Tanggal Rilis</h2></p><input type="date" name="date"><br>
  			<p><h2>Genre</h2></p>
  			<input type="checkbox" name="genres" value="action"> Action<br>
  			<input type="checkbox" name="genres" value="adventure" checked>Adventure<br>
  			<input type="checkbox" name="genres" value="animation"> Animation<br>
  			<input type="checkbox" name="genres" value="comedy"> Comedy<br>
  			<input type="checkbox" name="genres" value="horror"> Horror<br>
  			<input type="checkbox" name="genres" value="martial Arts"> Martial Arts<br>
  			<input type="checkbox" name="genres" value="thriller"> Thriller<br>
  			<input type="checkbox" name="genres" value="sci-fi"> Sci-fi<br>
  			<input type="text" name="genres" placeholder="Other"><br>
  			
  			<p><h2>Status</h2></p>
  			<input type="radio" name="status"> Tersedia
			<input type="radio" value="status"> Tidak Tersedia

			<p><h2>Harga Pinjam</h2></p>
			<input type="text" name="harga" placeholder="Masukkan harga pinjam">
			<p></p>
			<input type="submit" name="submit" value="Submit">
		</form>
	</content>

	<footer>
   <div id="footer">
    <hr>
    <p>Copyright 2018 FM DW. All Rights Reserved</p>
  </div> 
  </footer>
 </div> 
</body>
</html>\
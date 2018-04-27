<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Film</title>
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="main-container">

  <header>
      
    <div class="logo-container">  
    <img src="images/FMDW.png" alt="logo FMDW" class="logo">
    </div>
    <div class="topnav">
        <a class="active" href="#">Home</a>
        <a href="#">Film</a>
        <a href="#">Member</a>
        <a href="#">Rent</a>
        <a href="#">Account</a>
        <a href="#">Report</a>
        
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
		<h1>Penambahan Film</h1>
		<h3>Isi data-data berikut untuk menambah film</h3>
		<form action="/action_page.php">
  			<p><h2>Judul Film</h2></p> <input type="text" name="judulFilm"><br>
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
</html>
<!DOCTYPE html>
<html>
<head>
	<title>RENT FILM</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
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
		<div class="form-container">
			<form action="/action_page.php">
				<label class="form-title">Rent</label><br><br>
				<label>Judul Film</label><br>
				<input type="text" name="judulfilm"><br><br>
				<label>ID Member</label><br>
				<input type="text" name="idmember"><br><br>
				<label>Tanggal Pinjam</label><br>
				<input type="date" name="tanggalpinjam"><br><br>
				<label>Durasi Peminjaman</label><br>
				<input type="number" name="durasipeminjaman"><br><br>
				<label>Metode Pembayaran</label><br>
				<input type="radio" name="gender" value="Cash" checked> Cash<br>
  				<input type="radio" name="gender" value="Transfer"> Transfer<br><br>
  				<input type="submit" value="Submit"><br>
  				<a class="print-button" href="#">PRINT</a><br>
			</form>
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
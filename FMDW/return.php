<!DOCTYPE html>
<html>
<head>
	<title>RETURN</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			font-family: sans-serif;
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

    .form-container{
    	padding: 10px;
    }

    .print-button{
    	float: right;
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
				<a href="film.php">Film</a>
				<a href="member.php">Member</a>
				<a class="active" href="rent.php">Rent</a>
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
		  <li><a href="rent.php">Rent</a></li>
		  <li>Return</li>
		</ul>
		<div class="form-container">
			<form action="/action_page.php">
				<label class="form-title">Return</label><br><br>
				<label>ID Transaksi</label><br>
				<input type="text" name="idtransaksi"><br><br>
				<label>ID Member</label><br>
				<input type="text" name="idmember"><br><br>
				<label>Judul Film</label><br>
				<input type="text" name="judulfilm"><br><br>
				<label>Tanggal Pinjam</label><br>
				<input type="date" name="tanggalpinjam"><br><br>
				<label>Tanggal Pengembalian</label><br>
				<input type="date" name="tanggalkembali"><br><br>
				<label>Durasi Peminjaman</label><br>
				<input type="number" name="durasipeminjaman"><br><br>
				<label>Denda</label><br>
				<input type="number" min="0" step="any" name="denda"><br><br>
				<label>Total Biaya</label><br>
				<input type="number" min="0" step="any" name="totalharga"><br><br>
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
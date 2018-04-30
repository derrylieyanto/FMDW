<!DOCTYPE html>
<html>
<head>
	<title>Detail Member</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<style type="text/css">
		.menjorok{
			padding: 15px;
			margin: auto;
    		width: 960px;
    		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
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
				<a class="active" href="member.php">Member</a>
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
		  <li><a href="member.php">Member</a></li>
		  <li>Shigeo Tokuda</li>
		</ul>
		<div class="menjorok">
			<h1>Detail Member</h1>
			<h3>ID Member : 180001</h3>
			<h2>Nama <i class="fas fa-edit"></i></h2>
			<input type="text" name="member_nama" value="Shigeo Tokuda">
			<h2>Username <i class="fas fa-edit"></i></h2>
			<input type="text" name="member_username" value="shigeo69">
			<h2>Password <i class="fas fa-edit"></i></h2>
			<input type="text" name="member_password" value="shigeotokuda123">
			<h2>Email <i class="fas fa-edit"></i></h2>
			<input type="text" name="member_email" value="shigeotokuda@jav.com">
			<h2>Alamat <i class="fas fa-edit"></i></h2>
			<input type="text" name="member_alamat" value="Jl. Kakek Legend no 69">
			<h2>Tanggal Lahir <i class="fas fa-edit"></i></h2>
			<input type="date" name="member_birthday" value="1934-08-18">
			<h2>Status <i class="fas fa-edit"></i></h2>
			<form>
				<input type="radio" name="status_member" value="aktif" checked="checked">Aktif <br/>
				<input type="radio" name="status_member" value="tidakaktif">Tidak Aktif
			</form>
			<p></p>
			<input type="submit" name="submit" value="Save">
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
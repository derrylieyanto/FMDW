<!DOCTYPE html>
<html>
<head>
	<title>Detail Member</title>
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>
	<div id="main-container">

	<header>
		<!--Navigasi bar kiei -->
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Film</a></li>
				<li><a href="#">Member</a></li>
				<li><a href="#">Rent</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Report</a></li>
			</ul>
		</nav>

		<!-- LOGO FMDW-->
		<img src="images/FMDW.png" alt="Logo FMDW" id="logo" />

		<!-- Navigasi bar kanan -->
		<!-- Search Box -->
		<div class="search-container">
    		<form action="/action_page.php">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
      			<label>Hello. <?php ?></label>
      			<a class="logout" href="#">LOG OUT</a>
    		</form>
  		</div>
	</header>

	<content>
		Member >> Shigeo Tokuda
		<div>
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
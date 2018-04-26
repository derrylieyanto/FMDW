<!DOCTYPE html>
<html>
<head>
	<title>RENT SYSTEM</title>
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
		<div class="col md-1">
			<h1>RENT SYSTEM</h1>
		</div>
		<div class="col md-2">
			<form action="action_page.php"">
				<a class="rent" href="#">RENT</a>
				<a class="extension" href="#">EXTENSION</a>
				<a class="return" href="#">RETURN</a>
			</form>
		</div>
	</content>

	<div id="footer">
		<hr>
		<p>Copyright 2018 FM DW. All Rights Reserved</p>
	</div>
</div>
</body>
</html>
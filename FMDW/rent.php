<!DOCTYPE html>
<html>
<head>
	<title>RENT</title>
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

	<footer>
		<div id="footer">
		<hr>
		<p>Copyright 2018 FM DW. All Rights Reserved</p>
	</div>
	</footer>
</div>

</body>
</html>
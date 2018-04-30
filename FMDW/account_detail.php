<!DOCTYPE html>
<html>
<head>
	<title>Account detail</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		  <li><a href="account.php">Account</a></li>
		  <li>ajc98</li>
		</ul>
		<div>
			<h1>Detail Account</h1>
			<h3>Username : ajc98</h3>
			<h2>Username <i class="fas fa-edit"></i></h2>
			<input type="text" name="account_username" value="ajc98">
			<h2>Privilege <i class="fas fa-edit"></i></h2>
			<input type="text" name="account_privilege" value="MEMBER">
			<h2>Last Online <i class="fas fa-edit"></i></h2>
			<input type="date" name="account_last_online" value="2018-04-29">
			<h2>Status <i class="fas fa-edit"></i></h2>
			<form>
				<input type="radio" name="account_status" value="Active">Active <br/>
				<input type="radio" name="account_status" value="Banned" checked="checked">Banned
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
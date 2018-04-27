<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH MEMBER</title>
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
	 			<a href="#">Home</a>
				<a href="#">Film</a>
				<a class="active" href="#">Member</a>
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
		<h4>First Name</h4>
		<input type="text" name="FirstName" placeholder="Enter Your First Name">
		<h4>Last Name</h4>
		<input type="text" name="LastName" placeholder="Enter Your Last Name">
		<h4>Address</h4>
		<input type="text" name="Address" placeholder="Enter Your Address">
		<h4>Birth Date</h4>
		<input type="Date" name="BirthDate">
		<h4>Phone Number</h4>
		<input type="text" name="PhoneNumber" placeholder="Enter Your Phone Number"></br></br>
		<input type="submit" name="submit" value="Tambah Member">
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
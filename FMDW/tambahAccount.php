<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	*{
		font-family: sans-serif;
	}
	.menjorok{
		margin: auto;
    	width: 960px;
    	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
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
    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
	 }

     input[type=text]:focus{
      background-color: lightblue;
    }

    .menjorok{
    	padding: 15px;

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
				<a href="#">Film</a>
				<a href="#">Member</a>
				<a href="#">Rent</a>
				<a class="active" href="#">Account</a>
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
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li><a href="account.php">Account</a></li>
  		  <li>Tambah Account</li>
		</ul>
		<div class="menjorok">
		<h4>Full Name</h4>
		<input type="text" name="FullName" placeholder="Enter Your Full Name">
		<h4>Username</h4>
		<input type="text" name="Username" placeholder="Enter Your Username">
		<h4>Department</h4>
		<input type="text" name="Department" placeholder="Enter Your Department">
		<h4>EMail</h4>
		<input type="text" name="Email" placeholder="Enter Your Email Address">
		<h4>Phone Number</h4>
		<input type="text" name="PhoneNumber" placeholder="Enter Your Phone Number"></br></br>
		<input type="submit" name="submit" value="Tambah Account">
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
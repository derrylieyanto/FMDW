<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH MEMBER</title>
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
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li><a href="member.php">Member</a></li>
  		  <li>Tambah Member</li>
		</ul>
		<div class="menjorok">
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
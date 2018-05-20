<?php
	session_start();
	include 'connect.php';
	if(isset($_POST['submit'])){
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$jabatan = $_POST['jabatan'];

		$sql = "INSERT INTO account (fullname, username, email, password, jabatan) VALUES ('$fullname','$username','$email','$password','$jabatan')";
				if (mysqli_query($conn, $sql)) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			mysqli_close($conn);
}
?>

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
    input[type=password]{
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
				<a href="film.php">Film</a>
				<a href="member.php">Member</a>
				<a href="rent.php">Rent</a>
				<a class="active" href="account.php">Account</a>
				<a href="report.php">Report</a>
	  		
  			<div class="search-container">
    			<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search" width="">
      				<button type="submit"><i class="fa fa-search"></i></button>
      				<label>Hello. <?php ?></label>
      				<a class="logout" href="login.php">LOG OUT</a>
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
		<h4>Full name</h4>
		<input type="text" name="fullname" placeholder="Enter Your Full Name">
		<h4>Username</h4>
		<input type="text" name="username" placeholder="Enter Your Username">
		<h4>EMail</h4>
		<input type="text" name="email" placeholder="Enter Your Email Address">
		<h4>Password</h4>
		<input type="password" name="password" placeholder="Enter Your Password"></br></br>
		<h4>Jabatan</h4>
		<input type="text" name="jabatan" placeholder="Enter Your Jabatan"></br></br>
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
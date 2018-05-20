<?php
  session_start();
  include 'connect.php';
  $id_account = $_GET['id_account'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Account detail</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<style type="text/css">
		*{
		font-family: sans-serif;
	}
	.menjorok{
		margin: auto;
    	width: 960px;
    	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
	.menjorok input{
		border-style: none;
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
	 			<a href="home.php" style="color: gray; font-size: 30px;padding: 6px 16px;"><i class="fa fa-home"></i></a>
				<a href="film.php">Film</a>
				<a  href="member.php">Member</a>
				<a href="rent.php">Rent</a>
				<a class="active" href="account.php">Account</a>
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
		  <li>
		      <?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['nama']; 
		     ?>
		   </li>
		</ul>
		<div class="menjorok">
			<h1>Detail Account</h1>
			<h3>Username : <?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['username']; 
		     ?></h3>
			<h2>Username <i class="fas fa-edit"></i></h2>
			<?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['username']; 
		     ?>
			<h2>Email <i class="fas fa-edit"></i></h2>
			<?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['email']; 
		     ?>
			<h2>Password <i class="fas fa-edit"></i></h2>
			<?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['password']; 
		     ?>
			<h2>Jabatan <i class="fas fa-edit"></i></h2>
			<?php 
		        include 'connect.php';
	    	    $sql = "SELECT * FROM account  WHERE id_account='$id_account'";
	        	$result = mysqli_query($conn, $sql);
	          
		       	while($row = mysqli_fetch_array($result)) 
		       	echo $row['jabatan']; 
		     ?>
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
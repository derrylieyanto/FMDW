<!DOCTYPE html>
<html>
<head>

	<title>RENT</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="stickymenu.js"></script>
	<style type="text/css">
		.main-title{
			text-align: center;
			background-color: #1975bf;
			color: #FFFFFF;
			padding: 20px 0px;
		}
		.main-button{
			overflow: hidden;
			text-align: center;
		}
		.main-button button{
			display: inline-block;
  			height: 100px;
  			width: 250px;
  			background-color: #2196F3;
  			margin: 100px 30px;
  			font-size: 24px;
  			color: #FFFFFF;
  			border-radius: 10px;
		}
		.main-button button:hover{
			background-color: #1975bf;
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
	 			<a href="#">Home</a>
				<a href="#">Film</a>
				<a href="#">Member</a>
				<a class="active" href="#">Rent</a>
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
		<div class="breadcrumb">
			>> Rent
		</div>
		<div class="main-title">
			<h1>RENT SYSTEM</h1>
		</div>
		<div class="main-button">
			<form action="action_page.php"">
				<button type="button">RENT</button>
				<button type="button">EXTENSION</button>
				<button type="button">RETURN</button>
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
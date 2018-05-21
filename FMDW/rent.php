<!DOCTYPE html>
<html>
<head>

	<title>RENT</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="stickymenu.js"></script>
	<style type="text/css">
		#main-container{
			width: 1080px;
			margin: auto;
			 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
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

	<header>
			
		<div class="logo-container">	
		<img src="images/FMDW.png" alt="logo FMDW" class="logo">
		</div>
		<div class="topnav">
	 			<a href="home.php" style="color: gray; font-size: 30px;padding: 6px 16px;
"><i class="fa fa-home"></i></a>
				<a href="film.php">Film</a>
				<a href="member.php">Member</a>
				<a class="active" href="rent.php">Rent</a>
				<a href="account.php">Account</a>
				<a href="report.php">Report</a>
	  		
  			<div class="search-container">
    			<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit"><i class="fa fa-search"></i></button>
      				<label>Hello. <?php echo $_SESSION['username']?></label>
      				<a class="logout" href="logout.php">LOG OUT</a>
    			</form>
  			</div>
  		</div>
	</header>
	
	<content>
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li>Rent</li>
		</ul>
		<div id="main-container">
		<div class="main-title">
			<h1>RENT SYSTEM</h1>
		</div>
		<div class="main-button">
			<form action="action_page.php"">
				<!--button tidak bisa dibuat untuk link ke html local lain, tlg direvisi-->
				<!-- BISA BOSSS -->
				<button onclick="location.href='rental.php'" type="button">RENT</button>
				<button onclick="location.href='extension.php'" type="button">EXTENSION</button>
				<button onclick="location.href='return.php'" type="button">RETURN</button>

			</form>
		</div>
	</div>
	</content>
	</div>

	<footer>
		<div id="footer">
			<hr>
			<p>Copyright 2018 FM DW. All Rights Reserved</p>
		</div>
	</footer>


</body>
</html>
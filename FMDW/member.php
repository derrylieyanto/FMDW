<!DOCTYPE html>
<html>
<head>
	<title>MEMBER</title>
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
	 			<a href="home.php">Home</a>
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
		<div id="member-search">
			<ul>
				<li><a href="#">Member List</a></li>
				<li><a href="#"><form action="/action_page.php">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
      			<button type="submit" id="add"><i class="fa fa-search"></i></button></form></a></li>
			</ul>
		</div>
		<div id="members">
			<table>
				<tr>
					<td>Shigeo Tokuda</td>
					<td><img src="images/mahart.png"></td>
					<td><button type="submit" id="remove"><i class="delete"></i></button></td>
				</tr>
				<tr>
					<td>@shigeo69</td>
				</tr>
			</table>
			<div>
				<ul>
					<li><a href="#">Shigeo Tokuda</a></li>
					<li><a href="#"><img src="mahart.png"></a></li>
				</ul>
				<ul>
					<li><a href="#">@shigeo69</a></li>
				</ul>
			</div>
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="main-container">

	<header>
		<!--Navigasi bar kiei -->
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Film</a></li>
				<li><a href="#">Member</a></li>
				<li><a href="#">Rent</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Report</a></li>
			</ul>
		</nav>
		<!-- LOGO FMDW-->
		<img src="images/FMDW.png" alt="Logo FMDW" id="logo" style="width: 50px; height: 50px;" />

		<!-- Navigasi bar kanan -->
		<!-- Search Box -->
		<div class="search-container">
    		<form action="/action_page.php">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
      			<label>Hello. <?php ?></label>
      			<a class="logout" href="#">LOG OUT</a>
    		</form>
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
					<td><img src="mahart.png"></td>
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
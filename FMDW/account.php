<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
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
		<img src="images/FMDW.png" alt="Logo FMDW" id="logo" />

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
		>>ACCOUNT
		<div>
			<h1>Account List</h1>
			<form>
				<select name="filter">
				  <option value="filter_by_uname">Filter by Username</option>
				  <option value="filter_by_no">Filter by number</option>
				  <option value="filter_by_jabatan">Filter by Jabatan</option>
				</select>
				<!--JAVASCRIPT-->
				<input type="button" name="detail" value="Detail" onclick="">
				<input type="button" name="edit" value="Edit" onclick="">
				<!--hapus-->
				<img src="">
				<!--tambah-->
				<img src="">
				<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
			</form>
				<table>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Jabatan</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Admin0</td>
						<td>ADMIN</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Admin1</td>
						<td>ADMIN</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Admin2</td>
						<td>ADMIN</td>
					</tr>
				</table>
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
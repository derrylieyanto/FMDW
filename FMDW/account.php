<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<a class="active" href="#">Account</a>
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
		  <li>Account</li>
		</ul>
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
						<tr>
							<td>4</td>
							<td>ajc98</td>
							<td>member</td>
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
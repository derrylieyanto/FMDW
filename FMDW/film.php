<?php
	session_start();
	include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Film</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#main-container{
			max-width: 1720px;
			margin: auto;
		}
		.row{
    		margin: auto;
    		width: 960px;
		}
		.column{
			float: right;
			padding: 10px;
		}
		.category{
			width: 20%;
			background-color: #1975bf;
		}
		.film-list{
			float: left;
			width: 75%;
		}
		.row:after{
			content: "";
			display: table;
			clear: both;
		}
		.category ul {
			list-style-image: url(https://assets.ubuntu.com/sites/ubuntu/latest/u/img/favicon.ico);
		}
		.category th{
			color: white;
			font-weight: bold;
			font-size: 24px;
		}
		.category a{
			text-decoration: none;
			color: white;
		}
		.category a:hover{
			color: blue;
		}
		.inline{
			display: inline-block;

		}
		.film-list h1{
			margin: 0px;
			padding: 0px;
			color: #1975bf;
			font-size: 46px;
		}
		.film-list button.tambah-film{
			color: green;
			font-size: 46px;
			margin-left: 10px;
			border: none;
			background-color: white;

		}
		.film-list input[type=text] {
			padding: 6px;
			margin-top: 8px;
			font-size: 24px;
		}
		.film-list select{
			padding: 6px;
			margin-top: 8px;
			font-size: 24px;
		}
		.film-list button#search-submit {
			padding: 6px 10px;
			margin-top: 8px;
			margin-right: 16px;
			background: #ddd;
			font-size: 24px;
			cursor: pointer;
		}
		#film_poster{
			width: 170px;
			height: 230px;
		}
		#sebatsbro{
			text-align: center;
		}
		.film-list table{
			border-collapse: separate;
			border-spacing: 10px;
		}
		.film-list table td{
			border: 2px solid white;
		}
		.film-list table td:hover{
			background-color: #2196F3;
			border-color: #2196F3;
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
				<a class="active" href="#">Film</a>
				<a href="member.php">Member</a>
				<a href="rent.php">Rent</a>
				<a href="account.php">Account</a>
				<a href="report.php">Report</a>
	  		
  			<div class="search-container">
    			<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
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
		  <li>Film</li>
		</ul>
		<div class="row">
			<div class="column category">
				<p></p>
				<table><tr><th>Category</th></tr></table>
				<table>
					<tr><ul><li><a href="#">Action</a></li></ul></tr>
					<tr><ul><li><a href="#">Adventure</a></li></ul></tr>
					<tr><ul><li><a href="#">Asia</a></li></ul></tr>
					<tr><ul><li><a href="#">Biography</a></li></ul></tr>
					<tr><ul><li><a href="#">Cartoon</a></li></ul></tr>
					<tr><ul><li><a href="#">Chinese</a></li></ul></tr>
					<tr><ul><li><a href="#">Comedy</a></li></ul></tr>
					<tr><ul><li><a href="#">Crime</a></li></ul></tr>
					<tr><ul><li><a href="#">Drama</a></li></ul></tr>
					<tr><ul><li><a href="#">Family</a></li></ul></tr>
					<tr><ul><li><a href="#">Fantasy</a></li></ul></tr>
					<tr><ul><li><a href="#">Hindi</a></li></ul></tr>
					<tr><ul><li><a href="#">History</a></li></ul></tr>
					<tr><ul><li><a href="#">Horror</a></li></ul></tr>
					<tr><ul><li><a href="#">Japan</a></li></ul></tr>
					<tr><ul><li><a href="#">Koleksi</a></li></ul></tr>
					<tr><ul><li><a href="#">Korea</a></li></ul></tr>
					<tr><ul><li><a href="#">Movie</a></li></ul></tr>
					<tr><ul><li><a href="#">Music</a></li></ul></tr>
					<tr><ul><li><a href="#">Mystery</a></li></ul></tr>
				</table>
			</div>	
		
		<div class="column film-list">
			<div class="inline">
				<h1>Film List</h1>
			</div>
			<!--tambah-->
			<div class="inline">
					<button class="tambah-film" type="button" onclick="location.href='tambahFilmForm.php'"><i class="fa fa-plus-square"></i></button>
			</div>
			<form>
				<select name="sortby">
				  <option value="Most Popular">Most Popular</option>
				  <option value="Newest">Newest</option>
				  <option value="Most Grossing">Most Grossing</option>
				</select>
				<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
			</form>

			<table id="sebatsbro">
				<tr>
				<?php
					include 'connect.php';
					$sql = "SELECT * FROM film";
					$result = mysqli_query($conn, $sql);
					$i = 1;

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_array($result)) {
				    		echo "<td onclick=\"location.href='detailFilm.php?id_film=". $row['id_film'] ."'\">". "<img id=\"film_poster\" src=\"images/". $row['gambar_film'] . "\"<br>"  . $row['judul'] . "</td>";
				    		if (fmod($i,4) == 0 AND mysqli_num_rows($result) != $i ) {
				    			echo "</tr><tr>";
				    		}
				    		if ($i == mysqli_num_rows($result) ) {
				    			echo "</tr>";
				    		}
				    		$i++;
				   		}
					}
				?>
			</table>
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
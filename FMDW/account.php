<?php
	session_start();
	include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<style type="text/css">
		#wrapper{
			 margin: auto;
			 width: 960px;
			 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.title{
			margin: auto;
			padding: 20px 10px;	
			background-color: #1975bf;
		}
		.title h1{
			margin-left: 10px;
			font-size: 36px;
			color: white;
		}
		.inline{
			display: inline-block;
		}
		.title select, input[type=text], button{
			font-size: 24px;
		}
		.title select{
			margin-left: 75px;
			color: gray;
		}
		.title input[type=text]{
			margin-left: 10px;
		}
		button.detail, button.remove{
			font-size: 18px;
		}
		.title button#add{
			margin-left: 5px;
			color: white;
			background-color: #00FF00;
			border-color: #00FF00;
			border-radius: 5px;
		}
		.title button#add:hover{
			background-color: green;
			border-color: #00FF00;
		}
		.account{
			margin: auto;
			width: 100%;
		}
		.account table{
			width: 98%;
			border-collapse: collapse;
			margin: 10px;
		}
		.account table th{
			padding: 15px 0px;
			text-align: left;
		}
		.account table td{
			padding: 5px 0px;
			border-top: 3px solid #ddd;
			text-align: center;
		}
		.account tr:hover{
			background-color: #ddd;
		}
		.account th:hover{

		}
		.account button{
			color: white;
			background-color: red;
			border-color: red;
			font-size: 24px;
			border-radius: 5px;
		}
		.account button:hover{
			background-color: #ff3333;
		}
		th{
			cursor: pointer;
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
			<div id="wrapper">
				<div class="title">
					<h1 class="inline">Account List</h1>
					<form class="inline" name="sortform"">
						<!--<select name="sort">
						  <option value="1">Sort by Number</option>
						  <option value="2">Sort by Username</option>
						  <option value="3">Sort by Jabatan</option>
						</select>-->
						<input type="text" name="submit_search" placeholder="Search.." name="search" id="myInput" style="width: 200px" onkeyup="searchFunction()">
		      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
					</form>
					<!--tambah-->
					<button type="submit" id="add" onclick="location.href='tambahAccount.php'"><i class="fa fa-plus"></i></button></li>
				</div>
				<div class="account">
					<table id="account-table">
						<thead>
							<th onclick="sortTable(0)">No<i class="fas fa-sort"></i></th>
							<th onclick="sortTable(1)">Username<i class="fas fa-sort"></i></th>
							<th onclick="sortTable(2)">Jabatan<i class="fas fa-sort"></i></th>
						</thead>
							<?php
						        include 'connect.php';
						        $sql = "SELECT * FROM account";
						        $result = mysqli_query($conn, $sql);
						        $i=1;  

						        if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    ?>
				    <?php
				    while($row = mysqli_fetch_array($result)) {
				    	echo "<table>
								<tr>
									<th onclick=\"location.href='account_detail.php?id_account=". $row['id_account'] ."'\">". $row['id_account'] ."</th>
									<td onclick=\"location.href='account_detail.php?id_account=". $row['username'] ."'\">". $row['username']."</td> 
									<td onclick=\"location.href='account_detail.php?id_account=". $row['jabatan'] ."'\">". $row['jabatan']."</td> 
									<td ><button type=\"submit\" class=\"remove\"><i class=\"fa fa-trash\"></i></button></td>
								</tr>
							</table>";
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
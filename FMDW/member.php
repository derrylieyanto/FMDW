<!DOCTYPE html>
<html>
<head>
	<title>MEMBER</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#wrapper{
			 margin: auto;
			 width: 960px;
			 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.member-search{
			margin: auto;
			padding: 20px 10px;	
			background-color: #1975bf;
		}
		.member-search ul li{
			text-decoration: none;
			display: inline-block;
		}
		.member-search ul li a{
			text-align: left;
			text-decoration: none;
			color: #FFF;
			font-size: 36px;
			font-weight: bold;
		}
		.member-search input[type=text]{
			font-size: 30px;
			margin-left: 160px;
		}
		.member-search button{
			font-size: 30px;
		}
		.member-search button#add{
			color: white;
			margin-left: 18px;
			background-color: green;
			border-color: green;
			border-radius: 5px;
		}
		.members{
			margin: auto;
			padding: 10px;
		}
		.members table{
			border-bottom: 5px solid #eee;
			margin-bottom: 10px;
		}
		.members table, th, td{
			width: 100%;
			border-collapse: collapse;
			
		}
		.members th{
			padding-right: 350px;
			padding-left: 10px;
			text-align: left;
			font-weight: normal;
		}
		.members th.nama-member{
			font-weight: bold;
			color: #1975bf;
			font-size: 24px;
		}
		.members th.email-member{
			vertical-align: top;
		}

		.members td{
			padding: 0px 25px;
		}
		.members img{
			width: 180px;
			height: 180px;
			border: 2px solid #1975bf;
			border-radius: 90px;
		}
		.members button{
			color: white;
			font-size: 30px;
			background-color: red;
			border-color: red;
			border-radius: 5px;
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
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li>Member</li>
		</ul>
	<div id="wrapper">		
		<div class="member-search">
			<ul>
				<li><a href="#">Member List</a></li>
				<li>
					<form action="action_page.php">
			      		<input type="text" placeholder="Search.." name="search">
			      		<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
			      	</form>
			    </li>
			    <li><button type="submit" id="add" onclick="location.href='tambahAccount.php'"><i class="fa fa-plus"></i></button></li>
				</ul>
		</div>
		<div class="members">

			<table class="member1">
				<tr>
					<th class="nama-member" onclick="location.href='detailMember.php'">Nama  : Shigeo Tokuda</th>
					<td rowspan="2"  onclick="location.href='detailMember.php'"><img src="images/mahart.png"></td>
					<td rowspan="2"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<th class="email-member" onclick="location.href='detailMember.php'">Email : shigeo69@gmail.com</th>
				</tr>
			</table>
			<table class="member2">
				<tr>
					<th class="nama-member" onclick="location.href='detailMember.php'">Nama  : Shigeo Tokuda</th>
					<td rowspan="2"  onclick="location.href='detailMember.php'"><img src="images/mahart.png"></td>
					<td rowspan="2"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<th class="email-member" onclick="location.href='detailMember.php'">Email : shigeo69@gmail.com</th>
				</tr>
			</table>
			<table class="member3">
				<tr>
					<th class="nama-member" onclick="location.href='detailMember.php'">Nama  : Shigeo Tokuda</th>
					<td rowspan="2"  onclick="location.href='detailMember.php'"><img src="images/mahart.png"></td>
					<td rowspan="2"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<th class="email-member" onclick="location.href='detailMember.php'">Email : shigeo69@gmail.com</th>
				</tr>
			</table>
			<table class="member4">
				<tr>
					<th class="nama-member" onclick="location.href='detailMember.php'">Nama  : Shigeo Tokuda</th>
					<td rowspan="2"  onclick="location.href='detailMember.php'"><img src="images/mahart.png"></td>
					<td rowspan="2"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<th class="email-member" onclick="location.href='detailMember.php'">Email : shigeo69@gmail.com</th>
				</tr>
			</table>
			<table class="member5">
				<tr>
					<th class="nama-member" onclick="location.href='detailMember.php'">Nama  : Shigeo Tokuda</th>
					<td rowspan="2"  onclick="location.href='detailMember.php'"><img src="images/mahart.png"></td>
					<td rowspan="2"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<th class="email-member" onclick="location.href='detailMember.php'">Email : shigeo69@gmail.com</th>
				</tr>
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
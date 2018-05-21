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
			text-align: center;
		}
		.account table td{
			padding: 5px 0px;
			border-top: 3px solid #ddd;
			text-align: center;
			cursor: pointer;
		}
		.account tr:hover{
			background-color: #ddd;
		}
		.account th:hover{

		}
		.account button:hover{
			background-color: #ff3333;
		}
		.account button{
			color: white;
			background-color: red;
			border-color: red;
			font-size: 24px;
			border-radius: 5px;
		}
		
		th{
			cursor: pointer;
		}
		.th{
			cursor: pointer;
			font-weight: bold;
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
      				<a class="logout" href="logout.php">LOG OUT</a>
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
						<input type="text" name="submit_search" placeholder="Find username.." name="search" id="myInput" style="width: 250px" onkeyup="searchFunction()">
					</form>
					<!--tambah-->
					<button type="submit" id="add" onclick="location.href='tambahAccount.php'"><i class="fa fa-plus"></i></button></li>
				</div>
				<div class="account">
					<table id="account-table">
						<thead>
							<td onclick="sortTable(0)">No<i class="fas fa-sort"></i></td>
							<td onclick="sortTable(1)" class="th">Username<i class="fas fa-sort"></i></td>
							<td onclick="sortTable(2)" class="th">Jabatan<i class="fas fa-sort"></i></td>
							<td></td>
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
				    	echo "<tr>";
						echo "<td onclick=\"location.href='account_detail.php?id_account=". $row['id_account'] ."'\">". $row['id_account'] ."</td>";
						echo "<td onclick=\"location.href='account_detail.php?id_account=". $row['id_account'] ."'\">". $row['username']."</td>";
						echo "<td onclick=\"location.href='account_detail.php?id_account=". $row['id_account'] ."'\">". $row['jabatan']."</td>";
						echo "<td ><button type=\"submit\" onclick=\"location.href='deleteAccount.php?id_account=". $row['id_account'] ."'\" class=\"remove\"><i class=\"fa fa-trash\"></i></button></td>"; 
						echo "</tr>";		
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
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("account-table");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<script>
function searchFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("account-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<script src="js/tableSort.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<tr onclick="location.href='account_detail.php'">
							<td>1</td>
							<td >Admin0</td>
							<td>ADMIN</td>
							<td class="remove-acc"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
						</tr>
						<tr onclick="location.href='account_detail.php'">
							<td>3</td>
							<td>Kasir1</td>
							<td>KASIR</td>
							<td class="remove-acc"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
						</tr>
						<tr onclick="location.href='account_detail.php'">
							<td onclick="location.href='account_detail.php'">2</td>
							<td onclick="location.href='account_detail.php'">ajc98</td>
							<td onclick="location.href='account_detail.php'">MEMBER</td>
							<td class="remove-acc"><button type="submit" class="remove"><i class="fa fa-trash"></i></button></td>
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
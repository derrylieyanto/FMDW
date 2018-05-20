<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="js/jquery-3.3.1.min"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		function Historis(){
			$("#historis").hide().fadeIn(500);
			$("#status").hide();
		}
		function Status(){
			$("#historis").hide();
			$("#status").hide().fadeIn(500);
		}
		document.getElementById("default-open").click();
	</script>

	<style type="text/css">
		#wrapper{
			 margin: auto;
			 width: 960px;
			 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.title{
			margin: auto;
			background-color: #1975bf;
		}
		.title h1{
			margin-left: 10px;
			font-size: 36px;
			color: white;
			padding: 15px;
		}
		.title button{
			width: 100px;
			height: 50px;
			background-color: white;
		}
		.inline{
			display: inline-block;
		}
		.active{
			background-color: #2196F3;
			color: white;
		}
		#historis input[type=text], #historis button{
			margin: 10px 2px;
			font-size: 24px;
		}
		#historis select{
			margin-left: 320px;
			font-size: 24px;
			color: gray;
		}#statusdvd input[type=text], #statusdvd button{
			margin: 10px 2px;
			font-size: 24px;
		}
		#statusdvd select{
			margin-left: 416px;
			font-size: 24px;
			color: gray;
		}
		#status input[type=text], #status button{
			margin: 10px 2px;
			font-size: 24px;
		}
		#status select{
			margin-left: 415px;
			font-size: 24px;
			color: gray;
		}

		table{
			width: 95%;
			margin: auto;
		}

		table, th, td{
			border: 1px solid #ddd;
			border-collapse: collapse;
			opacity: 0.95;	
		}
		th, td{
			padding: 10px;
			text-align: center;
		}

		th{
			padding: 20px 0px;
			background-color: #2196F3;
			color: white;
		}

		tr:nth-child(even){
			background-color: lightblue;
		}
		.tab{
			overflow: hidden;
		}
		.tab button{
			background-color: #e9e9e9;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
		}
		.tabcontent{
			display: none;
			border-top: none; 
		}
		.tab button:hover {
    		background-color: #ddd;
    		color: black;
		}
		.tab button.active{
			background-color: white;
			color: black;
		}
		
	</style>

	<script type="text/javascript">
	function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
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
				<a href="account.php">Account</a>
				<a class="active" href="report.php">Report</a>
	  		
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
		  <li>Report</li>
		</ul>
		<div id="wrapper">
			<div class="title">
			<h1>REPORT</h1>
				<div class="tab">
					<button class="tablinks"  type="button" id="default-open" onclick="openTab(event, 'historis')">HISTORIS</button>
					<button type="button" class="tablinks" onclick="openTab(event, 'statusdvd')">STATUS DVD</button>
				</div>
	      	</div>
      		<div id="historis" class="tabcontent">
      			<form class="inline">
						<select name="filter">
						    <option value="search_by_no">No</option>
							<option value="search_by_idtransaksi">ID Transaksi</option>
							<option value="search_by_idbarang">ID Barang</option>
							<option value="search_by_namabarang">Nama Barang</option>
							<option value="search_by_idmember">ID Member</option>
							<option value="search_by_tanggalpinjam">Tanggal Pinjam</option>
							<option value="search_by_tanggalpengembalian">Tanggal Pengembalian</option>
							<option value="search_by_harga">Harga</option>
							<option value="search_by_denda">Denda</option>
							<option value="search_by_totalharga">Total Harga</option>
						</select>
						<input type="text" placeholder="Search.." name="search">
		      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
				</form>
			<table>
				<tr>
					<th>No</th>
					<th>ID Transaksi</th>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>ID Member</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Pengembalian</th>
					<th>Harga</th>
					<th>Denda</th>
					<th>Total Harga</th>
				</tr>
				<tr>
					<td>1</td>
					<td>00001</td>
					<td>1</td>
					<td>Black Panther</td>
					<td>001</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp50,000.00</td>
					<td>Rp -</td>
					<td>Rp50,000.00</td>
				</tr>
				<tr>
					<td>2</td>
					<td>00002</td>
					<td>2</td>
					<td>Black</td>
					<td>002</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp25,000.00</td>
					<td>Rp -</td>
					<td>Rp25,000.00</td>
				</tr>
				<tr>
					<td>3</td>
					<td>00003</td>
					<td>3</td>
					<td>Panther</td>
					<td>003</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp30,000.00</td>
					<td>Rp -</td>
					<td>Rp30,000.00</td>
				</tr>
				<tr>
					<td>4</td>
					<td>00004</td>
					<td>4</td>
					<td>Wakanda</td>
					<td>004</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp50,000.00</td>
					<td>Rp -</td>
					<td>Rp50,000.00</td>
				</tr>
				<tr>
					<td>5</td>
					<td>00005</td>
					<td>5</td>
					<td>Forever</td>
					<td>005</td>
					<td>25-02-2018</td>
					<td>29-02-2018</td>
					<td>Rp75,000.00</td>
					<td>Rp25,000.00</td>
					<td>Rp100,000.00</td>
				</tr>
				<tr>
					<td>6</td>
					<td>00006</td>
					<td>6</td>
					<td>Hesoyam</td>
					<td>006</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp70,000.00</td>
					<td>Rp -</td>
					<td>Rp70,000.00</td>
				</tr>
				<tr>
					<td>7</td>
					<td>00007</td>
					<td>7</td>
					<td>IT</td>
					<td>007</td>
					<td>25-02-2018</td>
					<td>26-02-2018</td>
					<td>Rp50,000.00</td>
					<td>Rp -</td>
					<td>Rp50,000.00</td>
				</tr>
			</table>
			</div>

			<div id="statusdvd" class="tabcontent">
				<form class="inline">
						<select name="filter">
						    <option value="search_by_no">No</option>
							<option value="search_by_idbarang">ID Barang</option>
							<option value="search_by_namabarang">Nama Barang</option>
							<option value="search_by_quantity">Quantity</option>
							<option value="search_by_status">Status</option>
						</select>
						<input type="text" placeholder="Search.." name="search">
		      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
				</form>
			<table>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Quantity</th>
					<th>Status</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Black Panther</td>
					<td>5</td>
					<td>Tersedia</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Black</td>
					<td>5</td>
					<td>Tersedia</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Panther</td>
					<td>5</td>
					<td>Tersedia</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Wakanda</td>
					<td>5</td>
					<td>Tidak Tersedia</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Forever</td>
					<td>5</td>
					<td>Tersedia</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Hesoyam</td>
					<td>5</td>
					<td>Tidak Tersedia</td>
				</tr>
				<tr>
					<td>7</td>
					<td>IT</td>
					<td>5</td>
					<td>Tidak Tersedia</td>
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
	<script type="text/javascript">
		document.getElementById("default-open").click();	
	</script>
	
</body>
</html>

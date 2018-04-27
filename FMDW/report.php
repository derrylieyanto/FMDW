<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	 			<a href="home.php">Home</a>
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
      				<a class="logout" href="#">LOG OUT</a>
    			</form>
  			</div>
  		</div>
	</header>

	<content>
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li>Report</li>
		</ul>
		<h2>REPORT</h2>
		<div>
			<nav>
				<ul>
					<li>HISTORIS</li>
					<li>STATUS DVD</li>
				</ul>
			</nav>
			<div>
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
				<form action="/action_page.php">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit"><i class="fa fa-search"></i></button>
      			</form>
      		</div>

			<table id="historis">
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

			<table id="status">
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

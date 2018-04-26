<!DOCTYPE html>
<html>
<head>
	<title>RETURN</title>
</head>
<body>
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
		<div class="form-container">
			<form action="/action_page.php">
				<label class="form-title">Return</label><br><br>
				<label>ID Transaksi</label><br>
				<input type="text" name="idtransaksi"><br><br>
				<label>ID Member</label><br>
				<input type="text" name="idmember"><br><br>
				<label>Judul Film</label><br>
				<input type="text" name="judulfilm"><br><br>
				<label>Tanggal Pinjam</label><br>
				<input type="date" name="tanggalpinjam"><br><br>
				<label>Tanggal Pengembalian</label><br>
				<input type="date" name="tanggalkembali"><br><br>
				<label>Durasi Peminjaman</label><br>
				<input type="number" name="durasipeminjaman"><br><br>
				<label>Denda</label><br>
				<input type="number" min="0" step="any" name="denda"><br><br>
				<label>Total Biaya</label><br>
				<input type="number" min="0" step="any" name="totalharga"><br><br>
  				<input type="submit" value="Submit"><br>
  				<a class="print-button" href="#">PRINT</a><br>
			</form>
		</div>
	</content>

</body>
</html>
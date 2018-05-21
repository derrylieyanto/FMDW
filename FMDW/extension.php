<?php
	session_start();
	include_once 'connect.php';

	if (isset($_POST['submit'])) {
			$id_transaksi = $_POST['idtransaksi'];
			$tglkembali = $_POST['tanggalpengembalian'];
			$sql2 = "UPDATE transaksi SET tanggal_pengembalian = '$tglkembali' WHERE id_transaksi = '$id_transaksi'";
			if (mysqli_query($conn, $sql2)) {
          $database =  "New record created successfully";
		    } else {
		          $database = "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		    }

		    mysqli_close($conn);

		    echo '<script type="text/javascript">alert("'.$database.'");</script>';

		}

	if (isset($_POST['confirm'])) {
		$id_transaksi = $_POST['idtransaksi'];
		$sql = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($result)) {
			$idmember = $row['id_member'];
			$idfilm = $row['id_film'];
			$tglpinjam = $row['tanggal_pinjam'];
			$tglkembali = $row['tanggal_pengembalian'];
			$pembayaran = $row['pembayaran'];
		
		
			}

			mysqli_close($conn);

		}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Extension</title>
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" type="text/css" href="style/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
		#container{
			
		    margin: auto;
		    width: 960px;
		    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
	    .column{
	      float: left;
	      margin-right: 2px;
	    }
	    .gambar{
	      width: 39%;

	    }
	    .content{
	      width: 60%;
	    }
	    .row:after{
	      content: "";
	      display: table;
	      clear: both;
	    }
	    .gambar img{
	      display: block;
	      margin-left: auto;
	      margin-right: auto;
	      border: 3px solid #1975bf;
	      padding: 5px;
	      border-radius: 5px;
	      width: 50%;
	      
	    }
	    .gambar h3{
	    	text-align: center;
	    	color: #1975bf;
	    }
	    .harga{
	    	float: right;
	    	color: #1975bf;
	    	font-weight: bold;
	    }

	    
	</style>

	<script type="text/javascript">
		$( document ).ready(function() {

			

		    $('#returndate').change(function() {
			   var date1 = $('#returndate').val().substr(8,2);
			   var date2 = $('#tanggalpinjam').val().substr(8,2);
			   var durasi = Math.abs(date2 - date1);
			   var harga = durasi * 10000;
			   var harga = "Harga: Rp " + harga + ",-";
			   $('.harga').empty().append(harga);
			});
		});

		
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
				<a class="active" href="rent.php">Rent</a>
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
		  <li><a href="rent.php">Rent</a></li>
		  <li>Extension</li>
		</ul>
		<div id="container">
			<div class="form-title">
						<h1>Extension</h1>
					</div>
			<div class="row">
				<div class="column content">
					
					<form action="extension.php" method="post" class="form">
						<label>ID Transaksi</label><br>
						<input type="text" name="idtransaksi"><br><br>
						<input class="submit" name="confirm" type="submit" value="Confirm" id="confirm"><br><br><br>
						<div id="isi">
							<label>ID Film</label><br>
							<input type="text" name="idfilm" id="idfilm" onchange="loadDoc()" value="<?php echo $idfilm; ?>"><br><br>
							<label>Tanggal Pinjam</label><br>
							<input type="date" name="tanggalpinjam" id="tanggalpinjam" value="<?php echo $tglkembali; ?>"><br><br>
							<label>Tanggal Pengembalian</label><br>
							<input type="date" name="tanggalpengembalian" id="returndate"><br><br>
							<label>Metode Pembayaran</label><br>
			  				<div class="harga">
			  					Harga: Rp 0,-
			  				</div>
							<input type="radio" name="pembayaran" value="Cash" checked> Cash<br>
			  				<input type="radio" name="pembayaran" value="Transfer"> Transfer<br><br><br>
			  				<input class="submit" name="submit" type="submit" value="Submit"><br>
		  				</div>
					</form>
					<br>
					<br>
					<br>
				</div>

				<div class="column gambar">
					<h3>Kenangan di Perpus</h3>
					<img src="images/film2.jpg">
				</div>



				
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
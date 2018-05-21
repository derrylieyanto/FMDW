<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH MEMBER</title>
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/breadcrumb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	*{
		font-family: sans-serif;
	}
	.menjorok{
		margin: auto;
    	width: 960px;
    	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
		 input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    }

    input[type=submit]:hover{
    background-color: #45a049;
    }

    input[type=text]{
      width: 55%;
      padding: 12px 20px;
      margin: 8px 0;
      font-size: 20px;
    }
    input[type=password]{
      width: 55%;
      padding: 12px 20px;
      margin: 8px 0;
      font-size: 20px;
    }

    input[type=date]{
      width: 55%;
      padding: 12px 20px;
      margin: 8px 0;
      font-size: 20px;
    }

    input[type=file]{
      width: 55%;
      padding: 12px 20px;
      margin: 8px 0;
      font-size: 20px;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
	 }

     input[type=text]:focus{
      background-color: lightblue;
    }

    .menjorok{
    	padding: 15px;

    }
    #cancel{
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: tomato;
		  width: 50%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
	}
	#cancel:hover{
		  background: red;
	}
	#inline{
		display: inline;
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
      				<a class="logout" href="logout.php">LOG OUT</a>
    			</form>
  			</div>
  		</div>
	</header>

	<content>
		<ul class="breadcrumb">
		  <li><a href="home.php">Home</a></li>
		  <li><a href="member.php">Member</a></li>
  		  <li>Tambah Member</li>
		</ul>

		<div class="menjorok">
			<form class="member-form" action="prosesTambahMember.php" method="post" enctype="multipart/form-data">
				<h4>Full Name</h4>
				<input type="text" id="nama" required="" name="nama" placeholder="Nama Lengkap"/>
				<h4>Password</h4>
				<input type="password" id="password" name="password" placeholder="Password" required=""/>
				<h4>Email</h4>
				<input type="text" id="email" name="email" placeholder="Email" required=""/>
				<h4>Alamat</h4>
				<input type="text" id="alamat" name="alamat" placeholder="Alamat" required=""/>
				<h4>Tanggal lahir</h4>
				<input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required=""/>
				<h4>Status</h4>
				<input type="text" id="status" name="status" placeholder="Pekerjaan" required=""/>
				<h4>Foto Profil</h4>
				<input type="file" name="foto_member" id="foto_member" placeholder="Foto Profil" required=""/>
				<p></p>
				<div id="inline">
					<input type="submit" name="submit" value="Tambah Member">
					<a id="cancel" onclick="location.href='member.php'">Cancel</a>
				</div>
			</form>
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
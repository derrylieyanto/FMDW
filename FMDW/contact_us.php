<!--user mode, belum dimasukin ke root mode-->
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
	 			<a href="home.php" style="color: gray; font-size: 30px;padding: 6px 16px;
"><i class="fa fa-home"></i></a>
				<a href="film.php">Film</a>
				<a href="member.php">Member</a>
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
		>> <a href="#">Contact Us</a>
		<div>
			<h1>Contact Us</h1>
			<p>We are here to answer any questions you may have about our website experiences. Reach out to us and we'll respond as soon as we can</p>
			<p>Even if there is something you have always wanted to experience and can't find it on our website, let us know and we promise we'll do our best to find it for you and send you there</p>
			<div class="two-col">
    			<div class="col1">
     			   <label for="field1">NAME</label>
      			  <input id="field1" name="name_CON_US" type="text">
   			 </div>
   			 <div class="col2">
     			<label for="field2">EMAIL</label>
      			<input id="field2" name="email_CON_US" type="text">
  		     </div>
  		     <div>
  		     	<label for="message">MESSAGE</label>
  		     	<input type="textboxid" name="message_CON_US">
  		     </div>
			</div>
			<input type="submit" name="send_CON_US">
		</div>
		<aside>
			<!--bagian aside berisi email telefon alamat dsb-->
		</aside>
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
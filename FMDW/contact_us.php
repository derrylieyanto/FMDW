<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>

<body>
	<div id="main-container">

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
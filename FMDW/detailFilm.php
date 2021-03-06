<!DOCTYPE html>
<html>
<head>
	<title>Detail Film</title>
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
        <a class="active" href="film.php">Film</a>
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
	<ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li><a href="film.php">Film</a></li>
    <li>Black Panther</li>
  </ul>

	<table style="width:100%">
  <tr>
    <td><h1>Detail Film</h1></td> 
    <td rowspan="3"><img id="poster" src="images/film5.jpg" height="300px" width="225px"></td> <!--Ambil dari database-->
  </tr>
  <tr>
    <td><h2>Judul Film</h2></td>
  </tr>
  <tr>
    <td><!--Ambil dari database-->Black Panther</td>
  </tr>
</table>
	<p><h2>Sinopsis</h2></p>
  	<p>After the death of his father, T'Challa returns home to the African nation of Wakanda to take his rightful place as king. When a powerful enemy suddenly reappears, T'Challa's mettle as king -- and as Black Panther -- gets tested when he's drawn into a conflict that puts the fate of Wakanda and the entire world at risk. Faced with treachery and danger, the young king must rally his allies and release the full power of Black Panther to defeat his foes and secure the safety of his people.</p>
  	<p><h2>Tanggal Rilis</h2></p>
  	29-jan-2018
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
<!DOCTYPE html>
<html>
<head>
	<title>Detail Film</title>
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
	Film >> <a href="#">Detail Film</a>

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
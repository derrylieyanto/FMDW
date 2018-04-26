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
	<h1>Detail Film</h1>

	<table style="width:100%">
  <tr>
    <td><h1>Detail Film</h1></td> 
    <td rowspan="3"><img src="poster.jpg"></td> <!--Ambil dari database-->
  </tr>
  <tr>
    <td><h2>Judul Film</h2></td>
    <td><!--Ambil dari database-->Blek dogi</td>
  </tr>
</table>
	<p><h2>Sinopsis</h2></p>
  	<p>dfghhgfkalhuihfigha ishfdikhasfhjaslkdhsldfa flasdjhf sdfhskl dfsahf asjdf asdjf safh sasfhskfhasdfjkshadfk sagdfklaseghr gsaldfhgsadfla dfhgsadgfs fhjks fshf ksf s fs fsfhsk fs fsf sfhskfhsajfhjaldjhfasdhfkja sdjfh asdjfhskjdhfaskld fhalsufie whrlsagdfh adfjlsagfs kslf sakdfj sadjkfsa kfjhaksdfghs kasjdhf sdkfalshdf asdfjk sdkflhueiwyoprq.</p>
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
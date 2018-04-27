<!DOCTYPE html>
<html>
<head>
	<title>Film</title>
	<style type="text/css">
		aside ul {
			list-style-image: url(https://assets.ubuntu.com/sites/ubuntu/latest/u/img/favicon.ico);
		}
		#film_poster{
			width: 225px;
			height: 300px;
		}
		#sebatsbro{
			text-align: center;
		}
	</style>
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
		>>FILM
		<aside>
			<p></p>
			<table><tr><th>Category</th></tr></table>
			<table>
				<tr><ul><li><a href="#">Action</a></li></ul></tr>
				<tr><ul><li><a href="#">Adventure</a></li></ul></tr>
				<tr><ul><li><a href="#">Asia</a></li></ul></tr>
				<tr><ul><li><a href="#">Biography</a></li></ul></tr>
				<tr><ul><li><a href="#">Cartoon</a></li></ul></tr>
				<tr><ul><li><a href="#">Chinese</a></li></ul></tr>
				<tr><ul><li><a href="#">Comedy</a></li></ul></tr>
				<tr><ul><li><a href="#">Crime</a></li></ul></tr>
				<tr><ul><li><a href="#">Drama</a></li></ul></tr>
				<tr><ul><li><a href="#">Family</a></li></ul></tr>
				<tr><ul><li><a href="#">Fantasy</a></li></ul></tr>
				<tr><ul><li><a href="#">Hindi</a></li></ul></tr>
				<tr><ul><li><a href="#">History</a></li></ul></tr>
				<tr><ul><li><a href="#">Horror</a></li></ul></tr>
				<tr><ul><li><a href="#">Japan</a></li></ul></tr>
				<tr><ul><li><a href="#">Koleksi</a></li></ul></tr>
				<tr><ul><li><a href="#">Korea</a></li></ul></tr>
				<tr><ul><li><a href="#">Movie</a></li></ul></tr>
				<tr><ul><li><a href="#">Music</a></li></ul></tr>
				<tr><ul><li><a href="#">Mystery</a></li></ul></tr>
			</table>
		</aside>
		<div>
			<h1>Film List</h1>
			<!--tambah-->
				<img src="">
			<form>
				<select name="sortby">
				  <option value="Most Popular">Most Popular</option>
				  <option value="Newest">Newest</option>
				  <option value="Most Grossing">Most Grossing</option>
				</select>
				<input type="text" placeholder="Search.." name="search">
      			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
			</form>
			<!--show pictures with names on bottom-->
			<table id="sebatsbro">
				<tr>
					<td>
			          <img id="film_poster" src="images/film1.jpg">
			          <br/>IT
			        </td>

			        <td>
			          <img id="film_poster" src="images/film2.jpg">
			          <br/>Bokep Jepang
			        </td>

			        <td><img id="film_poster" src="images/film3.jpg">
			          <br/>Dilan
			        </td>

			        <td><img id="film_poster" src="images/film4.jpg">
			          <br/>Maze Runner
			        </td>
				</tr>
				<tr>
					<td>
			          <img id="film_poster" src="images/film5.jpg">
			          <br/>Black Panther
			        </td>

			        <td>
			          <img id="film_poster" src="images/film6.jpg">
			          <br/>Jumanji
			        </td>

			        <td><img id="film_poster" src="images/film7.jpg">
			          <br/>American Pie
			        </td>

			        <td><img id="film_poster" src="images/film8.jpg">
			          <br/>Sex is Zero
			        </td>
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
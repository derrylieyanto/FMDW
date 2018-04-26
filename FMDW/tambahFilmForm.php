<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Film</title>
</head>
<body>
	<header></header>
	<content>
		<h1>Penambahan Film</h1>
		<h3>Isi data-data berikut untuk menambah film</h3>
		<form action="/action_page.php">
  			<p><h2>Judul Film</h2></p> <input type="text" name="judulFilm"><br>
  			<p><h2>Tanggal Rilis</h2></p><input type="date" name="date"><br>
  			<p><h2>Genre</h2></p>
  			<input type="checkbox" name="genres" value="action"> Action<br>
  			<input type="checkbox" name="genres" value="adventure" checked>Adventure<br>
  			<input type="checkbox" name="genres" value="animation"> Animation<br>
  			<input type="checkbox" name="genres" value="comedy"> Comedy<br>
  			<input type="checkbox" name="genres" value="horror"> Horror<br>
  			<input type="checkbox" name="genres" value="martial Arts"> Martial Arts<br>
  			<input type="checkbox" name="genres" value="thriller"> Thriller<br>
  			<input type="checkbox" name="genres" value="sci-fi"> Sci-fi<br>
  			<input type="text" name="genres" placeholder="Other"><br>
  			
  			<p><h2>Status</h2></p>
  			<input type="radio" name="status"> Tersedia
			<input type="radio" value="status"> Tidak Tersedia

			<p><h2>Harga Pinjam</h2></p>
			<input type="text" name="harga" placeholder="Masukkan harga pinjam">
			<p></p>
			<input type="submit" name="submit" value="Submit">
		</form>
	</content>
	<footer></footer>
</body>
</html>
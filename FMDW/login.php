<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style>
		.main-container{
			overflow: hidden;

		}
		.logo{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
			padding: 0px 0px 20px 0px;
		}
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
	
			font-weight: 300;
		}
		h1{
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			color: #2196F3;
		}

		input{
		display: block;
		appearance: none;
		outline: 0;
		border: 1px solid fade(white, 40%);
		background-color: fade(white, 20%);
		width: 250px;
		
		border-radius: 3px;
		padding: 10px 15px;
		margin: 0 auto 10px auto;
		display: block;
		text-align: center;
		font-size: 18px;
		
		color: black;
		
		transition-duration: 0.25s;
		font-weight: 300;
		}

		form{
		width: 250px;
		border-radius: 3px;
		padding: 10px 15px;
		margin: 0 auto 10px auto;
		display: block;
		text-align: center;
		font-size: 18px;
		
		color: white;
		
		
		font-weight: 300;
		 background-color: #2196F3;
		}

		button{
		appearance: none;
		outline: 0;
		background-color: white;
		border: 0;
		padding: 10px 15px;
		color: @prim;
		border-radius: 3px;
		width: 250px;
		cursor: pointer;
		font-size: 18px;
		transition-duration: 0.25s;
		}

	</style>
	
</head>
<body>
	<div id="main-container">
		<div class="logo-container">	
		<img src="images/FMDW.png" alt="logo FMDW" class="logo">
		</div>
		<div class="title">
			<h1>LOGIN SYSTEM</h1>
		</div>


		<form action="action_page.php">

  			<div class="container-form">
    			<input type="text" placeholder="Enter Username" name="uname" required>
    			<br>
    			<input type="password" placeholder="Enter Password" name="psw" required>
    			<br>
    			<input type="submit" name="submit" value="LOGIN">
    			<br>
  			</div>

		</form>

		<div id="footer">
			<hr>
			<p>Copyright 2018 FM DW. All Rights Reserved</p>
		</div>
	</div>
</body>
</html>
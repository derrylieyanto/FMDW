<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<style>
		.main-container{
			overflow: hidden;

		}
		.logo-container{
			background-color: #2196F3;
		}
		.logo{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
			padding: 20px 0px;
			
		}
		.title{
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			color: #2196F3;
		}
		.login-form{
			text-align: center;
		}
		.form{
			  position: relative;
			  background: #FFFFFF;
			  width: 360px;
			  margin: 0 auto 100px;
			  padding: 45px;
			  text-align: center;
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			  
		}
		.login-title{
			text-align: center;
			font-family: "Roboto", sans-serif;
			color: #1975bf;
			font-weight: bold;
			font-size: 24px;
			padding: 10px 0px;
			margin-bottom: 15px;
		}
		.form input {
			  font-family: "Roboto", sans-serif;
			  outline: 0;
			  background: #f2f2f2;
			  width: 100%;
			  border: 0;
			  margin: 0 0 15px;
			  padding: 15px;
			  box-sizing: border-box;
			  font-size: 14px;
		}

		.form input[type="submit"] {
			  font-family: "Roboto", sans-serif;
			  text-transform: uppercase;
			  outline: 0;
			  background: #1975bf;
			  width: 100%;
			  border: 0;
			  padding: 15px;
			  color: #FFFFFF;
			  font-size: 14px;
			  -webkit-transition: all 0.3 ease;
			  transition: all 0.3 ease;
			  cursor: pointer;
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

		
		<div class="login-form">
			<form action="action_page.php" class="form">
					<div class="login-title">
						<label>LOGIN</label>
					</div>
	    			<input type="text" placeholder="Enter Username" name="uname" required>
	    			<input type="password" placeholder="Enter Password" name="psw" required>
	    			<input type="submit" name="submit" value="LOGIN" onclick="location.href='return.php'">
			</form>
  		</div>

		<div id="footer">
			<hr>
			<p>Copyright 2018 FM DW. All Rights Reserved</p>
		</div>
	</div>
</body>
</html>
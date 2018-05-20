<?php
	session_start();
	include 'connect.php';
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$jabatan = $_POST['jabatan'];

		$sql = "INSERT INTO account (nama, username, email, password, jabatan) VALUES ('$nama','$username','$email','$password','$jabatan')";
		if (mysqli_query($conn, $sql)) {
		    echo "New Account created successfully";
		    header("location:account.php");
		} 
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>
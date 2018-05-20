<?php
	session_start();
	include 'connect.php';
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$status = $_POST['status'];
		$foto_member = $_POST['foto_member'];

		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["foto_member"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($target_file,$target_dir);

		$sql = "INSERT INTO member (nama, password, email, alamat, tanggal_lahir, status, foto_member) VALUES ('$nama','$password','$email','$alamat','$tanggal_lahir','$status','$foto_member')";

		if (mysqli_query($conn, $sql)) {
		    echo "New Member created successfully";
		    header("location:member.php");
		} 
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	
?>

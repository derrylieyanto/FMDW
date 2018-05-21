<?php

	session_start();
	include 'connect.php';

			$id_member = $_SESSION['id_member'];
			$id_member = $_GET['id_member'];
			$sql = "DELETE FROM member WHERE member.id_member = '$id_member'";

			if (mysqli_query($conn, $sql)) {
			    echo "delete successfully";
			    header("location:member.php");
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

?>
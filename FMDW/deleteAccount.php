<?php

	session_start();
	include 'connect.php';

			$id_account = $_SESSION['id_account'];
			$sql = "DELETE FROM account WHERE account.id_account = '$id_account'";

			if (mysqli_query($conn, $sql)) {
			    echo "delete successfully";
			    header("location:account.php");
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

?>
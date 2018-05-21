<?php

	session_start();
	include 'connect.php';

			$id_film = $_GET['id_film'];
			$sql = "DELETE FROM film WHERE film.id_film = '$id_film'";

			if (mysqli_query($conn, $sql)) {
			    echo "delete successfully";
			    header("location:film.php");
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

?>
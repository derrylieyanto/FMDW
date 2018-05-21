<?php

	session_start();
	include 'connect.php';


	mysqli_query($conn, "DELETE FROM account WHERE id_account='$id_account'")
  or die(mysqli_error($conn));

?>
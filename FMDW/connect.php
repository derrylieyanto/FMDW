<?php
$server= 'localhost';
$username= 'root';
$password= '';
$database='71160010';

// Create connection
$conn = mysqli_connect($server , $username , $password ,$database );

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
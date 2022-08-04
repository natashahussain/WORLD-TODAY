<?php
//session_start

session_start();

//conection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "world";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

?>
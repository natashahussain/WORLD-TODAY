<?php
include 'world_connection.php';
if(isset($_POST['start']))
{
  $u_id=$_SESSION['user_id'];
$sname=$_POST['sname'];
$simg=$_POST['simg'];
$sprice=$_POST['sprice'];
$about=$_POST['about'];
}

$timestamp1 = time();
 $mysql_start = date("H:i:s", $timestamp1);


 $new_time = date("H:i:s", strtotime('+30 minutes', $timestamp1));
 //echo $mysql_start;
 //echo $new_time;

$sql = "INSERT INTO `sb`( `sname`, `simg`,`sprice`,`about`,`user_id`,`end_time`) VALUES ('$sname','$simg','$sprice','$about','$u_id','$new_time')";

if (mysqli_query($conn, $sql)) {
   $_SESSION['name']=$sname;
  
   
 
	header("Location:first_comment.php");
  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }



?>

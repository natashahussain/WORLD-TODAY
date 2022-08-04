<?php
include 'world_connection.php';
$uname=$_POST['uname'];
print_r($_POST);
$uemail=$_POST['uemail'];
$upwd=$_POST['upwd'];
$phone=$_POST['phone'];

$sql = "INSERT INTO `user_log`( `user_name`, `user_mail`, `user_password`, `phone`) VALUES ('$uname','$uemail','$upwd','$phone')";




if (mysqli_query($conn, $sql))
 {
  echo " record created successfully";
} 
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
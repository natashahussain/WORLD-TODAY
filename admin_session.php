<?php
include 'world_connection.php';

$admin_name=$_POST['admin_name'];
$admin_password=md5($_POST['admin_password']);
//echo $admin_password;
$image_query=mysqli_query($conn, "SELECT * FROM `admin_log` WHERE adm_name='$admin_name' ");


if($admin_name&&$admin_password)
{

while ($row = mysqli_fetch_array($image_query))
{
    
    if($admin_password == $row['adm_password'] && $admin_name == $row['adm_name'])
      {
        $_SESSION['admin_id'] = $row['adm_id'];
      //  $_SESSION['admin_name'] = $row['admin_name'];
        header("Location: admin_home.php");
      }
      else
  {
  die("incorrect username/password!");

   }

}
}
?>


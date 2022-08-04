<?php
include 'world_connection.php';
$uname=$_POST['uname'];
$upwd=$_POST['upwd'];
$_SESSION['user_name'] = $uname; 
$_SESSION['phone'] = $uphone;
echo '$upwd';
$sql = mysqli_query($conn, "SELECT * FROM user_log WHERE user_name='$uname'");

if ($uname&&$upwd)
{

while ($row = mysqli_fetch_array($sql))
{
    
    if($upwd == $row['user_password'] && $uname == $row['user_name'])
      {
        $_SESSION['username']=$row['user_name'];
        $_SESSION['user_id'] = $row['u-id'];
        $_SESSION['user_mail'] = $row['user_mail'];
        
            
        header("Location: user.php");
      }
      else
  {
  die("incorrect username/password!");

   }

}
}
?>
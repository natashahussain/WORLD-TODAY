<?php
include 'world_connection.php';
if(isset($_POST['to_admin'])){
$news=$_POST['heading'];
$image=$_POST['img'];
$category=$_POST['category'];
$body=$_POST['message'];
$sql = "INSERT INTO news(heading,body,image,category)
VALUES('$news','$body','$image','$category')";


if (mysqli_query($conn, $sql)) {
 
	echo "YOUR POST IS SUBMITTED TO ADMIN";
  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
 
else{
  
    $news=$_POST['heading'];
    $image=$_POST['img'];
    $category=$_POST['category'];
    $body=$_POST['message'];
    $sql = "INSERT INTO saved_news(heading,body,image,category)
    VALUES('$news','$body','$image','$category')";
    if (mysqli_query($conn, $sql)) {
      echo "YOUR POST IS Saved";
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
     
}


?>

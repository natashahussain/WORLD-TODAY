<?php
include 'world_connection.php';
     $S = $_SESSION['name'];
     //echo $S;
     $image_topic=mysqli_query($conn,"SELECT * FROM sb WHERE sname = '$S' ");
     
     $row = mysqli_fetch_array($image_topic);

    $s_id = $row['sid'];
   
     
     //$sqli= "INSERT INTO  `pro` (`price`,`s_id`)VALUES('Welcome','$s_id')";

     if (isset($image_topic))
 {
    
    header("Location:new.php?edit=".$s_id);
    exit();

} 
/*else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  */  

?>
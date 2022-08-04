<?php
include 'world_connection.php';
$s_id=$_SESSION['s_id'];

$image_topic=mysqli_query($conn,"SELECT MAX(price) AS max FROM pro WHERE s_id='$s_id'  ");

$row = mysqli_fetch_array($image_topic);

$largestNumber = $row['max'];

?>
<textarea rows="4" cols="6" readonly>
            <?php echo $largestNumber; ?>
               </textarea>



<?php
?>
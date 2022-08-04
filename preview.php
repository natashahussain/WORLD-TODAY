<!DOCTYPE html>
<html lang="en">
<head>
<title>PREVIEW</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
<style>
.button {
   
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */ 
.button3 {background-color: #f44336;} /* Red */ 

</style>

</style>
</head>
<body>
  
<?php
include 'world_connection.php';
if(!empty($_SESSION)){

 
  if($_SESSION['admin_id']!=1 )
     {
        echo $_SESSION['admin_id'];
        ?>
    <!-- <script> window.location.href = "http://localhost/world_news/login.php";</script>   -->
     <?php   
 
     }
 else
 {

$id=$_GET["edit"];
$image_query = mysqli_query($conn,"SELECT * FROM news WHERE n_id= $id");
  $rows = mysqli_fetch_array($image_query);
 //echo $id;
 //print_r($rows);    

 //echo $_SESSION['admin_id'];
 

           
?>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

 
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo $rows['image'] ;?>"  style="width:800px;height:350px;">
 
  </div>
 
  <!-- The Band Section -->
  
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo $rows['heading']; ?></h2>
    
    <p class="w3-justify">"<?php echo $rows['body']; ?>"</p>
    <?php $cid=$rows['n_id'];
   // echo $cid;
    ?>
    <form method="post" action="">
    <button class="button button1" name ='ap' value='<?php echo $cid;?>'>APPROVE</button>
<button class="button button3" name = 'dn' value='<?php echo $cid;?>'>REJECT</button>

  </div>



  
  

  
  
<!-- End Page Content -->
</div>


<?php
if (isset($_POST['ap']))
{
  
      $status="0" ;
      
      mysqli_query($conn,"UPDATE  news SET status='$status' WHERE n_id ='$cid'");

  }
  else if(isset($_POST['dn']))
  {
      //$status="1";
      mysqli_query($conn,"DELETE FROM news WHERE n_id ='$cid'");
      header("Location: table.php"); 
  }

}


       }
    

       else
       {
           
       }
       ?>
</form>
</body>
</html>
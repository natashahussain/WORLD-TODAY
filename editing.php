<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>WROLD-TODAY</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    
<?php
include 'world_connection.php';
$id=$_GET["edit"];       
                if(isset($_POST['to_admin'])){
                $news=$_POST['heading'];
                if($_POST['img']==" "){
                $image = $rows['image'];}
                else{
                $image = $_POST['img'];
                }
                $category=$_POST['category'];
                $body=$_POST['message'];
                $sql_ins = "INSERT INTO news(heading,body,image,category)
                VALUES('$news','$body','$image','$category')";
               
               if (mysqli_query($conn, $sql_ins)) {
                     
                    
                    echo "YOUR POST IS SUBMITTED TO ADMIN";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                }
                if(isset($_POST['save'])){
                  $news=$_POST['heading'];
                  if($_POST['img']==" "){
                    $image = $rows['image'];}
                    else{
                    $image = $_POST['img'];
                    }
                  $body=$_POST['message'];
                  $category=$_POST['category'];
                //  $n_id=$_POST['n-id'];
                  $sql_upd= "UPDATE saved_news SET  heading='$news',category='$category',body='$body',image='$image'  WHERE `n-id`='".$_POST['n-id']."'";

                 if(mysqli_query($conn, $sql_upd)){
                  $message = "<p style:yellow;'>Record Modified Successfully</p>";
                  echo $message;
                 }
                }
                



$sql = mysqli_query($conn,"SELECT * FROM `saved_news` WHERE `n-id` = $id");
  $rows = mysqli_fetch_array($sql);
 // print_r ($rows);
  ?>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Enter the news</h2>
                </div>
                <div class="card-body">
                    <form action=" " method="POST">
                        <div class="form-row">
                            <div class="name">Heading</div>
                            <div class="value">
                            <input type="hidden" name="n-id"  value="<?php echo $rows['n-id']; ?>">
                                <input class="input--style-6" type="text" name="heading" value= "<?php echo $rows['heading']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
              
                                <select name="category" id="category">
                                  <option value="POLITICS"
                                  <?php
                                  if($rows["category"]=='POLITICS')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>
                                  >POLITICS</option>
                                  <option value="SPORTS"
                                  <?php
                                  if($rows["category"]=='SPORTS')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>>SPORTS</option>
                                  <option value="FILMS"
                                  <?php
                                  if($rows["category"]=='FILIMS')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>>FILIMS</option>
                                  <option value="MUSIC"
                                  <?php
                                  if($rows["category"]=='MUSIC')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>>MUSIC</option>
                                  <option value="CRIME"
                                  <?php
                                  if($rows["category"]=='CRIME')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>>CRIME</option>
                                  <option value="SEXUAL-HARASSMENT"
                                  <?php
                                  if($rows["category"]=='SEXUAL-HARASSMENT')
                                  {
                                    echo "selected";
                                  }
                                  
                                  ?>>SEXUAL-HARASSMENT</option>
                                  <option value="INTERNATIONAL"
                                  <?php
                                  if($rows["category"]=='INTERNATIONAL')
                                  {
                                    echo "selected";
                                  }
                                  ?>>INTERNATIONAL</option>
                                  <option value="TERRORISM"
                                  <?php
                                  if($rows["category"]=='TERRORISM')
                                  {
                                    echo "selected";
                                  }
                                  ?>>TERRORISM</option>
                               
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">News</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Enter The Body"><?php echo $rows['body']; ?></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="img" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                
                                    <img src="<?php echo $rows['image']; ?>" width="100">
                                    
                                </div>
                                <div class="label--desc"></div>
                            </div>
                       
                        </div>
                        <div class="card-footer">
                            <!--<input type="button" class="btn btn--radius-2 btn--blue-2" value="Input Button">-->
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" name="save">Save</button>
                            <!--<input type="button" class="btn btn--radius-2 btn--blue-2" value="Input Button">-->
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" name="to_admin">Admin</button>
                      
                                

                    </form>
                    
                        <!--<input type="button" class="btn btn--radius-2 btn--blue-2" value="Input Button">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Admin</button>
                        <a href="table.php" class="btn btn--radius-2 btn--blue-2">Preview</a>-->
                    </div>

                </div>
               
            </div>
        </div>
    </div>
                

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
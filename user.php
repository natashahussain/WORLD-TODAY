<?php 
include 'world_connection.php';
?>
<!DOCTYPE HTML>
<!--
  Ethereal by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
  <head>
    <title>WORLD TODAY  </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  
    <link rel="stylesheet" href="user-assets/css/main.css" />


    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="is-preload">
    <div class="navbar">
      
       <a href="userlog.php">LOGOUT</a>
      <a href="userprofile.php">My Profile</a>
       <a href="user.php">Home </a>
      
      
      <strong> WORLD TODAY</strong>

           

      </div>
      <div class="footer">
      <a href="#home">About us</a>
    
      </div>

    <!-- Page Wrapper -->
      <div id="page-wrapper">

        <!-- Wrapper -->
          <div id="wrapper">

            <!-- Panel (Banner) -->
            <?php
            $conn=  mysqli_query($conn, "select * from news,sb where 'status' = 0 ");
            
            $i=0;
            while($row=  mysqli_fetch_array($conn))
      
            {
              ?>
          <section class="panel spotlight medium right" id="first">
              <div class="content span-7">
                <h2 class="major"><?php echo $row['heading'];?></h2>
                <h3 class="major"><?php echo $row['body'];?></h3>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                <!--<p>Mauris et ligula arcu. Proin dapibus convallis accumsan. Lorem maximus hendrerit orci, sit amet elementum massa hendrerit sed. Donec et ullamcorper ligula. Suspendisse amet potenti. Ut pretium libero eleifend euismod sed tristique. Quisque dictum magna risus, id ultricies justo sagittis vitae. Sed id odio tempor, porttitor elit amet, gravida hendrerit fringilla lorem ipsum dolor.</p>-->
                                <a href="user_preview.php?edit=<?php echo $row['n_id']; ?>"" class="primary"></a>            
                            </div>
              <div class="image filtered tinted" data-position="top left">
                <img src="<?php echo $row['image'];?>" alt="" />
         
              </div>
            </section>
            <section class="panel spotlight medium right" id="first">
              <div class="content span-7">
                <h2 class="major"><?php echo $row['sname'];?></h2>
                <h3 class="major"><?php echo $row['sprice'];?></h3>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                <!--<p>Mauris et ligula arcu. Proin dapibus convallis accumsan. Lorem maximus hendrerit orci, sit amet elementum massa hendrerit sed. Donec et ullamcorper ligula. Suspendisse amet potenti. Ut pretium libero eleifend euismod sed tristique. Quisque dictum magna risus, id ultricies justo sagittis vitae. Sed id odio tempor, porttitor elit amet, gravida hendrerit fringilla lorem ipsum dolor.</p>-->
                                <a href="new.php?edit=<?php echo $row['sid']; ?>"" class="button primary">JOIN NOW</a>            
                            </div>
              <div class="image filtered tinted" data-position="top left">
                <img src="<?php echo $row['simg'];?>" alt="" />
         
              </div>
            </section>
            <?php
                        }
                        ?>
            
                      

          </div>

      </div>

    <!-- Scripts -->
      <script src="user-assets/js/jquery.min.js"></script>
      <script src="user-assets/js/browser.min.js"></script>
      <script src="user-assets/js/breakpoints.min.js"></script>
      <script src="user-assets/js/main.js"></script>


  </body>
</html>


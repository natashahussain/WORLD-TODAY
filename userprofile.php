<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Minimaxing by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="journ_assets/css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">
           
			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<header id="header">
									<h1><a href="userprofile.html" id="logo">WORLD TODAY</a></h1>
									<nav id="nav">
                                        <a href="user.php">Homepage</a>
                                        <a href="userlog.php">LOGOUT</a>
										<a href="userprofile.html" class="current-page-item">Your Profile</a>
										<a href="add.html">ADD PRODUCTS</a>
										<a href="pro_table.php">YOUR PRODUCTS</a>
									
									
										
									</nav>
								</header>

							</div>
						</div>
					</div>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div class="container">

						<div id="banner">
                            
                         <h2>welcome to your profile..
							
							<?php
							include 'world_connection.php';
$S = $_SESSION['user_name'];

     
     $image_topic=mysqli_query($conn,"SELECT * FROM user_log WHERE user_name = '$S' ");

     $i=0;
     while ($row = mysqli_fetch_array($image_topic))
     {
     echo $row['user_name'] ;
     }
     ?>
	 </h2>
	
                           
							<span></span>
					
                        <figure class="snip1376">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample17.jpg" alt="sample17" />
                            <figcaption>
                      
                              
                              <div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
                                <a href="#"> <i class="ion-social-twitter-outline"></i></a>
                                <a href="#"> <i class="ion-social-vimeo-outline"></i></a>
                              </div>
                            </figcaption>
                          </figure>
						  
					</div>
				</div>
</div>

			<!-- Main -->
				<div id="main">
					<div class="container">
						<div class="row main-row">
							<div class="col-4 col-12-medium">

								<section>
									
									
									</footer>
								</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<section>
									<h2></h2>
									<ul class="small-image-list">
										<li>
											
										</li>
										<li>
											
										</li>
									</ul>
								</section>

							</div>
							

		</div>
        
  </footer>
</body>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ADMIN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
       
	</head>
	<body class="is-preload">
		<?php
        include 'world_connection.php';
        //echo $_SESSION['admin_id'];
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

        
       ?>
		
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="header">
									<a href="admin_home.php" class="logo"><strong>Editor by</strong>WROLD TODAY</a>
									
								</header>
                                <?php
                                        $message =  " ";
            
                                ?>
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>ADD CATEGORY<br /></h1>
                                            <form action=" " method="post">
                                             <div class="value">
                                            <input class="input--style-6" type="text" name="category" autocomplete="off">
                                        </div>
                                            <br><br>
                                            <input type="submit" name="submit" value="Submit">
                                            </form>
                                           <?php echo $message; ?>
										
                                    <?php
                                        
                                if(isset($_POST['submit'])){
                                $category = $_POST['category'];
                            
                                $sql = "INSERT INTO category(category_name) VALUES('$category')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "New category: ".$category." is created successfully";
                                  } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                  } }
                                
                                }    
                                ?>
                                </header>
                         
                         </div>
								
								</section>

							


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="admin_home.php">HOMEPAGE</a></li>
										<li><a href="table.php">EDITOR'S TABLE</a></li>
										<li><a href="category.php">ADD CATEGORY</a></li>
										<li><a href="generic.html">JOURNALIST</a></li>
										<li><a href="elements.html">VIEWERS</a></li>
										<li><a href="discussion.html">DISCUSSION</a></li>
										<li><a href="feedback.html">FEEDBACK</a></li>
										<li><a href="logout.php">LOGOUT</a></li>
								
									</ul>
								</nav>

						

						

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			
      <?php
       
    }

       else
       {
           
       }
       ?>
		</body>
</html>
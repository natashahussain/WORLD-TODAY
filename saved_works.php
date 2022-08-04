<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
        include 'world_connection.php';
        ?>
<html>
	<head>
		<title>One Column - Minimaxing by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="journ_assets/css/main.css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<header id="header">
									<h1><a href="journ_.html" id="logo">WORLD NEWS</a></h1>
									<nav id="nav">
										<a href="journ_.html" class="current-page-item">Homepage</a>
										<a href="news.html">ADD NEWS</a>
										<a href="saved_works.php">saved works</a>
									
									
										<!--<a href="threecolumn.html">Three Column</a>-->
									</nav>
								</header>

							</div>
						</div>
					</div>
				</div>

			<

		</div>
        <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">SAVED WORKS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!--<h4 class="text-center mb-4">Create Your Domain Name</h4>-->
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Image</th>
					        <th>Heading </th>
                            <th>ACTION</th>					     
					       
					      </tr>
					    </thead>
                        <?php
        $conn=  mysqli_query($conn, "select * from saved_news");
            $i=0;
            while($row=  mysqli_fetch_array($conn))

            {
                ?>
					    <tbody>
						<tr style="height:200px">
					        
                            <td><img src="<?php echo $row['image'] ;?>" style="width:100px;height:100px;">
                            <td><?php echo $row['heading']; ?></td>
                            <td><a href="editing.php?edit=<?php echo $row['n-id']; ?>" class="btn btn-primary">EDIT</a></td>
					      </tr>
						  <?php
							}
							?>
					     
					    </tbody>
					  </table>
					</div>
   
				</div>
			</div>
		</div>
	</section>

		<!-- Scripts -->
			<script src="journ_assets/js/jquery.min.js"></script>
			<script src="journ_assets/js/browser.min.js"></script>
			<script src="journ_assets/js/breakpoints.min.js"></script>
			<script src="journ_assets/js/util.js"></script>
			<script src="journ_assets/js/main.js"></script>
            <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  
	</body>
</html>




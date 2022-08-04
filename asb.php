<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
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
        
                
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">SELL&BUY TABLE</h2>
                    <a href="admin_home.php">HOME PAGE</a>
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
					        <th>NAME </th>
                            <th>Aproval</th>					     
					       
					      </tr>
					    </thead>
                        <?php
        $conn=  mysqli_query($conn, "select * from sb");
            $i=0;
            while($row=  mysqli_fetch_array($conn))

            {
                ?>
				
					    <tbody>
						<tr style="height:200px">
						
                            <td><img src="<?php echo $row['simg'] ;?>" style="width:100px;height:100px;">
                            <td><?php echo $row['sname']; ?></td>
                            <td><a href="sbpre.php?edit=<?php echo $row['sid']; ?>"" class="btn btn-primary">VIEW</a></td>
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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <?php
       }
    }

       else
       {
           
       }
       ?>
	</body>
</html>


<?php
 session_start();
 if(!isset($_SESSION['manager'])){
   header('Location: index.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/paint-logo.png">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
       
        <?php include "sidebar.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-paint-brush" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3> <?php
                                          include 'connection.php';
          
                
                                          $query = "SELECT count(*) as total FROM staff";
                                          $result = $conn->query($query);
                                          if ($result->num_rows > 0 ){
                                          while ($row = $result->fetch_object()){
                                            $total= $row->total;
                                        ?>
                                        <?php echo $total; ?>
                                        <?php
                                          }
                                        }
                                        ?></h3>
								<span class="widget-title1">No Of Staffs <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php
                                          include 'connection.php';
          
                
                                          $query = "SELECT count(*) as total FROM employeedetail";
                                          $result = $conn->query($query);
                                          if ($result->num_rows > 0 ){
                                          while ($row = $result->fetch_object()){
                                            $total= $row->total;
                                        ?>
                                        <?php echo $total; ?>
                                        <?php
                                          }
                                        }
                                        ?></h3>
                                <span class="widget-title2">No of Employees <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php
                                          include 'connection.php';
          
                
                                          $query = "SELECT count(*) as total FROM manager";
                                          $result = $conn->query($query);
                                          if ($result->num_rows > 0 ){
                                          while ($row = $result->fetch_object()){
                                            $total= $row->total;
                                        ?>
                                        <?php echo $total; ?>
                                        <?php
                                          }
                                        }
                                        ?></h3>
                                <span class="widget-title3">No Of Manager <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                   
                </div>
				
				
            </div>
           
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>
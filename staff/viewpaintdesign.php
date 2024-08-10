<?php
 session_start();
 if(!isset($_SESSION['admin'])){
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
                    <div class="col-sm-12">
                        <h4 class="page-title">View Paint Designs</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card-box">
                            <div class="card-block">
                                
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Paint Design Name</th>
                                                <th>Site Type</th>
                                                <th style="min-width:300px;">Description</th>
                                                <th>Color1</th>
                                                <th>Color2</th>
                                                <th>Color3</th>
                                                <th>Color4</th>
                                                <th>Color5</th>
                                                <th>Image1</th>
                                                <th>Image2</th>
                                                <th>Image3</th>
                                                <th>Image4</th>
                                               
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM paintdesign";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row->id ?></td>
                                                <td><?php echo $row->pdname ?></td>
                                                <td><?php echo $row->sitetype ?></td>
                                                <td><?php echo $row->paintdescription ?></td>
                                                <td><label style="background-color:<?php echo $row->color1 ?>;border-radius:50%; width:20px; height:20px;border: 2px solid black"></label></td>
                                                <td><label style="background-color:<?php echo $row->color2 ?>;border-radius:50%; width:20px; height:20px;border: 2px solid black"></label></td>
                                                <td><label style="background-color:<?php echo $row->color3 ?>;border-radius:50%; width:20px; height:20px;border: 2px solid black"></label></td>
                                                <td><label style="background-color:<?php echo $row->color4 ?>;border-radius:50%; width:20px; height:20px;border: 2px solid black"></label></td>
                                                <td><label style="background-color:<?php echo $row->color5 ?>;border-radius:50%; width:20px; height:20px;border: 2px solid black"></label></td>
                                                <td><img src="<?php echo 'paintimages/'.$row->image1;?>" width="150px" height="80px" /></td>
                                                <td><img src="<?php echo 'paintimages/'.$row->image2;?>" width="150px" height="80px" /></td>
                                                <td><img src="<?php echo 'paintimages/'.$row->image3;?>" width="150px" height="80px" /></td>
                                                <td><img src="<?php echo 'paintimages/'.$row->image4;?>" width="150px" height="80px" /></td>
                                                <td><a href="updatepaintdesign.php?id=<?php echo $row->id?>">Update</a></td>
                                            </tr>
                                      
                                        </tbody>
                                        <?php
                                    $i++;
                    }}
                                    ?>
                                    </table>
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
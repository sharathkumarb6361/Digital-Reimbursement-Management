<?php
 session_start();
 if(!isset($_SESSION['staff'])){
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
                        <h4 class="page-title">View Expensive</h4>
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
                                                <th>Expensive  Name</th>
                                                <th>Total Amount</th>
                                                <th>Status</th>
                                                <th>Payment Status</th>
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM expense";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                        $paymentstaus= $row->paymentstaus;
                        if($paymentstaus =='cash'){
                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row->exid ?></td>
                                                <td><?php echo $row->expensename?></td>
                                                <td><?php echo $row->amount ?></td>
                                                <td><?php echo $row->status?></td>
                                                <td><?php echo $row->paymentstaus?></td>
                                                <td><?php echo $row->date ?></td>
                                                <td><img src="<?php echo 'expenseuploads/'.$row->image;?>" width="150px" height="80px" /></td>
                                                <td><a href="updateexpense.php?id=<?php echo $row->id?>">Update</a></td>
                                            </tr>
                                      
                                        </tbody>
                                        <?php
                                    $i++;
                    }}}
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
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
                        <h4 class="page-title">View Employee Lists</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                                <th>Employee Name</th>
                                                <th>From Date</th>
                                                <th>To Date</th>
                                                <th>Bank Name</th>
                                                <th>No Of Work Days</th>
                                                <th>Emp Salary</th>

                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM empsalary";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){
                        $empid=$row->EmpId;
                    $querys = "SELECT * FROM employeedetail WHERE ID='$empid'";
                    $results = $conn->query($querys);
                    if ($results->num_rows > 0 ){
                    while ($rows = $results->fetch_object()){ 
                        $salid=$rows->ID;
                        $queryss = "SELECT * FROM empbank WHERE EmpId='$empid'";
                    $resultss = $conn->query($queryss);
                    if ($resultss->num_rows > 0 ){
                    while ($rowss = $resultss->fetch_object()){ 
                    ?>
                                <tbody>
                                <tr>
                                                <td><?php echo $row->id ?></td>
                                                <td><?php echo $rows->EmpFname ?><?php echo $rows->EmpLName ?></td>
                                                <td><?php echo $row->frmdate ?></td>
                                                <td><?php echo $row->todate ?></td>
                                                <td><?php echo $rowss->bkname ?></td>
                                                <td><?php echo $row->noworkdays?></td>
                                                <td><?php echo $row->salaryamount ?></td>
                                                <td><a href="updateemployeesalary.php?id=<?php echo $row->id?>">Update</a></td>
                                            </tr>
                                </tbody>
                                <?php
                                    $i++;
                    }}}}}}
                                    ?>
                            </table>
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
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
                        <h4 class="page-title">View Employee Details Lists</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                                <th>Employee First Name</th>
                                                <th>Employee Last Name</th>
                                                <th>Employee Code</th>
                                                <th>Employee Department</th>
                                                <th>Employee Designation</th>
                                                <th>Employee Contact No</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Joining Date</th>
                                                <th>Posting Date</th>
                                                <th></th>
                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM employeedetail";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
                                <tbody>
                                <tr>
                                                <td><?php echo $row->ID ?></td>
                                                <td><?php echo $row->EmpFname ?></td>
                                                <td><?php echo $row->EmpLName ?></td>
                                                <td><?php echo $row->EmpCode ?></td>
                                                <td><?php echo $row->EmpDept ?></td>
                                                <td><?php echo $row->EmpDesignation ?></td>
                                                <td><?php echo $row->EmpContactNo ?></td>
                                                <td><?php echo $row->EmpGender ?></td>
                                                <td><?php echo $row->EmpEmail ?></td>
                                                <td><?php echo $row->EmpPassword ?></td>
                                                <td><?php echo $row->EmpJoingdate ?></td>
                                                <td><?php echo $row->PostingDate ?></td>
                                                <td><a href="updateemployeedetails.php?id=<?php echo $row->ID?>">Update</a></td>
                                                <td><a href="deleteemployeedetails.php?id=<?php echo $row->ID?>">Delete</a></td>
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
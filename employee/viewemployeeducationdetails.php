<?php
 session_start();
 if(!isset($_SESSION['employee'])){
   header('Location: index.php');
 }
 $ID=$_SESSION['ID'];
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
                        <h4 class="page-title">View Employee Education details Lists</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                                <th>Employee  Name</th>
                                                <th>Employee Code</th>
                                                <th>SchoolCollegePG</th>
                                                <th>YearPassingPG/th>
                                                <th>PercentagePG</th>
                                                <th>CourseGra</th>
                                                <th>SchoolCollegeGra</th>
                                                <th>YearPassingGra</th>
                                                <th>PercentageGra</th>
                                                <th>CourseSSC</th>
                                                <th>SchoolCollegeSSC</th>
                                                <th>YearPassingSSC</th>
                                                <th></th>
                                    </tr>
                                </thead>
                              
                                <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM empeducation WHERE EmpID='$ID'";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                        $empid=$row->EmpID;
                        $querys = "SELECT * FROM employeedetail WHERE id='$empid'";
                    $results = $conn->query($querys);
                    if ($results->num_rows > 0 ){
                    while ($rows = $results->fetch_object()){ 
                    ?>
                                <tbody>
                                <tr>
                                                <td><?php echo $row->Id ?></td>
                                                <td><?php echo $rows->EmpFname ?><?php echo $rows->EmpLName ?></td>
                                                <td><?php echo $row->CoursePG ?></td>
                                                <td><?php echo $row->SchoolCollegePG ?></td>
                                                <td><?php echo $row->YearPassingPG ?></td>
                                                <td><?php echo $row->PercentagePG ?></td>
                                                <td><?php echo $row->CourseGra ?></td>
                                                <td><?php echo $row->SchoolCollegeGra ?></td>
                                                <td><?php echo $row->YearPassingGra ?></td>
                                                <td><?php echo $row->PercentageGra ?></td>
                                                <td><?php echo $row->CourseSSC ?></td>
                                                <td><?php echo $row->SchoolCollegeSSC?></td>

                                                <td><?php echo $row->YearPassingSSC ?></td>
                                                <td><?php echo $row->PercentageSSC ?></td>
                                                <td><?php echo $row->CourseHSC ?></td>
                                                <td><?php echo $row->SchoolCollegeHSC ?></td>
                                                <td><?php echo $row->YearPassingHSC ?></td>
                                                <td><?php echo $row->PercentageHSC ?></td>
                                               
                                               
                                            </tr>
                                </tbody>
                                <?php
                                    $i++;
                    }}}}
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
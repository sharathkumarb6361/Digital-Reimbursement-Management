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
                        <h4 class="page-title">View Total Expense</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
						<div class="table-responsive">
                            <h3>Employee Salary Lists</h3>
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                                <th>Employee Name</th>
                                                <th>Employee from </th>
                                                <th>Employee to </th>
                                                <th>No of Days </th>
                                                <th>Employee Salary </th>
                                                
                                                
                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT SUM(salaryamount) AS saltotal FROM empsalary";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                            $saltotal=$row->saltotal;
                           
                            $queryss = "SELECT *  FROM empsalary";
                            $resultss = $conn->query($queryss);
                            if ($resultss->num_rows > 0 ){
                            while ($rowss = $resultss->fetch_object()){ 
                                $empid=$rowss->EmpId;
                                $queryses = "SELECT *  FROM employeedetail WHERE ID='$empid' ";
                                $resultses = $conn->query($queryses);
                                if ($resultses->num_rows > 0 ){ 
                                    while ($rowses = $resultses->fetch_object()){ 
                    ?>
                                <tbody>
                                    <tr>
                                   
                                        <td></td>
                                        <td><?php echo $rowses->EmpFname ?><?php echo $rowses->EmpLName ?></td>
                                        <td><?php echo $rowss->frmdate ?></td>
                                        <td><?php echo $rowss->todate ?></td>
                                        <td><?php echo $rowss->noworkdays ?></td>
                                        <td><?php echo $rowss->salaryamount ?></td>
                                        
                                        <td>
                                        
                                    </tr>
                              
                                </tbody>
                                <?php
                                    $i++;
                    }}}}}}
                                    ?>
                            </table>
                            <h3>Expensive Lists</h3>
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                               
                                                <th>Expense Name</th>
                                                <th>Date </th>
                                                <th>Amount</th>
                                                
                                                
                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    include 'connection.php';
                  
                        $querys = "SELECT SUM(amount) as exptotal FROM expense";
                        
                        $results = $conn->query($querys);
                        if ($results->num_rows > 0 ){
                        while ($rows = $results->fetch_object()){ 
                         
                            
                            
                            $exptotal=$rows->exptotal;
                            
                                    $queryr = "SELECT *  FROM expense";
                                $resultr = $conn->query($queryr);
                                if ($resultr->num_rows > 0 ){
                                while ($rowr = $resultr->fetch_object()){ 

                    ?>
                                <tbody>
                                    <tr>
                                   
                                        <td></td>
                                        <td><?php echo $rowr->expensename ?></td>
                                        <td><?php echo $rowr->date ?></td>
                                        <td><?php echo $rowr->amount ?></td>
                                        <td>
                                        
                                    </tr>
                              
                                </tbody>
                                <?php
                                    $i++;
                    }}}}
                                    ?>
                            </table>
                            <h3>Total Expensive</h3>
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                               
                                                <th>Employee Total</th>
                                                <th>Expense Total </th>
                                                <th>Total</th>
                                                
                                                
                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT SUM(salaryamount) AS saltotal FROM empsalary";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                        $querys = "SELECT SUM(amount) as exptotal FROM expense";
                        
                        $results = $conn->query($querys);
                        if ($results->num_rows > 0 ){
                        while ($rows = $results->fetch_object()){ 
                         
                            $saltotal=$row->saltotal;
                            
                            $exptotal=$rows->exptotal;
                            
                            $total= $saltotal + $exptotal;
                           

                    ?>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        
                                        <td><?php echo $saltotal ?></td>
                                        <td><?php echo $exptotal ?></td>
                                        <td><?php echo $total ?></td>
                                        <td>
                                        
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
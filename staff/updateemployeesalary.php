<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 
include "connection.php";
if (isset($_POST['submit'])) {

    $frmdate=$_POST['frmdate'];
    $todate=$_POST['todate'];
    $salaryamount=$_POST['salaryamount'];
    $noworkdays=$_POST['noworkdays'];
    $id=$_POST['id'];
 $query = "UPDATE empsalary SET  frmdate='$frmdate', todate='$todate', salaryamount='$salaryamount', noworkdays='$noworkdays' WHERE id='$id'";
$run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee Salary Updated Successfull!")</script>';
      echo '<script>window.location.href="viewemployeesalary.php";</script>';
      }

                  }
  
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
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
                        <h4 class="page-title">Update Employee Salary </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                      
                            <form action="updateemployeesalary.php" method="POST" enctype="multipart/form-data">
                            <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM empsalary WHERE id='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                   
                    
        ?>  
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">From Date </label>
                                    <div class="col-md-10">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row->id ?>" required>
                                        <input type="date" class="form-control" name="frmdate" value="<?php echo $row->frmdate ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">To Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="todate" value="<?php echo $row->todate ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Salary</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="salaryamount" value="<?php echo $row->salaryamount ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">No of Work Days</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="noworkdays" value="<?php echo $row->noworkdays ?>">
                                    </div>
                                </div>
                               
                                
                              
                    
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                              <?php }}?> 
                            </form>
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
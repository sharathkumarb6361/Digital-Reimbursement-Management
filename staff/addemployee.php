<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $EmpFname=$_POST['EmpFname'];
    $EmpLName=$_POST['EmpLName'];
    $EmpCode=$_POST['EmpCode'];
    $EmpDept=$_POST['EmpDept'];
    $EmpDesignation=$_POST['EmpDesignation'];
    $EmpContactNo=$_POST['EmpContactNo'];
    $EmpGender=$_POST['EmpGender'];
    $EmpEmail=$_POST['EmpEmail'];
    $EmpPassword=$_POST['EmpPassword'];
    $EmpJoingdate=$_POST['EmpJoingdate'];
    $PostingDate=$_POST['PostingDate'];
   
     
                  $query = "INSERT INTO employeedetail(EmpFname, EmpLName, EmpCode, EmpDept, EmpDesignation, EmpContactNo, EmpGender, EmpEmail, EmpPassword, EmpJoingdate, PostingDate) Values('$EmpFname', '$EmpLName', '$EmpCode', '$EmpDept', '$EmpDesignation', '$EmpContactNo', '$EmpGender', '$EmpEmail', '$EmpPassword', '$EmpJoingdate', '$PostingDate')";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee Details Added Successfull!")</script>';
      echo '<script>window.location.href="addemployee.php";</script>';
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
                        <h4 class="page-title">Add Paint Design</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                      
                            <form action="addemployee.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpFname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpLName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpCode">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Department</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpDept">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Designation</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpDesignation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Contact Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpContactNo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Contact Number</label>
                                    <div class="col-md-10">
                                        <select name="EmpGender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="EmpEmail" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Password</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpPassword" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Joining Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="EmpJoingdate" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee postingDate</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="PostingDate" required />
                                    </div>
                                </div>
                               

                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                               
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
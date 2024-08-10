<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $EmpID=$_POST['EmpID'];
    $bkname=$_POST['bkname'];
    $bname=$_POST['bname'];
    $accno=$_POST['accno'];
    $ifcscode=$_POST['ifcscode'];
    $btype=$_POST['btype'];
   
    
     
                  $query = "INSERT INTO empbank(EmpID, bkname, bname, accno, ifcscode, btype) Values('$EmpID', '$bkname', '$bname', '$accno', '$ifcscode', '$btype')";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee bank Details Added Successfull!")</script>';
      echo '<script>window.location.href="employeebankdetails.php";</script>';
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
                        <h4 class="page-title">Add Employee Education</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                      
                            <form action="employeebankdetails.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Name</label>
                                    <div class="col-md-10">
                                        <select name="EmpID" class="form-control">
                                        <?php
                                        $i=1;
                                        include 'connection.php';
                                        $query = "SELECT * FROM employeedetail";
                                        $result = $conn->query($query);
                                    if ($result->num_rows > 0 ){
                                    while ($row = $result->fetch_object()){ 
                                    ?>
                                        <option value="<?php echo $row->ID ?>"><?php echo $row->EmpFname ?> &nbsp;<?php echo $row->EmpLName?></option>
                                        <?php
                                            $i++;
                                    }
                                }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Bank Account Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="bkname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Bank Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="bname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Bank Account Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="accno">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">IFCS Code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="ifcscode">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Bank Type</label>
                                    <div class="col-md-10">
                                        <select name="btype" class="form-control">
                                            <option value="salaryAccount">Salary Account</option>
                                            <option value="savingAccount">Saving Account</option>
                                            <option value="currentAccount">Current Account</option>
                                    </select>
                                       
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
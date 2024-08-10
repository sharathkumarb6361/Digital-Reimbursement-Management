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
    $ID=$_POST['ID'];
   
     
                  $query = "UPDATE employeedetail SET EmpFname='$EmpFname', EmpLName='$EmpLName', EmpCode='$EmpCode', EmpDept='$EmpDept', EmpDesignation='$EmpDesignation', EmpContactNo='$EmpContactNo', EmpGender='$EmpGender', EmpEmail='$EmpEmail', EmpPassword='$EmpPassword', EmpJoingdate='$EmpJoingdate', PostingDate='$PostingDate' WHERE ID='$ID'";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee DetailsUpdated uccessfull!")</script>';
      echo '<script>window.location.href="viewemployeedetails.php";</script>';
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
                        <h4 class="page-title">Update Employee Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                      
                            <form action="updateemployeedetails.php" method="POST" enctype="multipart/form-data">
                            <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM employeedetail WHERE ID='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                   
                    
        ?>  
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee First Name</label>
                                    <div class="col-md-10">
                                    <input type="hidden" class="form-control" name="ID" value="<?php echo $row->ID ?>" required>
                                        <input type="text" class="form-control" name="EmpFname" value="<?php echo $row->EmpFname ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpLName"  value="<?php echo $row->EmpLName ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpCode"  value="<?php echo $row->EmpCode ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Department</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpDept"  value="<?php echo $row->EmpDept ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Designation</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpDesignation"  value="<?php echo $row->EmpDesignation ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Contact Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpContactNo"  value="<?php echo $row->EmpContactNo ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Gender</label>
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
                                        <input type="email" class="form-control" name="EmpEmail"  value="<?php echo $row->EmpEmail ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Password</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpPassword"  value="<?php echo $row->EmpPassword ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee Joining Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="EmpJoingdate"  value="<?php echo $row->EmpJoingdate ?>" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employee postingDate</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="PostingDate"  value="<?php echo $row->PostingDate ?>" required />
                                    </div>
                                </div>
                               

                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                               <?php }} ?>
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
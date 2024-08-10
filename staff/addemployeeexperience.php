<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $EmpID=$_POST['EmpID'];
    $Employer1Name=$_POST['Employer1Name'];
    $Employer1Designation=$_POST['Employer1Designation'];
    $Employer1CTC=$_POST['Employer1CTC'];
    $Employer1WorkDuration=$_POST['Employer1WorkDuration'];
    $CourseGra=$_POST['CourseGra'];
    $Employer2Name=$_POST['Employer2Name'];
    $YearPassingGra=$_POST['YearPassingGra'];
    $Employer2Designation=$_POST['Employer2Designation'];
    $Employer2WorkDuration=$_POST['Employer2WorkDuration'];
    $Employer2CTC=$_POST['Employer2CTC'];
    $Employer3Name=$_POST['Employer3Name'];
    $Employer3Designation=$_POST['Employer3Designation'];
    $CourseHSC=$_POST['CourseHSC'];
    $Employer3CTC=$_POST['Employer3CTC'];
    $Employer3WorkDuration=$_POST['Employer3WorkDuration'];

    
     
                  $query = "INSERT INTO empexpireince(EmpID, Employer1Name, Employer1Designation, Employer1CTC, Employer1WorkDuration,Employer2Name, Employer2Designation,Employer2CTC,Employer2WorkDuration,Employer3Name, Employer3Designation,Employer3CTC, Employer3WorkDuration) Values('$EmpID', '$Employer1Name', '$Employer1Designation', '$Employer1CTC', '$Employer1WorkDuration',  '$Employer2Name',  '$Employer2Designation','$Employer2CTC','$Employer2WorkDuration', '$Employer3Name', '$Employer3Designation',  '$Employer3CTC', '$Employer3WorkDuration')";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee experience Details Added Successfull!")</script>';
      echo '<script>window.location.href="addemployeeexperience.php";</script>';
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
                      
                            <form action="addemployeeexperience.php" method="POST" enctype="multipart/form-data">
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
                                    <label class="col-form-label col-md-2">Employer1Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer1Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer1Designation</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer1Designation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer1CTC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer1CTC">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer1WorkDuration</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer1WorkDuration">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer2Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer2Name">
                                    </div>
                                </div>
                                
                               
                             

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer2Designation</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer2Designation">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer2CTC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer2CTC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer2WorkDuration</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer2WorkDuration">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer3Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer3Name">
                                    </div>

                                </div> 
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer3Designation</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer3Designation">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer3CTC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer3CTC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Employer3WorkDuration</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Employer3WorkDuration">
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
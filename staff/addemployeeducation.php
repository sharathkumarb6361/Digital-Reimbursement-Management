<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $EmpID=$_POST['EmpID'];
    $CoursePG=$_POST['CoursePG'];
    $SchoolCollegePG=$_POST['SchoolCollegePG'];
    $YearPassingPG=$_POST['YearPassingPG'];
    $PercentagePG=$_POST['PercentagePG'];
    $CourseGra=$_POST['CourseGra'];
    $SchoolCollegeGra=$_POST['SchoolCollegeGra'];
    $YearPassingGra=$_POST['YearPassingGra'];
    $PercentageGra=$_POST['PercentageGra'];
    $CourseSSC=$_POST['CourseSSC'];
    $SchoolCollegeSSC=$_POST['SchoolCollegeSSC'];
    $YearPassingSSC=$_POST['YearPassingSSC'];
    $PercentageSSC=$_POST['PercentageSSC'];
    $CourseHSC=$_POST['CourseHSC'];
    $SchoolCollegeHSC=$_POST['SchoolCollegeHSC'];
    $YearPassingHSC=$_POST['YearPassingHSC'];
    $PercentageHSC=$_POST['PercentageHSC'];
    
     
                  $query = "INSERT INTO empeducation(EmpID, CoursePG, SchoolCollegePG, YearPassingPG, PercentagePG, CourseGra, SchoolCollegeGra, YearPassingGra, PercentageGra, CourseSSC, SchoolCollegeSSC, YearPassingSSC, PercentageSSC, CourseHSC, SchoolCollegeHSC, YearPassingHSC, PercentageHSC) Values('$EmpID', '$CoursePG', '$SchoolCollegePG', '$YearPassingPG', '$PercentagePG', '$CourseGra', '$SchoolCollegeGra', '$YearPassingGra', '$PercentageGra', '$CourseSSC', '$SchoolCollegeSSC', '$YearPassingSSC', '$PercentageSSC', '$CourseHSC', '$SchoolCollegeHSC', '$YearPassingHSC', '$PercentageHSC')";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {

      echo '<script>alert("Employee Education Details Added Successfull!")</script>';
      echo '<script>window.location.href="addemployeeducation.php";</script>';
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
                      
                            <form action="addemployeeducation.php" method="POST" enctype="multipart/form-data">
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
                                    <label class="col-form-label col-md-2">College PG Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="EmpCode">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Course PG Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="CoursePG">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Year Passing PG</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="YearPassingPG">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Percentage PG</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="PercentagePG">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">UG College Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="SchoolCollegeGra">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">CourseGra</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="CourseGra">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">YearPassingGra</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="YearPassingGra">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">PercentageGra</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="PercentageGra">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">SchoolCollegeSSC Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="SchoolCollegeSSC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">CourseSSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="CourseSSC">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">YearPassingSSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="YearPassingSSC">
                                    </div>

                                </div> 
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">PercentageSSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="PercentageSSC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">SchoolCollegeHSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="SchoolCollegeHSC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">CourseHSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="CourseHSC">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">YearPassingHSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="YearPassingHSC">
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">PercentageHSC</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="PercentageHSC" required>
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
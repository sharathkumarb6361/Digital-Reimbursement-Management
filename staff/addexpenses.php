<?php
 session_start();
 if(!isset($_SESSION['staff'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $expensename=$_POST['expensename'];
    $amount=$_POST['amount'];
    $status=$_POST['status'];
    $paymenttype=$_POST['paymenttype'];
    $date=$_POST['date'];
    $image= $_FILES['image'] ['name'];
    $imageTemname= $_FILES['image'] ['tmp_name'];

    $tarpath= "expenseuploads/";
  
     
                  $query = "INSERT INTO expense(expensename, amount, status, paymentstaus, date,image) Values('$expensename', '$amount', '$status', '$paymenttype', '$date','$image')";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {
    move_uploaded_file($imageTemname,$tarpath.$image);
      echo '<script>alert("Expenses Added Successfull!")</script>';
      echo '<script>window.location.href="addexpenses.php";</script>';
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
                      
                            <form action="addexpenses.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Expensive Name</label>
                                    <div class="col-md-10">
                                    <input type="text" class="form-control" name="expensename">
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Amount </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="amount">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Status</label>
                                    <div class="col-md-10">
                                        
                                        <select name="status" class="form-control">
                                        <option value="paid">Paid</option>
                                        <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">payment Status</label>
                                    <div class="col-md-10">
                                        
                                        <select name="paymenttype" class="form-control">
                                        <option value="cash">cash</option>
                                        <option value="online">Online</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Image</label>
                                    <div class="col-md-10">
                                    <div class="upload-input">
												<input type="file" class="form-control" name="image">
											</div>
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
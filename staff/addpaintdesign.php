<?php
 session_start();
 if(!isset($_SESSION['admin'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
      
    $pdname= $_POST['pdname'];
    $sitetype= $_POST['sitetype'];
    $fulldescription= $_POST['fulldescription'];
    $color1= $_POST['color1'];
    $color2= $_POST['color2'];
    $color3= $_POST['color3'];
    $color4= $_POST['color4'];
    $color5= $_POST['color5'];
    $image1= $_FILES['image1'] ['name'];
    $image2= $_FILES['image2'] ['name'];
    $image3= $_FILES['image3'] ['name'];
    $image4= $_FILES['image4'] ['name'];
    $imageTemname1= $_FILES['image1'] ['tmp_name'];
    $imageTemname2= $_FILES['image2'] ['tmp_name'];
    $imageTemname3= $_FILES['image3'] ['tmp_name'];
    $imageTemname4= $_FILES['image4'] ['tmp_name'];

    $tarpath= "paintimages/";
   
     
                  $query = "INSERT INTO paintdesign(pdname, color1, color2, color3, color4, color5, image1, image2, image3, image4, sitetype, paintdescription) Values('$pdname','$color1','$color2','$color3','$color4','$color5','$image1','$image2','$image3','$image4','$sitetype','$fulldescription')";
      $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
if ($run) {


    move_uploaded_file($imageTemname1,$tarpath.$image1);
    move_uploaded_file($imageTemname2,$tarpath.$image2);
    move_uploaded_file($imageTemname3,$tarpath.$image3);
    move_uploaded_file($imageTemname4,$tarpath.$image4);
      echo '<script>alert("Paint design  Added Successfull!")</script>';
      echo '<script>window.location.href="addpaintdesign.php";</script>';
      }

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
                        <h4 class="page-title">Add Paint Design</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                      
                            <form action="addpaintdesign.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Paint Design Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="pdname">
                                    </div>
                                </div>
                                <h4 class="card-title">Paint Colors</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 1 (this color fixed)</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color1" value="#ffffff"  required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 2</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color2" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 3</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color3" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 4</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 5</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color5">
                                    </div>
                                </div>
                               
                              
                               
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 4</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="image4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Site Type</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="sitetype">
                                            <option>-- Select --</option>
                                            <option value="home">Home</option>
                                            <option value="fullbuilding">Full Building</option>
                                            <option value="flat">Flat</option>
                                            <option value="office">Office</option>
                                        </select>
                                    </div>
                                </div>
                               
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design Full Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Design Full Description" name="fulldescription"></textarea>
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
<?php
 session_start();
 if(!isset($_SESSION['admin'])){
   header('Location: index.php');
 }
 

include "connection.php";
if (isset($_POST['submit'])) {
    $id= $_POST['id'];  
    $pdname= $_POST['pdname'];
    $fulldescription= $_POST['fulldescription'];
    $color1= $_POST['color1'];
    $color2= $_POST['color2'];
    $color3= $_POST['color3'];
    $color4= $_POST['color4'];
    $color5= $_POST['color5'];
    $newimage1= $_FILES['newimage1'] ['name'];
    $newimage2= $_FILES['newimage2'] ['name'];
    $newimage3= $_FILES['newimage3'] ['name'];
    $newimage4= $_FILES['newimage4'] ['name'];
    $old_image1=$_POST['oldimage1'];
    $old_image2=$_POST['oldimage2'];
    $old_image3=$_POST['oldimage3'];
    $old_image4=$_POST['oldimage4'];
    

    $tarpath= "paintimages/";
    if(isset($_FILES['newimage1'] ['name']) && !empty($_FILES['newimage1'] ['name'])){
        
            if(!empty($newimage1))
            {
                $updated_image1=$newimage1;
            }
            else{
                $updated_image1=$old_image1;
            }
            $updated_image1= $_FILES['newimage1'] ['name'];
            $imageTemname1= $_FILES['newimage1'] ['tmp_name'];
            if(file_exists($tarpath.$_FILES['newimage1'] ['name'])){
                $filename=$_FILES['newimage1'] ['name'];
                echo '<script>alert("Already Exist File")</script>';
                echo '<script>window.location.href="viewpaintdesign.php";</script>';
            }
            else{
                $query = "UPDATE paintdesign SET pdname='$pdname',color1='$color1',color2='$color2',color3='$color3',color4='$color4',color5='$color5',image1='$updated_image1',image2='$updated_image2',image3='$updated_image3',image4='$updated_image4',paintdescription='$fulldescription' WHERE id='$id'";
                $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
          if ($run) {
          
            unlink($tarpath.$old_image1);  
              move_uploaded_file($imageTemname1,$tarpath.$updated_image1);
                }
            }

    }
        if(isset($_FILES['newimage2'] ['name']) && !empty($_FILES['newimage2'] ['name'])){
           
                if(!empty($newimage2))
                {
                    $updated_image2=$newimage2;
                }
                else{
                    $updated_image2=$old_image2;
                }
            
            
            $updated_image2= $_FILES['newimage2'] ['name'];
            $imageTemname2= $_FILES['newimage2'] ['tmp_name'];
            if(file_exists($tarpath.$_FILES['newimage2'] ['name'])){
                $filename=$_FILES['newimage2'] ['name'];
                echo '<script>alert("Already Exist File")</script>';
                echo '<script>window.location.href="viewpaintdesign.php";</script>';
            }
            else{
                $query = "UPDATE paintdesign SET pdname='$pdname',color1='$color1',color2='$color2',color3='$color3',color4='$color4',color5='$color5',image1='$updated_image1',image2='$updated_image2',image3='$updated_image3',image4='$updated_image4',paintdescription='$fulldescription' WHERE id='$id'";
                $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
          if ($run) {
          
            unlink($tarpath.$old_image2);  
              move_uploaded_file($imageTemname2,$tarpath.$updated_image2);
                }

            }

        }
            if(isset($_FILES['newimage3'] ['name']) && !empty($_FILES['newimage3'] ['name'])){
           
                    if(!empty($newimage3))
                    {
                        $updated_image3=$newimage3;
                    }
                    else{
                        $updated_image3=$old_image3;
                    }
                
                    $updated_image3= $_FILES['newimage3'] ['name'];
                    $imageTemname3= $_FILES['newimage3'] ['tmp_name'];
                    if(file_exists($tarpath.$_FILES['newimage3'] ['name'])){
                        $filename=$_FILES['newimage3'] ['name'];
                        echo '<script>alert("Already Exist File")</script>';
                        echo '<script>window.location.href="viewpaintdesign.php";</script>';
                    }
                    else{
                        $query = "UPDATE paintdesign SET pdname='$pdname',color1='$color1',color2='$color2',color3='$color3',color4='$color4',color5='$color5',image1='$updated_image1',image2='$updated_image2',image3='$updated_image3',image4='$updated_image4',paintdescription='$fulldescription' WHERE id='$id'";
                        $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
                  if ($run) {
                  
                    unlink($tarpath.$old_image3);  
                      move_uploaded_file($imageTemname3,$tarpath.$updated_image3);
                        }
                    }


            }
                if(isset($_FILES['newimage4'] ['name']) && !empty($_FILES['newimage4'] ['name'])){

                        if(!empty($newimage4))
                        {
                            $updated_image4=$newimage4;
                        }
                        else{
                            $updated_image4=$old_image4;
                        }
                    

                  
                    $updated_image4= $_FILES['newimage4'] ['name'];
                    $imageTemname4= $_FILES['newimage4'] ['tmp_name'];

                 
                    if(file_exists($tarpath.$_FILES['newimage4'] ['name'])){
                        $filename=$_FILES['newimage4'] ['name'];
                        echo '<script>alert("Already Exist File")</script>';
                        echo '<script>window.location.href="viewpaintdesign.php";</script>';
                    }
                    else{
                        $query = "UPDATE paintdesign SET pdname='$pdname',color1='$color1',color2='$color2',color3='$color3',color4='$color4',color5='$color5',image1='$updated_image1',image2='$updated_image2',image3='$updated_image3',image4='$updated_image4',paintdescription='$fulldescription' WHERE id='$id'";
                        $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
                  if ($run) {
                  
                    unlink($tarpath.$old_image4);  
                      move_uploaded_file($imageTemname4,$tarpath.$updated_image4);
                      echo '<script>alert("Updated Succesfully")</script>';
                      echo '<script>window.location.href="viewpaintdesign.php";</script>';
                        }
                    }
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
                      
                            <form action="updatepaintdesign.php" method="POST" enctype="multipart/form-data">
                            <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM paintdesign WHERE id='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                     
                    
        ?>  
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Paint Design Name</label>
                                    <div class="col-md-10">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row->id ?>">
                                        <input type="text" class="form-control" name="pdname" value="<?php echo $row->pdname ?>">
                                    </div>
                                </div>
                                <h4 class="card-title">Paint Colors</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 1 (this color fixed)</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color1" value="<?php echo $row->color1 ?>"  required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 2</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color2" value="<?php echo $row->color2 ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 3</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color3" value="<?php echo $row->color3 ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 4</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color4" value="<?php echo $row->color4 ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Color 5</label>
                                    <div class="col-md-10">
                                        <input type="color" class="form-control" name="color5" value="<?php echo $row->color5 ?>">
                                    </div>
                                </div>
                               
                              
                               
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="newimage1" required>
                                        <input class="form-control" type="hidden" id="formFile" name="oldimage1" value="<?php echo $row->image1; ?>">
                                        <img src="<?php echo 'paintimages/'.$row->image1;?>" width="100px" height="60px" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="newimage2" required>
                                        <input class="form-control" type="hidden" id="formFile" name="oldimage2" value="<?php echo $row->image2; ?>">
                                        <img src="<?php echo 'paintimages/'.$row->image2;?>" width="100px" height="60px" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="newimage3" required>
                                        <input class="form-control" type="hidden" id="formFile" name="oldimage3" value="<?php echo $row->image3; ?>">
                                        <img src="<?php echo 'paintimages/'.$row->image3;?>" width="100px" height="60px" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design picture 4</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="newimage4" required>
                                        <input class="form-control" type="hidden" id="formFile" name="oldimage4" value="<?php echo $row->image4; ?>">
                                        <img src="<?php echo 'paintimages/'.$row->image4;?>" width="100px" height="60px" />
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
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
                                </div> -->
                               
                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Design Full Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Design Full Description" name="fulldescription"><?php echo $row->paintdescription  ?></textarea>
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
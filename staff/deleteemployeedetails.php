<?php
     include 'connection.php';
     $id=(isset($_GET['id'])?$_GET['id']:'');      
     $query = "DELETE  *  FROM 	employeedetail INNER JOIN empeducation  where employeedetail.ID='$id'and empeducation.EmpID='$id' ";
     if($conn->query($query)==TRUE){
        echo '<script>alert(Employee Deatils successfully deleted")</script>';
        echo '<script>window.location.href="viewemployeedetails.php";</script>';
     }

?>
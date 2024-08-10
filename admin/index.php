<?php
  include 'connection.php';
   session_start();
   
   if (isset($_SESSION["admin"])) {
    header("location:dashboard.php");
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' && `password` = '$password'";
    $res = mysqli_query($conn, $sql);


    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {

            $_SESSION["admin"] = $row["email"];
            header("location:dashboard.php");
        }
    } else {
        echo '<script> alert("Email and Password Does not match") </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/paint-logo.png">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>

	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="index.php" class="form-signin" method="POST">
						<div class="account-logo">
                            <a href="index.php"><img src="assets/img/logos.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" autofocus="" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                       
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn"  style="background-color:#4e4d4e !important"name="submit">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="../index.php"  class="btn btn-primary account-btn"  style="background-color:#4e4d4e !important;color:white" >Back</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    #form{
        position: center;
        width: 500px;
        height: 50vh;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 70px;
        padding-left: 20px;
        background-color: azure;
    }
    .form-control input{
        position: center;
        background-color: transparent;
    }
    img{
        height: 30vh;
        width: 200px;
    }
    h3{
        font-family: cursive;
        margin-top: 35px;
    }
    .footer{
        text-align: center;

    }
    #top{
        background-color: black;
        height: 100px;
    }
    .menu_left{
        color: white;
        margin-top: 200px;
        padding-left: 20px;
    }
    .horizontal-menu{
        margin-top: 40px;
    }
    </style>
</head>

<body>
<div class="row container-fluid" id="top">
    <div class="col-md-5" style="margin-left: 25px" >
        <h3 class="text-primary ">IT Solutions Limited</h3>
        <p class="text-white"> Honesty. Integrity. Reliability</p>
    </div>

    <div class="col-md-4">
        <div class="horizontal-menu">
            <a class="active menu_left" href="index.php">Home</a>
            <a class="menu_left" href="services.php">Services</a>
            <a class="menu_left" href="about_us.php">About Us</a>
            <a class="menu_left" href="contact_us.php">Contact Us</a>
        </div>
    </div>

</div>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" >
            <form action="" name="admin_login" class="form-control" method="post" id="form">
                <h4 style="text-align: center">Login Here</h4><br>
                <input type="text" name="adm_name" placeholder="Enter Username" class="form-control" required><br>
                <input type="password" name="adm_pass" placeholder="Enter password" class="form-control" required><br>
                <button class="btn btn-primary" value="submit" type="submit" name="admin_login">Login</button>
                <br>
                <p>Don't have an account? <a href="admin_page.php">Register here</a></p>
            </form>
        </div>
    </div>
</div>
<div class=" container-fluid row footer bg-black text-white" >
    <footer class="footer">
        <h5 style="margin-top: 20px">IT Solutions Limited</h5>
        <p>  © Copyright 2022</p>

    </footer>
</div>
<?php
session_start();
if (isset($_POST["admin_login"])) {
    $givenName = $_POST["adm_name"];
    $givenPass = $_POST["adm_pass"];

    require_once "db_connection.php";
    mysqli_select_db($connection, "inventory");
    $selectQuery="SELECT * FROM `admin` WHERE name='$givenName' && pass='$givenPass'";
    $retrieve=mysqli_query($connection, $selectQuery);
    $num=mysqli_num_rows($retrieve);
    if ($num == 1){
        echo"login successfully";
        header("location:admin_dashboard.php");
        exit();
    }else{
        echo"login failed";
        exit();
    }
}
?>
</body>
</html>
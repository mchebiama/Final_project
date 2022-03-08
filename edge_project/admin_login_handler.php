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

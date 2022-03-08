<?php
session_start();
//check if the button is clicked
if (isset($_POST["login"])) {
//declare variables
    $empEmail = $_POST["email"];
    $EmpPassword = $_POST["password"];
    //connect to database
    require_once "db_connection.php";
    mysqli_select_db($connection,"inventory");
    //retrieve data from database
    $selectQuery = "SELECT * FROM `register_db` WHERE email='$empEmail' && password='$EmpPassword'";
    $result = mysqli_query($connection, $selectQuery);
    $number = mysqli_num_rows($result);
    if ($number == 1) {
        echo "successfully logged in";

        header("location:employee_landing.php");
        exit();
    } else {
        echo "login failed";
        header("location:login.php");
        exit();
    }
}






<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db_name="inventory";

    //connecting to db
    $connection=mysqli_connect($hostname,$username,$password,$db_name);
    //check if connected
if (!isset($connection)){
    die("connection to database failed");
}

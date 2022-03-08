<?php
//check if the button is clicked
    if (isset($_POST["btn_register"])){
        //declare variables
        $empName= $_POST["e_name"];
        $empEmail= $_POST["e_email"];
        $empGender= $_POST["e_gender"];
        $EmpPassword= $_POST["e_password"];
        $empIdNumber= $_POST["e_id_number"];
        $empPhone= $_POST["e_phone"];
        $empDesignation= $_POST["e_designation"];
        $empDepartment= $_POST["e_department"];

        //connect to database
        require_once "db_connection.php";
        //select database
       // mysqli_select_db($connection, "inventory");
//            $selectQuery = "SELECT * FROM `user_reg` where email= '$username'";
//            $result = mysqli_query($connection, $selectQuery);
//            //count number of rows that has same names
//            $number = mysqli_num_rows($result);
//            if ($number == 1) {
//                echo "username already taken";
        //save the data
        $insertQuery= "INSERT INTO `register_db`(`id`, `name`, `email`, `gender`, `password`, `id_number`, `phone`, `designation`, `department`) VALUES
        (null,'$empName','$empEmail','$empGender','$EmpPassword','$empIdNumber','$empPhone','$empDesignation','$empDepartment')";

        $register= mysqli_query($connection, $insertQuery);
        if ($register){

            header("location:login.php");
        }
        else{
            echo "Registration failed";
            header("location:index.php");
        }
    }

?>








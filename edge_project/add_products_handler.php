<?php
//check if button is clicked
    if (isset($_POST["add_product"])){
        //declare variables
        $prod_name= $_POST["p_name"];
        $prod_type= $_POST["p_type"];
        $prod_serialNo= $_POST["p_serial"];
        $prod_date= $_POST["p_date"];
        $prod_quantity= $_POST["p_quantity"];
        $prod_description= $_POST["comments"];

        //connect to database
        require_once "db_connection.php";

        //select database
        $select=mysqli_select_db($connection, "inventory");

        //prepare insert query
        $insertQuery= "INSERT INTO `products`(`p_id`, `p_name`, `p_type`, `p_serial_no`, `p_date`, `p_quantity`, `p_description`) 
        VALUES (null,'$prod_name','$prod_type','$prod_serialNo','$prod_date','$prod_quantity','$prod_description')";

        $save= mysqli_query($connection, $insertQuery);
        if ($save){
            echo "product saved successfully";
            header("location:add_products.php");

        }else{
            echo "product not saved";
        }


    }

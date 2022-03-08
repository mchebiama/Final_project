

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        h3{
            font-family: cursive;
            margin-top: 35px;

        }

        #top{
            background-color: black;
            height: 100px;
        }
        .horizontal-menu{
            border-style: unset;
            border-radius: 5px;
            margin-top: 35px;
            padding-left: 20px;
            text-decoration: none;
            color: white;}
        .btn{
            border-style: unset;
            border-radius: 5px;
            margin-top: 35px;
            padding-left: 20px;
            text-decoration: none;

        }
        .menu_left{
            border-style: unset;
            border-radius: 5px;
            margin-top: 5px;
            padding-left: 20px;
            text-decoration: none;
            color: white;

        }
    </style>
</head>

<body>
<div class="container-fluid" id="top">
    <div class="row">
        <div class="col-md-4" style="margin-left: 25px" >
            <h3 class="text-primary " style="margin-left: 2px">IT Solutions Limited</h3>
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
        <div class="col-md-3">
            <a href="logout.php" class="logout">
                <button type="button" class="btn btn-primary">Logout</button></a>
        </div>

    </div>
</div>
<hr>
    <div class="container-fluid">

        <table class="table">
            <tr> <h2 class="text-center">View Products</h2><br><br> </tr>
            <th>
            <td>Product Name</td>
            <td>Product Type</td>
            <td>Serial No</td>
            <td>Delivery Date</td>
            <td>Quantity/ status</td>
            <td>Description</td>
            <td>Assigned to</td>
            </th>

    <?php
        //connect, fetch data from database
        require_once "db_connection.php";
        $selectQuery= "SELECT * FROM `products` WHERE 1";
        $result= mysqli_query($connection, $selectQuery);
        //use a loop to print users
        foreach ($result as $product){
            $productId= $product['p_id'];
            $productName= $product['p_name'];
            $productType= $product['p_type'];
            $productSerialNo= $product['p_serial_no'];
            $productDate= $product['p_date'];
            $productQuantity= $product['p_quantity'];
            $productDescription= $product['p_description'];

            echo "<tr>
                <td type='hidden'></td>
                <td>$productName</td>
                <td>$productType</td>
                <td>$productSerialNo</td>
                <td>$productDate</td>
                <td>$productQuantity</td>
                <td>$productDescription</td>
                
                
               
            </tr>";
        }
    ?>
        </table>
    </div>

</body>
</html>

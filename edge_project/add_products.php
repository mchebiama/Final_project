<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .form-control{

            align-items: center;

        }
        .menu_left{
            border-style: unset;
            border-radius: 5px;
            margin-top: 5px;
            padding-left: 20px;
            text-decoration: none;
            color: white;

        }
        .p_add{
            margin: auto;
        }
        h2{
            text-align: center;
        }
        input {
            background-color: transparent;
        }
        select {
            background-color: transparent;
        }
        textarea{
            background-color: transparent;
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
            <div class="col-md-6 p_add">

                <form action="add_products_handler.php" method="post" name="p_add" class="form-control" style="background-color: azure">
                    <h2>Add product</h2>
                    <input type="text" name="p_name"placeholder="Enter product name"><br><br>
                    <select name="p_type" id="">
                        <option value="">Select product type</option>
                        <option value="hardware">Computer hardware</option>
                        <option value="accessories">Computer Accessories</option>
                        <option value="network">Network Devices</option>
                        <option value="other">Other</option>
                    </select><br><br>
                    <input type="text" name="p_serial" placeholder=" product serial number"><br><br>
                    <input type="date" name="p_date" placeholder=" documented date"><br><br>
                    <input type="text" name="p_quantity" placeholder="Product quantity/ status"><br><br>
                    <textarea name="comments" id="" cols="50" rows="5" placeholder=" comments/ description"></textarea><br><br>
                    <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
            </div>
        </div>

    </div>
<div class=" container-fluid row footer bg-black text-white" >
    <footer class="footer">
        <h5 style="margin-top: 20px">IT Solutions Limited</h5>
        <p>  © Copyright 2022</p>

    </footer>
</body>
</html>


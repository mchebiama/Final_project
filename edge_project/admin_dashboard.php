<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .footer{
            text-align: center;

        }
        #top{
            background-color: black;
            height: 100px;
        }
        h3{
            font-family: cursive;
            margin-top: 35px;
        }
        .horizontal-menu{
            margin-top: 40px;
            align-items: end;
        }
        .menu_left{
            border-style: unset;
            border-radius: 5px;
            margin-top: 5px;
            padding-left: 20px;
            text-decoration: none;
            color: white;
        }
        .sidenav {
            background-color: black;
            width: 15%;
            position: fixed;
            padding-top: 80px;
            height: 80vh;
            padding-left: 20px;
            left: 0px;
            margin-top: 0px;
            float: left;

        }
        .sidenav a{
            color: white;
            text-decoration: none;
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
    <div class=" container-fluid" id="top">
        <div class="row">
            <div class="col-md-4" style="margin-left: 25px" >
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
            <div class="col-md-3">
                <div class="horizontal-menu">
                <a href="logout.php" class="logout">
                    <button type="button" class="btn btn-primary">Logout</button></a>
                </div>
            </div>
        </div>
    </div>
    <hr>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="sidenav">
                <a href="">Dashboard</a><br><br>
                <a class="employee_reports" href="empl_reports.php">Employee Reports  </a><br><br>
                <a href="add_products.php">Add Product</a><br><br>
                <a class="reports" href="reports.php">View Requests  </a><br><br>

            </div>
        </div>
        <div class="col-md-9">
            <div class="main content">
                <p>Welcome to Admin page</p>

            </div>
        </div>
    </div>
</div>
<!---->
<!--    <div class=" container-fluid row bg-black text-white" id="xyz">-->
<!--        <footer class="footer" >-->
<!--            <h5 style="margin-top: 20px">IT Solutions Limited</h5>-->
<!--            <p>  © Copyright 2022</p>-->
<!---->
<!--        </footer>-->
<!--    </div>-->
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .btn{
            outline:none;
            margin-left: 50px;
            border: none;
            text-decoration: none;


        }
        #landing{
            margin: auto;
            margin-top: 100px;
            margin-bottom: 50px;

        }
        .row{
            width: 100%;
            height: 60vh;
        }
        h3{
            font-family: cursive;
            margin-top: 35px;
        }
        .footer{
            text-align: center;
            height: 15vh;
            margin-bottom: 0px;
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
        .horizontal-menu{
            margin-top: 40px;
        }

        form{
            background-color: white;
        }
    </style>
</head>
<body>
<div class="row container-fluid" id="top">
    <div class="col-md-5" style="margin-left: 25px" >
        <h3 class="text-primary ">IT Solutions Limited</h3>
        <p class="text-white"> Honesty. Integrity. Reliability</p>
    </div>

    <div class="col-md-6">
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
        <div class="col-md-3" id="landing">
            <a href="product_request.php">
                <button class="btn btn-secondary" type="button">Request product</button>
            </a><br><br>
            <a href="logout.php">
                <button class="btn btn-secondary" type="button">Logout</button>
            </a>
        </div>
    </div>
</div>
<div class=" container-fluid row footer bg-black text-white" >
    <footer class="footer">
        <h5 style="margin-top: 20px">IT Solutions Limited</h5>
        <p>  © Copyright 2022</p>

    </footer>
</div>

</body>
</html>
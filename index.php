<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .footer{
            text-align: center;
        }
        #top{
            background-color: black;
            height: 100px;
        }

        .image{
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }
        h3{
            font-family: cursive;
            margin-top: 35px;
        }
        .horizontal-menu{
            margin-top: 40px;
            align-items: end;
        }

        .menu_right{
            border-style: unset ;
            border-radius: 5px;
            margin-top: 0px;
            padding-left: 5px;
            margin-left: 15px;
            height: fit-content;
            width: max-content;


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

<!--         top division-->
    <div class="container-fluid">
        <div class="row" id="top">

            <div class="col-md-4" style="margin-left: 25px" id="left">
                <h3 class="text-primary ">IT Solutions Limited</h3>
                <p class="text-white"> Honesty. Integrity. Reliability</p>
            </div>
            <div class="col-md-4" id="middle">
                <div class="horizontal-menu">
                <a class="active menu_left" href="index.php">Home</a>
                <a class="menu_left" href="services.php">Services</a>
                <a class="menu_left" href="about_us.php">About Us</a>
                <a class="menu_left" href="contact_us.php">Contact Us</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="horizontal-menu">
                <a href="admin_login.php">
                    <button class="btn btn-primary menu_right" type="button" name="register">Admin Page</button>
                </a>
                <a href="login.php">
                    <button class="btn btn-primary menu_right" type="button" name="login">Employee Page</button>
                </a>
                </div>
            </div>

        </div>
        <hr>
    </div>


 <!--             middle division-->
     <div class=" row bg-container">
         <div class="col-md-12">
             <img class="image" src="assets/images/Inventory-Management-System-1.jpg" alt="">
             </div>

         </div>
     <!--     bottom division-->
    <div class=" container-fluid row footer bg-black text-white" >
        <footer class="footer" >
            <h5 style="margin-top: 20px">IT Solutions Limited</h5>
            <p>  © Copyright 2022</p>

        </footer>
    </div>


</body>
</html>

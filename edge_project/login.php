<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
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
    .horizontal-menu{
        margin-top: 40px;
    }
    /*.form-control {*/
    /*    margin: auto;*/
    /*    padding-left: 20px;*/
    /*    background-color: azure;*/
    /*    margin-bottom: 30px;*/
    /*    margin-top: 20px;*/
    /*}*/
    #form{
        background-color: white;
        margin: auto;
        padding-left: 20px;
        background-color: azure;
        margin-bottom: 100px;
        margin-top: 30px;
        height: inherit;
        width: 500px;
    }
    #form input{
        background-color: transparent;
    }
</style>
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
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 ">
            <div class="form-group text-center login_box">
                <form action="login_handler.php" name="login" method="post" class="form-control" id="form"><br>
                    <h2 class="text-center">Login here</h2>
                    <input placeholder="Enter your email" type="email" name="email" class="form-control" required><br>
                    <input placeholder="Enter password" type="password" name="password" class="form-control" required><br>
                    <button type="submit" value="submit" name="login" class=" btn btn-primary ">Login</button>
                    <br>
                    <p>Don't have an account yet? <a class="text-left" href="register.php">Register here</a> </p>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
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

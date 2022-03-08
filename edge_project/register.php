<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
        .form-control {
            margin: auto;
            padding-left: 20px;
            background-color: azure;
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
            <div class="col-md-6 form">
            <div class="form-group">
                <form action="register_handler.php" name="register" method="post" class="form-control"><br>
                    <h2 class="text-center">Register here</h2>
                    <br>
                    <input placeholder="Enter your name" type="text" name="e_name" class="form-control" required><br>
                    <input placeholder="Enter your email" type="email" name="e_email" class="form-control" required><br>
                    <input type="radio" value="male" name="e_gender">
                    <label for="male">Male</label>
                    <input type="radio" value="female" name="e_gender">
                    <label for="female">Female</label>
                    <br><br>
                    <input placeholder="Enter password" type="password" name="e_password" class="form-control" required><br>
                        <input placeholder="Enter your id number" type="number" name="e_id_number" class="form-control" required><br>
                        <input placeholder="Enter your phone number" type="tel" name="e_phone" class="form-control" required><br>
                        <input placeholder="Enter your designation" type="text" name="e_designation" class="form-control" required><br>
                        <select name="e_department" class="form-control" >
                            <option  value="">Select department</option>
                            <option  value="ICT">ICT</option>
                            <option value="Human Resource">Human Resource</option>
                            <option  value="Finance">Finance</option>
                            <option  value="Customer Service">Customer Service</option>
                            <option  value="Procurement">Procurement</option>
                            <option  value="Welfare">Welfare</option>
                            <option  value="Supply Chain">Supply Chain</option>
                            <option  value="Audit">Audit</option>
                            <option  value="Marketing">Marketing</option>
                        </select>
                        <br>
                       <button type="submit" value="submit" name="btn_register" class=" btn btn-primary">Register</button>
                    <br>
                        <p >Already have an account? <a href="login.php">Login here</a> </p>
                </form>
            </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<div class=" container-fluid row footer bg-black text-white" >
    <footer class="footer" >
        <h5 style="margin-top: 20px">IT Solutions Limited</h5>
        <p>  © Copyright 2022</p>

    </footer>
</div>
</body>
</html>

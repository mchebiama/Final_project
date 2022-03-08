<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>

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
        #form {
            position: center;
            width: 500px;
            height: 90vh;
            margin: auto;
            margin-top: 15px;
            margin-bottom: 15px;
            padding-left: 20px;
            background-color: azure;
        }
        .form-control input{
            position: center;
            background-color: transparent;
        }
        h4{
            font-family: inherit;
            text-align: center;
        }
        .btn{
            margin-top: 40px;
            position: absolute;
            margin-right: 5px;
        }
        #option{
        background-color: transparent;
        width:300px;
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
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="" method="post" class="form-control" id="form">
                    <h4>Product Request </h4><br>
                    <label for="name">Employee Name:</label>
                    <input type="text" name="name"><br><br>

                    <label for="email">Email Address:</label>
                    <input type="email" name="email"><br><br>

                    <label for="item">Request Item:</label>
                    <input type="text" name="item">  <br><br>

                    <label for="department">Department:</label><br>
                    <select name="department" class="form-control" id="option">
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
                    </select><br>
                    <label for="designation">Designation:</label>
                    <input type="text" name="designation">  <br><br>
                    <label for="date">Request Date:</label>
                    <input type="date" name="date"><br>
                    <button type="submit" name="request" class="btn btn-primary">Request </button>
                </form>
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
    <?php
        if (isset($_POST["request"])){
            $requestName= $_POST["name"];
            $requestEmail= $_POST["email"];
            $requestItem= $_POST["item"];
            $requestDept= $_POST["department"];
            $requestDesignation= $_POST["designation"];
            $requestDate= $_POST["date"];

            require_once "db_connection.php";
            $query= mysqli_select_db($connection, "inventory");
            $insertQuery= "INSERT INTO `requests`(`req_id`, `req_name`, `req_email`, `req_item`, `req_department`, `req_designation`, `req_date`) 
                            VALUES (null,'$requestName','$requestEmail','$requestItem','$requestDept','$requestDesignation','$requestDate')";
            $save=mysqli_query($connection, $insertQuery);
            if ($save){
                echo "Request sent successfully";


            }else{
                echo "Request failed";
            }
        }
    ?>
</body>
</html>

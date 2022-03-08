<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact page</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        img{
            height: 30vh;
            width: 200px;
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

        }
        .horizontal-menu{
            margin-top: 40px;
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

    <div class="container-fluid row">
        <h4 class="text-center">Get in touch with us</h4>
        <p class="text-center">We value your feedback, comments and any questions</p>
    </div>
    <div class="row container-fluid" style="background-color: azure">
        <div class="col-md-6">
            <h5>Contact Us</h5>
            <p>Email us for any questions or inquiries, or make a call. We are happy to answer your questions and meet up with you.
                <br>
                Email:<span style="color: deepskyblue"> chebiamabiego@gmail.com </span><br>
                Phone No:<span style="color: deepskyblue"> +254738704478 </span>
            </p>
            <h5>Visit Us</h5>
            <p>You are welcomed to visit our offices. Find us on the address. <br>
                Sarit Centre, 5th Floor<br>
                P.O BOX 8967-00100 <br>
                Nairobi. <br>

            </p>

        </div>
        <div class="col-md-6">
            <form action="" method="post" class="form-control" style="background-color: azure">
                <h5 class="text-center">Get in touch</h5><br>

                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" required style="background-color: transparent"><br><br>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required style="background-color: transparent"><br><br>

                <label for="phone">Phone</label>
                <input type="tel" name="phone" placeholder="phone" required style="background-color: transparent"><br><br>

                <label for="message">Message</label><br>
                <textarea name="message" id="" cols="50" rows="5" required style="background-color: transparent"></textarea><br><br>
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
            </form>
        </div>
    </div>
    <div class=" container-fluid row footer bg-black text-white" >
    <footer class="footer">
        <h5 style="margin-top: 20px">IT Solutions Limited</h5>
        <p>  © Copyright 2022</p>

    </footer>
</div>
    <?php
    if (isset($_POST["submit"])){
        $name= $_POST["name"];
        $email= $_POST["email"];
        $phone= $_POST["phone"];
        $message= $_POST["message"];

        require_once "db_connection.php";
        $insertQuery= "INSERT INTO `contact`(`c_id`, `c_name`, `c_email`, `c_phone`, `c_message`)
                        VALUES (null,'$name','$email','$phone','$message')";
        $save= mysqli_query($connection, $insertQuery);
        if ($save){
            echo "Message sent successfully";
        }else{
            echo "Message failed";
        }


    }


    ?>
</body>
</html>



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
        th{
            font-weight: bold;
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

    <table class="table" >
        <tr> <h2 class="text-center">View Employees</h2><br><br> </tr>
        <th style="font-weight: bold">
        <td>Employee Name</td>
        <td>Employee Email</td>
        <td>Gender</td>

        <td>ID Number</td>
        <td>Phone number</td>
        <td>Designation</td>
        <td>Department</td>
        </th>

        <?php
        //connect, fetch data from database
        require_once "db_connection.php";
        $selectQuery= "SELECT * FROM `register_db` WHERE 1";
        $result= mysqli_query($connection, $selectQuery);
        //use a loop to print users
        foreach ($result as $employee){
            $employeeId= $employee['id'];
            $employeeName= $employee['name'];
            $employeeEmail= $employee['email'];
            $employeeGender= $employee['gender'];
            $employeePass= $employee['password'];
            $employeeIdNumber= $employee['id_number'];
            $employeePhone= $employee['phone'];
            $employeeDesignation= $employee['designation'];
            $employeeDepartment= $employee['department'];


            echo "<tr>
                <td type='hidden'></td>
                <td>$employeeName</td>
                <td>$employeeEmail</td>
                <td>$employeeGender</td>
                
                <td>$employeeIdNumber</td>
                <td>$employeePhone</td>
                 <td>$employeeDesignation</td>
                <td>$employeeDepartment</td>                
                 
                
                
                
               
            </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>


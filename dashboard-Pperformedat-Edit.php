<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - edit places performed</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: url('image/ws2.gif') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            color: white;
            align-items: center;
            height: 100vh;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .signup-container {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            z-index: 1;
        }

    </style>
</head>
<body>


    <?php include "header.php"; ?>


            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $id=$_GET['id'];

                $sql="select * from pperformedat where id=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$id);

                $stmt->execute();


                // Get result 
                $result=$stmt->get_result();



                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>




     <div class="signup-container">
        <h2 class="text-center">Edit Places performed</h2>
        <form action="dashboard-Pperformedat-Edit-2.php" method="post" enctype="multipart/form-data">


            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $data['id'] ?>" >
                <input type="hidden" name="uId" value="<?= $data['uId'] ?>" >

                <label for="plocation" class="form-label">Enter portfolio about</label>
                <input type="text" class="form-control" name="plocation" value="<?= $data['plocation'] ?>">
            </div>

            <center>
                
                <button type="submit" class="btn  border-white text-white " style=" color: black; ">Submit</button>

                &nbsp &nbsp
                <a href="dashboard-P-View.php?uId=<?= $uId ?>" class="btn  border-white text-white " style=" color: black; ">Back to portfolio </a>

                &nbsp &nbsp
                <a href="dashboard-Pperformedat-Delete.php?id=<?= $id ?>&uId=<?= $data['uId'] ?>" class="btn  border-white text-white " style=" color: black; ">Delete</a>

            </center>

        </form>
    </div>

    <?php
        }

    ?>

    <?php include "preloader.php"; ?>


    <?php include "resp-nav.php"; ?>


<!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>




</body>
</html>

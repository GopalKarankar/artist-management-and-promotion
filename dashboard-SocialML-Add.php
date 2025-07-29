<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Add new Social media platform</title>

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

            <!-- Sign up notification -->
            <?php if (!empty($_GET['msgEml'])) {
            ?>

                <span> <?= $_GET['msgEml']; ?> </span>
            
            <?php
            } ?>



     <div class="signup-container">
        <h2 class="text-center">Add new Platform</h2>
        <form action="dashboard-SocialML-Add-2.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="platform" class="form-label">Platform</label>
                <input type="text" class="form-control" id="platform" name="platform"  required>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link, id or username</label>
                <input type="text" class="form-control" id="link" name="link"   required>
            </div>


            <?php 
                // include "conn.php";

                // $id=$_GET['id'];

                $sql2="select * from coresocial";

                $stmt2=$conn->prepare($sql2);

                // $stmt2->bind_param('i',$id);

                $stmt2->execute();


                // Get result 
                $result2=$stmt2->get_result();


             ?>

             <br>
            <div class="mb-3">
                <h5 for="size" class="form-label">Choose logo</h5>
                
                    <?php 
                                    // Fetch data
                                    while($data2=$result2->fetch_assoc()){
                     ?>

                        <input type="radio" name="logo" id='<?= $data2['logo'] ?>' value='<?= $data2['logo'] ?>' > 
                        
                        <label for='<?= $data2['logo'] ?>'><?= $data2['logo'] ?></label> &nbsp &nbsp

                    <?php
                        }
                    ?>
                        <span class="font-weight-bold">or</span>
                        <a href="dashboard-Coresocial-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new logo</a>

            </div>

            <center>
            <button type="submit" class="btn  border-white text-white " style=" color: black; ">Submit</button>
            </center>

        </form>
    </div>

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

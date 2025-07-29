<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog & News - Midwave Productions (read more)</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .card {
            background-color: #1e1e1e;
            color: white;
        }
        .card a {
            color: #1e90ff;
        }
        .card-header {
            background-color: #333;
            color: white;
        }
        .btn-primary {
            background-color: #1e90ff;
            border: none;
        }
    </style>
</head>
<body>

    <?php include "header.php"; ?>

    <div class="container mt-5 mx-5" style="position:absolute; top: 50px; ">
        <div class="row">

            <!-- Main Content -->
            <div class="col-md-8">


                <?php if (isset($_SESSION['username'])) {

                ?>
                    <center>
                        <a class="btn text-white border-white " href="dashboard-Blogs-Add.php">Add blog</a>
                    </center>

                <?php
                    } 
                ?>
                
                <br>
                <h2 class="mb-4 text-center">Midwave Productions News</h2>

            <?php 
                include "conn.php";

                $id=$_GET['id'];

                $sql="select * from blogs where id=? order by id desc";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$id);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                
                <div class="card mb-4 d-flex justify-content-center">
                    <center>
                        <img class="card-img-top" src="<?= $data['imageDirectory'] ?>" style=" width:300px; height:300px; " alt="Company News">
                    </center>

                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $data['bTitle'] ?></h5>
                        <p class="card-text text-center" ><?= $data['bPost'] ?></p>
                    </div>
                </div>

                <?php 

                    }
                 ?>
            </div>

                <?php include "blogs-Aside.php"; ?>
        
        </div>
    </div>


        <?php include "preloader.php"; ?>

        <?php include "resp-nav.php"; ?>

        



<!-- Include Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>



</body>
</html>

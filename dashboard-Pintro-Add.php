<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Portfolio add intro</title>

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
            position: absolute;
            top: 60%;
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


     <div class="signup-container">
        <h2 class="text-center">Add Portfolio intro</h2>

        <form action="dashboard-Pintro-Add-2.php" method="post" enctype="multipart/form-data">
 
            <!-- Singer name -->
            <div class="mb-3">

                <?php 
                    // $uId=$_GET['uId'];
                    // $uId=3;
                 ?>

                <?php 
                    include "conn.php";

                    // $id=$_GET['id'];

                    $sql2="(
                            SELECT 
                                intro.id AS intro_id,
                                intro.imageName AS intro_imageName,
                                intro.imageType AS intro_imageType,
                                intro.imageSize AS intro_imageSize,
                                intro.imageDirectory AS intro_imageDirectory,
                                intro.name,
                                intro.role,
                                intro.details,
                                intro.uploadTime,
                                pintro.id AS pintro_id,
                                pintro.uId AS pintro_uId,
                                pintro.imageName AS pintro_imageName,
                                pintro.imageType AS pintro_imageType,
                                pintro.imageSize AS pintro_imageSize,
                                pintro.imageDirectory AS pintro_imageDirectory,
                                pintro.sName,
                                pintro.sQual,
                                pintro.sDetails,
                                pintro.timeOfUpload
                                FROM 
                                intro LEFT JOIN pintro 
                                ON intro.id = pintro.uId
                                WHERE pintro.uId IS NULL 

                            UNION

                            SELECT 
                                intro.id AS intro_id,
                                intro.imageName AS intro_imageName,
                                intro.imageType AS intro_imageType,
                                intro.imageSize AS intro_imageSize,
                                intro.imageDirectory AS intro_imageDirectory,
                                intro.name,
                                intro.role,
                                intro.details,
                                intro.uploadTime,
                                pintro.id AS pintro_id,
                                pintro.uId AS pintro_uId,
                                pintro.imageName AS pintro_imageName,
                                pintro.imageType AS pintro_imageType,
                                pintro.imageSize AS pintro_imageSize,
                                pintro.imageDirectory AS pintro_imageDirectory,
                                pintro.sName,
                                pintro.sQual,
                                pintro.sDetails,
                                pintro.timeOfUpload
                                FROM 
                                pintro LEFT JOIN intro 
                                ON intro.id = pintro.uId
                                WHERE intro.id IS NULL 
                        )";

                    $stmt2=$conn->prepare($sql2);

                    // $stmt2->bind_param('i',$uId);

                    $stmt2->execute();

                    // Get result 
                    $result2=$stmt2->get_result();

                 ?>


                  <label for="exampleSelect" class="form-label">Choose Artist</label>
                  <select class="form-select" id="exampleSelect" name="uId">

                    <?php 
                        // Fetch data
                        while($data2=$result2->fetch_assoc()){
                     ?>
                        <option value="<?= $data2['intro_id'] ?>"><?= $data2['name'] ?></option>
                    <?php
                        }
                    ?>

                  </select>

                  <span> or </span> <a href="dashboard-Intro-Add.php" class="btn border-white text-white ">Add new artist</a>

            </div>

            <!-- Singer qualities -->
            <div class="mb-3">
                <label for="role" class="form-label">Singer qualities</label>
                <input type="text" class="form-control" id="role" name="sQual"   required>

            </div>


            <!-- Singer deatails -->
            <div class="mb-3">
                <label for="details" class="form-label">Singer details</label>
                <textarea class="form-control" id="details" name="sDetails" cols="5" rows="7" required></textarea>
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

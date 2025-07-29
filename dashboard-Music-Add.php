<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Add new Music</title>

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
        <h2 class="text-center">Add Music</h2>
        <form action="dashboard-Music-Add-2.php" method="post" enctype="multipart/form-data">

                    <br>
                    <center>
                    <div class="mb-3">
                        <label for="category" class="form-label">Video category</label>
                        <select class="form-select" id="category" name="category" required>
                            <option selected disabled>None</option>
                            <option value="Releases">Releases</option>
                            <option value="Music n Recordings">Music n Recordings</option>
                            <option value="Mixing n Mastering">Mixing n Mastering</option>
                        </select>
                    </div>
                    </center>

            <div class="mb-3">
                <label for="image" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">

                <label for="iframe" class="form-label">iframe link</label>
                <input type="text" class="form-control" id="iframe" name="iframe"  required>
            </div>


            <div class="mb-3">
                <label for="sTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="sTitle" name="sTitle"   required>
            </div>

            <div class="mb-3">
                <label for="sArtist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="sArtist" name="sArtist"    required>
            </div>

            <button type="submit" class="btn  border-white text-white " style=" color: black; ">Submit</button>

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

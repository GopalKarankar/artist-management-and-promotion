<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team member form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <h2 class="mb-4">Intro Form</h2>
        <form action="intro-Upload-2.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" required>
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea class="form-control" id="details" name="details" rows="3"></textarea>
            </div>
            
            <center><button type="submit" class="btn btn-white text-white bg-black border-white bg-black">Submit</button></center>

        </form>

    </div>

    <?php include "preloader.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

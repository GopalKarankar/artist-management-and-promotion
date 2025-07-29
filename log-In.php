<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin log in</title>

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

        .login-container {
            position: absolute;
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



    <div class="login-container">
        <div class="row">
            <div class="col-md-12">
                

        <h2 class="text-center">Admin Login</h2>
        
        <form action="log-In-2.php" method="post">

            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" id="email" placeholder="Enter username" name="username" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>

                <?php if (!empty($_GET['msg'])) {
                ?>
                    <label class="text-danger" ><?= $_GET['msg'] ?></label>
                <?php
                    } 
                ?>

            </div>

            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="showPassword">Show Password</label>
            </div>

                <?php if (!empty($_GET['msg2'])) {
                ?>
                    <label class="text-success" ><?= $_GET['msg2'] ?></label>
                    <br>
                <?php
                    } 
                ?>

                <br>
            <center>
               <button type="submit" class=" d-inline btn  border-white text-white"  style=" color: black; ">Log in</button>
               &nbsp
                <a href="forgot-Password.php"  class="p-2 btn d-inline  border-white text-white"  style=" color: black; ">Forgot password ?</a>
            </center>

        </form>



            </div>
        </div>
    </div>


    <?php include "preloader.php"; ?>

    
    <?php include "resp-nav.php"; ?>

        



<!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>


<script>
    
      document.getElementById('showPassword').addEventListener('change', function() {
            let passwordField = document.getElementById('password');
            passwordField.type = this.checked ? 'text' : 'password';
        });

</script>


</body>
</html>

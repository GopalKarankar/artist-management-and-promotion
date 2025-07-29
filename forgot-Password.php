<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Forgot Password</title>


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
  background-color: rgba(0,0,0,0.6);
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
  box-shadow: 0 0 10px rgba(255,255,255,0.2);
  z-index: 1;
}
</style>
</head>
<body>


        <?php include "header.php"; ?>


<div class="login-container">

        <div class="row">
            <div class="col-md-12">

  <h2 class="text-center">Forgot Password</h2>
  
  <form action="forgot-Password-2.php" method="post">
  
    <div class="mb-3">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" required>
    </div>
  
    <div class="mb-3">
      <label for="old_password">Old Password</label>
      <input type="password" class="form-control" id="password1"  name="old_password" required>
    </div>

    <div class="mb-3">
      <label for="new_password">New Password</label>
      <input type="password" class="form-control" id="password2" name="new_password" required>
    </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="showPassword">Show Password</label>
            </div>

    <?php if (!empty($_GET['msg'])): ?>
      <div class="text-danger"><?= htmlspecialchars($_GET['msg']) ?></div>
    <?php endif; ?>
    <br>

    <center>
    <button type="submit" class=" d-inline btn  border-white text-white"  style=" color: black; ">Reset Password</button>
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
            let passwordField = document.getElementById('password1');
            passwordField.type = this.checked ? 'text' : 'password';
        });
    
      document.getElementById('showPassword').addEventListener('change', function() {
            let passwordField = document.getElementById('password2');
            passwordField.type = this.checked ? 'text' : 'password';
        });

</script>


</body>
</html>

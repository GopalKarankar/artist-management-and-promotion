<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists & Bookings</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #343a40;
            color: white;
        }
        

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }


        .card {
            background-color: #495057;
            color: white;
        }
        .form-control {
            background-color: #495057;
            color: white;
            border: 1px solid white;
        }
        .form-control::placeholder {
            color: #ccc;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container mt-5" style="position: absolute; margin-top: 160px;">

        <h2 class="text-center mb-4">Chairman</h2>

<hr class="bg-white" id="ah">
<br>
        <div class="row d-flex justify-content-around">


            <?php 
                include "conn.php";

                $role="chairman";

                $sql="select * from intro where role=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$role);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();
            ?>


            <?php
                // Fetch data
                while($data=$result->fetch_assoc()){
            ?>

                 <!-- member -->
                <div class="member col-md-5 mb-4 mx-3" >

                    <div class="card border-0 shadow p-4"  style="background: linear-gradient(80deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

                        <img src="<?= $data['imageDirectory'] ?>" alt="CEO" class="profile-img mx-auto">

                        <h3 class="mt-3 text-center"><?= $data['name'] ?></h3>

                        <p class="text-white text-center"><?= $data['role'] ?></p>
                        <br>

                        <center>
                            <a class="btn d-inline text-white border-white" href="dashboard-P-View.php?uId=<?= $data['id'] ?>" style="width: 107px; height: 37px;">View Portfolio</a>                           
                        </center>
                        <br>

                        <center>
                            <a href="book-Hired.php?id=<?= $data['id'] ?>" class="btn text-white border-white" style="width: 107px; height: 37px;">Hire artist</a>
                        </center>
                        <br>

                        <p style=" border: 1px solid white; padding: 10px;  word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?= $data['details'] ?></p>


                    </div>


                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="member-edit">
                       <a href="dashboard-Intro-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success "></i>
                       </a> 
                    </div>

                    <!-- Edit icon -->
                    <div class="member-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Intro-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash "></i>
                       </a> 
                    </div>
                    
                    <?php } ?>

                </div>

        <?php } ?>

        </div>
        

        <br>
        <br>
        <h1 class="text-center">Meet the Team artists</h1>

<hr class="bg-white" id="ah">


       <?php if (isset($_SESSION['username']))                 
         { 
       ?>

        <center>
        <a href="dashboard-Intro-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Member</a>
        </center>
        <br>

        <?php } ?>
        
        <div class="row d-flex justify-content-center">

            

            <?php 
                include "conn.php";

                $role="chairman";

                $sql="select * from intro  where role <> ? order by id desc";

                // $sql = "SELECT * FROM intro WHERE role <> ? ORDER BY id DESC";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$role);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();
            ?>


        

            <?php
                // Fetch data
                while($data=$result->fetch_assoc()){
            ?>

                <!-- member -->
                <div class="member col-md-5 mb-4 mx-3" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

                    <div class="card border-0 shadow p-4" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

                        <img src="<?= $data['imageDirectory'] ?>" alt="CEO" class="profile-img mx-auto">

                        <h3 class="mt-3 text-center"><?= $data['name'] ?></h3>

                        <p class="text-white text-center"><?= $data['role'] ?></p>
                        <br>

                        <center>
                            <a class="btn d-inline text-white border-white" href="dashboard-P-View.php?uId=<?= $data['id'] ?>" style="width: 107px; height: 37px;">View Portfolio</a>                           
                        </center>
                        <br>

                        <center>
                            <a href="book-Hired.php?id=<?= $data['id'] ?>" class="btn text-white border-white" style="width: 107px; height: 37px;">Hire artist</a>
                        </center>
                        <br>

                        <p style=" border: 1px solid white; padding: 10px;  word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?= $data['details'] ?></p>


                    </div>


                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="member-edit">
                       <a href="dashboard-Intro-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success "></i>
                       </a> 
                    </div>

                    <!-- Edit icon -->
                    <div class="member-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Intro-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash text-danger "></i>
                       </a> 
                    </div>
                    
                    <?php } ?>

                </div>

            <?php
                }
             ?>
            
        </div>


<br><br>
<hr class="bg-white">
<?php include 'footer.php'; ?>
        
        
    <?php include "preloader.php"; ?>


        <?php include "resp-nav.php"; ?>

        



<!-- Include Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <script>
        
        function confirmDelete() {
            return confirm("are you sure you want to delete this ?");
        }

    </script>


</body>
</html>

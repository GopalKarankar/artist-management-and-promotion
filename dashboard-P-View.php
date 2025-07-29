<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View portfolio</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: black;
            color: white;
        }

        .hospitality-item {
            border: 1px solid white;
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
        }


        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card {
            background-color: black;
            color: white;
            border: 1px solid white;
        }

                .hero {
            text-align: center;
            padding: 50px 20px;
        }
        .btn-custom {
            background-color: #ff5733;
            color: white;
        }

    </style>
</head>
<body>


    <?php include "header.php"; ?>

            <?php 
                include "conn.php";

            ?>



    <div class="container text-center mt-5" style="position: absolute; top: 70px;">


    <!-- Intro -->
    <section class="intro container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%); ">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pintro where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>



        <h1 class="text-left text-success font-weight-bold">INTRO</h1>
        <br>

            <?php 

                // Fetch data
                while($data=$result->fetch_assoc()){

             ?>

        <div class="row">

            <div class="col-md-6">
                <img src="<?= $data['imageDirectory'] ?>" style="width: 100%; height: 100%; " class="img-fluid rounded" alt="Our Journey">
            </div>

            <div class="col-md-6">
                <br><br>
                <h3 class="text-left">Singer</h3>
                <h1 class="text-left" style="font-size: 60px; "><?= $data['sName'] ?></h1>
                <h4 class="text-left text-success font-weight-bold"><?= $data['sQual'] ?></h4>
                <br>

                <h5  class="text-left"><?= $data['sDetails'] ?></h5>

            </div>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

            <!-- Edit icon -->
            <div class="intro-edit">
               <a href="dashboard-Pintro-Edit.php?uId=<?= $uId ?>" title="Edit" >
                    <i class="fa-solid fa-square-pen text-success fa-2x "></i>
               </a> 
            </div>

        <?php } ?>

        </div>

    <?php 
    
        } 

    ?>

    </section>


    <!-- About -->
    <section class="about container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pabout where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>


        <h1 class="text-left text-success font-weight-bold">ABOUT</h1>
        <br>

        <?php 
                // Fetch data
                while($data=$result->fetch_assoc()){

         ?>

        <div class="row">

            <div class="col-md-12">

                <p  class="text-left"><?= $data['bPost'] ?></p>

            </div>

                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

            <!-- Edit icon -->
            <div class="about-edit">
               <a href="dashboard-Pabout-Edit.php?uId=<?= $uId ?>" title="Edit" >
                    <i class="fa-solid fa-square-pen text-success fa-2x"></i>
               </a> 
            </div>

                    <?php } ?>

        </div>

        <?php 
        
            } 

        ?>

    </section>

    <!-- performed at -->
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pperformedat where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();


             ?>
               
                <h1 class="text-left text-success font-weight-bold">PERFORMED AT</h1>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>


        <center>
        <a href="dashboard-Pperformedat-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new location</a>
        </center>
        <br>
        <?php  } ?>

                    <div class="row d-flex justify-content-center">

                        <?php 
                                            // Fetch data
                                while($data=$result->fetch_assoc()){

                         ?>

                            <div class="performedAt col-md-auto">

                                <h2  class="d-inline text-center">| &nbsp <?= $data['plocation'] ?> &nbsp  | &nbsp &nbsp</h2>

                           <?php if (isset($_SESSION['username']))                 
                             { 
                           ?>

                                <!-- Edit icon -->
                                <div class="performed-edit">
                                   <a href="dashboard-Pperformedat-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Edit" >
                                        <i class="fa-solid fa-square-pen text-success text-success "></i>
                                   </a> 
                                </div>

                                <!-- Delete icon -->
                                <div class="performed-delete" onclick="return confirmDelete()">
                                   <a href="dashboard-Pperformedat-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Delete" >
                                        <i class="fa-solid fa-trash text-danger "></i>
                                   </a> 
                                </div>

                            <?php } ?>

                            </div>
                                   <br><br><br> 

                        <?php 
                        
                            } 

                        ?>


                    </div>

    </section>

    <!-- Live shows -->
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pliveshw where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>

  
            <h1 class="text-left text-success font-weight-bold">LIVE SHOWS</h1>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

        <center>
        <a href="dashboard-Pliveshw-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new pic</a>
        </center>
        <br>
        <?php  } ?>

        <div class="row d-flex justify-content-center">

            <?php 
                            // Fetch data
                            while($data=$result->fetch_assoc()){

             ?>

                <div class="liveShows col-auto mb-4">

                    <img src="<?= $data['imageDirectory'] ?>" style="width: 200px; height: 200px; " class="img-fluid rounded" alt="Our Journey">

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

                    <!-- Edit icon -->
                    <div class="live-edit">
                       <a href="dashboard-Pliveshw-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Edit" >
                            <i class="fa-solid fa-square-pen text-success "></i>
                       </a> 
                    </div>

                    <!-- Delete icon -->
                    <div class="performed-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Pliveshw-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>&directory=<?= $data['imageDirectory'] ?>" title="Delete" >
                            <i class="fa-solid fa-trash text-danger "></i>
                       </a> 
                    </div>

        <?php } ?>

                </div>

            <?php 
            
                } 

            ?>

        </div>


    </section>



    <!-- Video songs -->
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
  
            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pvsongs where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>

            <h1 class="text-left text-success font-weight-bold">VIDEO SONGS</h1>
            <br>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>
        <center>
        <a href="dashboard-Pvsongs-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Song</a>
        </center>
        <br>
        <?php  } ?>


        <div class="row d-flex justify-content-center">

            <?php 
                            // Fetch data
                            while($data=$result->fetch_assoc()){

             ?>

                <div class="videoSongs col-auto mb-4">
                    

                    <div style="width: 100%; height:  100%; " alt="Our journey" >

                        <?= $data['vLink'] ?>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

                        <!-- Edit icon -->
                        <div class="video-edit">
                           <a href="dashboard-Pvsongs-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Edit" >
                                <i class="fa-solid fa-square-pen text-success "></i>
                           </a> 
                        </div>

                        <!-- Delete icon -->
                        <div class="performed-delete" onclick="return confirmDelete()">
                           <a href="dashboard-Pvsongs-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Delete" >
                                <i class="fa-solid fa-trash text-danger "></i>
                           </a> 
                        </div>

        <?php } ?>

                    </div>


                </div>

            <?php 
            
                } 

            ?>


        </div>

    </section>



    <!-- Celebity performances -->
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
 
            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pcelebrity where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>
           <h1 class="text-left text-success font-weight-bold">CELEBRITY PERFORMANCES</h1>
            
           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

        <center>
        <a href="dashboard-Pcelebrity-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new pic</a>
        </center>
        <?php  } ?>

        <br>

        <div class="row d-flex justify-content-center">


            <?php 
                // Fetch data
                while($data=$result->fetch_assoc()){

             ?>
            
                <!-- member -->
                <div class="member col-auto mb-4 mx-3">

                    <div class="card border-0 shadow p-4">

                        <img src="<?= $data['imageDirectory'] ?>" alt="CEO" class="profile-img mx-auto">

                        <h3 class="mt-3"><?= $data['pCelebName'] ?></h3>
                        
                    </div>

                        <?php if (isset($_SESSION['username']))                 
                         { 
                       ?>

                    <!-- Edit icon -->
                    <div class="celebrity-edit">
                       <a href="dashboard-Pcelebrity-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId']  ?>" title="Edit" >
                            <i class="fa-solid fa-square-pen text-success "></i>
                       </a> 
                    </div>

                    <!-- Delete icon -->
                    <div class="performed-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Pcelebrity-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>&directory=<?= $data['imageDirectory'] ?>" title="Delete" >
                            <i class="fa-solid fa-trash text-danger "></i>
                       </a> 
                    </div>

        <?php } ?>

                </div>

            <?php 
            
                } 

            ?>

        </div>

   </section>


    <!-- Technical requirement for band -->
    <section class="technical container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from ptechnical where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>

                <h1 class="text-left text-success font-weight-bold">TECHNICAL REQUIREMENTS</h1>
                <br>

                <?php                

                     // Fetch data
                    while($data=$result->fetch_assoc()){

                 ?>
                    <div class="row">

                        <div class="col-md-12">

                            <p  class="text-left"><?= $data['pDetails'] ?></p>
                        
                        </div>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

                        <!-- Edit icon -->
                        <div class="technical-edit">
                           <a href="dashboard-Ptechnical-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId']  ?>" title="Edit" >
                                <i class="fa-solid fa-square-pen text-success fa-2x"></i>
                           </a> 
                        </div>

        <?php } ?>

                    </div>
             

                <?php 
                
                    } 

                ?>

   </section>


    <!-- Digital handles -->

    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pdighandles where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>


        <h1 class="text-left text-success font-weight-bold">DIGITAL HANDLES</h1>
            
           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

        <center>
        <a href="dashboard-Pdighandles-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new handle</a>
        </center>

        <?php  } ?>

        <br>

        <div class="row d-flex justify-content-center">

                <?php 

                    // Fetch data
                    while($data=$result->fetch_assoc()){

                 ?>

                <div class="digital col-auto mb-4 mx-3">

                        <a href="<?= $data['pLink'] ?>">
                            <img src="<?= $data['imageDirectory'] ?>" alt="CEO"  style="width: 200px; height: 200px; ">
                            
                        </a>

                        <h3 class="mt-3"><?= $data['platform'] ?></h3>
         
                 <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                        <!-- Edit icon -->
                        <div class="digital-edit">
                           <a href="dashboard-Pdighandles-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId']  ?>" title="Edit" >
                                <i class="fa-solid fa-square-pen text-success "></i>
                           </a> 
                        </div>                        

                        <!-- Delete icon -->
                        <div class="performed-delete" onclick="return confirmDelete()">
                           <a href="dashboard-Pdighandles-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>&directory=<?= $data['imageDirectory'] ?>" title="Delete" >
                                <i class="fa-solid fa-trash text-danger "></i>
                           </a> 
                        </div>

                <?php } ?>

                </div>

            <?php 
            
                } 

            ?>

        </div>

   </section>

    <!-- Hospitality requirements -->
    
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

            <?php 
                include "conn.php";

                $sql="select * from phospi";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>


        <h1 class="text-left text-success font-weight-bold">Hospitality requirements</h1>
            

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

        <center>
        <a href="dashboard-Phospi-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new requirement</a>
        </center>
        <br>
        
        <?php } ?>        

        <div class="row d-flex justify-content-center">

                <?php 

                    // Fetch data
                    while($data=$result->fetch_assoc()){

                 ?>


            <div class="member col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4">

                    <h4 class="text-center mb-3"><?= $data['reqName'] ?></h4>
                    <br>
                    <p><?= $data['reqDescr'] ?></p>
                    
                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                        <!-- Edit icon -->
                        <div class="social-edit">
                           <a href="dashboard-Phospi-Edit.php?id=<?= $data['id'] ?>&uId=<?= $uId ?>" title="Edit" >
                                <i class="fa-solid fa-square-pen text-success "></i>
                           </a> 
                        </div>

                        <!-- Delete icon -->
                        <div class="performed-delete" onclick="return confirmDelete()">
                           <a href="dashboard-Phospi-Delete.php?id=<?= $data['id'] ?>&uId=<?= $uId ?>" title="Delete" >
                                <i class="fa-solid fa-trash text-danger "></i>
                           </a> 
                        </div>

                <?php } ?>

                </div>
            </div>
                        
            <?php 
            
                } 

            ?>

        </div>

   </section>


    <!-- Social contacts -->
    <section class=" container my-5" style="position:relative; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
 
            <?php 
                include "conn.php";

                $uId=$_GET['uId'];

                $sql="select * from pvsocial where uId=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('i',$uId);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

             ?>

       <h1 class="text-left text-success font-weight-bold">SOCIAL CONTACTS</h1>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>
            
        <center>
        <a href="dashboard-PvsocialML-Add.php?uId=<?= $uId ?>" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new social contact</a>
        </center>
        <br>
        <?php  } ?>


        <?php 
                // Fetch data
                while($data=$result->fetch_assoc()){

         ?>
        
        <div class="row">

            <div class="social col-md-12">

                <h1 class="text-left"><?= $data['logo'] ?>&nbsp<span><?= $data['link'] ?></span></h1>
                <br>

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

                <!-- Edit icon -->
                <div class="social-edit">
                   <a href="dashboard-PvsocialML-Edit.php?id=<?= $data['id'] ?>&uId=<?= $data['uId']  ?>" title="Edit" >
                        <i class="fa-solid fa-square-pen text-success "></i>
                   </a> 
                </div>

                <!-- Delete icon -->
                <div class="performed-delete" onclick="return confirmDelete()">
                   <a href="dashboard-PvsocialML-Delete.php?id=<?= $data['id'] ?>&uId=<?= $data['uId'] ?>" title="Delete" >
                        <i class="fa-solid fa-trash text-danger "></i>
                   </a> 
                </div>

        <?php } ?>

            </div>

        </div>
        <br>

        <?php 
        
            } 

        ?>

   </section>    
    <br>


        <?php //include 'footer.php'; ?>

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

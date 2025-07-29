<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band Intro Page</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: black;
            color: white;
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


                $sql="select * from intro order by id desc";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();
            ?>



    <div class="container text-center mt-5" style="position: absolute; top: 70px;">



     <header class="bg-dark text-white text-center py-5" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
        <h1>About Midwave Productions</h1>
        <p>Establishing credibility in the music industry</p>
     </header>

    <section class="container my-5">
        <div class="row">

            <div class="tt col-md-6">
                <?php 
            include "conn.php";

            $sql="select * from introsec2img";

            $stmt=$conn->prepare($sql);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

            // Fetch data
            while($data=$result->fetch_assoc()){

?>

                <img src="<?= $data['imageDirectory'] ?>" style="width: 100%; height: 100%; " class="img-fluid rounded" alt="Our Journey">


               <?php if (isset($_SESSION['username'])) 
               
                 { 

               ?>

                 <!-- Edit icon -->
                 <div class="tt-edit">
                    <a href="intro-Sec2img-Edit.php?id=<?= $data['id'] ?>">
                         <i class="fa-solid fa-square-pen text-success fa-2x"></i>
                    </a> 
                 </div>
               
               <?php 
                  }
                ?>


<?php 
    } 
?>
            </div>

<?php 
            include "conn.php";

            $sql="select * from introsec2";

            $stmt=$conn->prepare($sql);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

            // Fetch data
            while($data=$result->fetch_assoc()){

?>

            <div class="tt col-md-6">
                <p class="text-center"><?= $data['mps'] ?></p>

               <?php if (isset($_SESSION['username'])) 
               
                 { 

               ?>

                 <!-- Edit icon -->
                 <div class="tt-edit">
                    <a href="intro-Sec2-Edit.php?id=<?= $data['id'] ?>">
                         <i class="fa-solid fa-square-pen text-success fa-2x"></i>
                    </a> 
                 </div>
               
               <?php 
                  }
                ?>


            </div>
<?php } ?>
        </div>
    </section>

    <section class="bg-dark py-5" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
        <div class="container text-center">
            <h2 class="text-white">Why Choose Us?</h2>
            <p class="text-white">Midwave Productions stands out due to its dedication to authentic music, exceptional performances, and a passionate fan base.</p>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-auto">
                    <h4 class="text-white">Passionate Artists</h4>
                    <p class="text-white">Our team consists of experienced musicians who live and breathe music.</p>
                </div>
                <div class="col-auto">
                    <h4 class="text-white">Innovative Sound</h4>
                    <p class="text-white">We blend different genres to create unique and memorable tracks.</p>
                </div>
                <div class="col-auto">
                    <h4 class="text-white">Unmatched Experience</h4>
                    <p class="text-white">With years in the industry, we know how to connect with audiences worldwide.</p>
                </div>
            </div>
        </div>
    </section>        


<br>
<br>
<hr class="bg-white">        

        <h1 class="">Meet the Team artists</h1>

        <center>
        <a href="dashboard-Intro-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Member</a>
        </center>
        <br>
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

<!--                         <center>
                            <a href="book-Hired.php?id=<?= $data['id'] ?>" class="btn text-white border-white" style="width: 107px; height: 37px;">Hire artist</a>
                        </center>
                        <br>
 -->
                        <!-- <p style=" border: 1px solid white; padding: 10px;  word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?= $data['details'] ?></p> -->


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

<br>    <br>    
        <div class="row d-flex justify-content-center">
        
<?php 
            include "conn.php";

                $role="chairman";

                $sql="select * from intro  where role <> ? order by id desc";

            $stmt=$conn->prepare($sql);

            $stmt->bind_param('s',$role);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

  
                // Fetch data
                while($data=$result->fetch_assoc()){
            ?>

                <!-- member -->
                <div class="member col-md-5 mb-4 mx-3">
                    <div class="card border-0 shadow p-4">
                        <img src="<?= $data['imageDirectory'] ?>" alt="CEO" class="profile-img mx-auto">
                        <h3 class="mt-3"><?= $data['name'] ?></h3>
                        <p class="text-white"><?= $data['role'] ?></p>

                        <center>
                            <a class="btn d-inline text-white border-white" style="width: 107px; height: 37px; " href="dashboard-P-View.php?uId=<?= $data['id'] ?>" >View Portfolio</a>                           
                        </center>
                        <br>

                        <!-- <p><?= $data['details'] ?></p> -->

                    
                    </div>

                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="member-edit">
                       <a href="dashboard-Intro-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success"></i>
                       </a> 
                    </div>

                    <!-- Delete icon -->
                    <div class="member-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Intro-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash text-danger"></i>
                       </a> 
                    </div>

                <?php } ?>

                </div>

            <?php
                }
             ?>
            
        </div>

<br>
<br>
<hr class="bg-white">        

        
        <!-- Music & Video Projects -->
        <section class="mb-5">
            <h2>Music & Video Projects</h2>
            <br>


        <center>
        <a href="dashboard-Music-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Music</a>
        </center>
        <br>
        
            <div class="row d-flex justify-content-center">


            <?php 

                $limit = 10; // Number of records per pageNo


                // Get the current pageNo number from the URL, default to 1 if not set
                if (isset($_GET['pageNo'])) {
                    $pageNo=$_GET['pageNo'];
                } else {
                    $pageNo=1;
                }


                // if pageNo is less than 1
                if ($pageNo < 1){
                    $pageNo = 1;
                } 


                // Calculate offset
                $offset = ($pageNo - 1) * $limit;


                $sql="select * from music order by id desc limit ? offset ?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){

            ?>


                        <div class="mv col-auto my-3" style="position: relative;" >

                            <center><div style=""><?= $data['iframe'] ?></div></center>


                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>
                            <!-- Edit icon -->
                            <div class="mv-edit">
                               <a href="dashboard-Music-Edit.php?id=<?= $data['id'] ?>">
                                    <i class="fa-solid fa-square-pen  text-success"></i>
                               </a> 
                            </div>

                            <!-- Delete icon -->
                            <div class="mv-delete" onclick="return confirmDelete()">
                               <a href="dashboard-Music-Delete.php?id=<?= $data['id'] ?>">
                                    <i class="fa-solid fa-trash  text-danger"></i>
                               </a> 
                            </div>
                    <?php } ?>

                        </div>



          <?php 
                }
           ?>
            </div>


<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM music  ";

                $stmt2=$conn->prepare($sql2);

                // $stmt2->bind_param('s',$status);

                $stmt2->execute();

                $total_records_result=$stmt2->get_result();

        // Fetch the total number of records from the database query result
        $total_records_row = $total_records_result->fetch_assoc(); 

        // Extract the 'total' value from the associative array
        $total_records = $total_records_row['total']; 


        $total_pages = ceil($total_records / $limit);

?>

        <!-- (Pagination links) -->
        <br>
        <nav class=" d-flex justify-content-center">
            <ul class="pagination" >

                    <!-- Previous -->
                    <?php if ($pageNo > 1) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>
        

<br>
<br>

            
        </section>
        

<br>
<br>
<hr class="bg-white">        

        <h2 class="text-center mt-5 mb-4">Past Events Gallery</h2>


            <center>
            <a href="dashboard-Event-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new pic</a>
            </center>
            <br>
            <br>


        <div class="row d-flex justify-content-around">


            <?php 
                include "conn.php";

                $limit = 10; // Number of records per pageNo


                // Get the current pageNo number from the URL, default to 1 if not set
                if (isset($_GET['pageNo'])) {
                    $pageNo=$_GET['pageNo'];
                } else {
                    $pageNo=1;
                }


                // if pageNo is less than 1
                if ($pageNo < 1){
                    $pageNo = 1;
                } 


                // Calculate offset
                $offset = ($pageNo - 1) * $limit;

                $sql="select * from events limit ? offset ? ";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                <div class="events col-auto mb-4">

                    <img src="<?= $data['imageDirectory'] ?>" style=" width: 300px; height:300px; " class="profile-img mx-auto" alt="Past Event 2">

 
                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="events-edit">
                       <a href="dashboard-Event-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success"></i>
                       </a> 
                    </div>
 
                    <!-- Delete icon -->
                    <div class="events-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Event-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash text-danger"></i>
                       </a> 
                    </div>

                <?php } ?> 

                </div>

                <?php 

                    }

                 ?>

        </div>

<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM events  ";

                $stmt2=$conn->prepare($sql2);

                // $stmt2->bind_param('s',$status);

                $stmt2->execute();

                $total_records_result=$stmt2->get_result();

        // Fetch the total number of records from the database query result
        $total_records_row = $total_records_result->fetch_assoc(); 

        // Extract the 'total' value from the associative array
        $total_records = $total_records_row['total']; 


        $total_pages = ceil($total_records / $limit);

?>

        <!-- (Pagination links) -->
        <br>
        <nav class=" d-flex justify-content-center">
            <ul class="pagination" >

                    <!-- Previous -->
                    <?php if ($pageNo > 1) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>
        

<br>
<br>
<hr class="bg-white">        

        <!-- Behind the Scenes -->
        <section>
            <h2>Behind the Scenes</h2>
            <br>
            
            <center>
            <a href="dashboard-BTS-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new pic</a>
            </center>
            <br>
            <br>

            <div class="row d-flex justify-content-center">


            <?php 
                include "conn.php";

                $limit = 10; // Number of records per pageNo


                // Get the current pageNo number from the URL, default to 1 if not set
                if (isset($_GET['pageNo'])) {
                    $pageNo=$_GET['pageNo'];
                } else {
                    $pageNo=1;
                }


                // if pageNo is less than 1
                if ($pageNo < 1){
                    $pageNo = 1;
                } 


                // Calculate offset
                $offset = ($pageNo - 1) * $limit;

                $sql="select * from bts order by id desc limit ? offset ?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){

            ?>


                <div class="bts col-md-3 mb-4 mx-1">
                    <img src="<?= $data['imageDirectory'] ?>" style="width: 200px; height:200px;" class="img-fluid rounded" alt="Studio Session">
  
                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="bts-edit">
                       <a href="dashboard-BTS-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success"></i>
                       </a> 
                    </div>
  
                    <!-- Delete icon -->
                    <div class="bts-delete" onclick="return confirmDelete()">
                       <a href="dashboard-BTS-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash text-danger"></i>
                       </a> 
                    </div>
                    
                <?php } ?>

               </div>

                <?php 
                    }
                 ?>

            </div>


<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM bts  ";

                $stmt2=$conn->prepare($sql2);

                // $stmt2->bind_param('s',$status);

                $stmt2->execute();

                $total_records_result=$stmt2->get_result();

        // Fetch the total number of records from the database query result
        $total_records_row = $total_records_result->fetch_assoc(); 

        // Extract the 'total' value from the associative array
        $total_records = $total_records_row['total']; 


        $total_pages = ceil($total_records / $limit);

?>

        <!-- (Pagination links) -->
        <br>
        <nav class=" d-flex justify-content-center">
            <ul class="pagination" >

                    <!-- Previous -->
                    <?php if ($pageNo > 1) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="intro.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>
        

<br>
<br>


        </section>

<br>
<br>
<hr class="bg-white">        


        <?php include 'footer.php'; ?>

    </div>
    



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

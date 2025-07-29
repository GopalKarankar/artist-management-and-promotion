<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog & News - Midwave Productions</title>

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

    <div class="container mt-5 mx-5" style="position:absolute; top: 80px; ">
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

                $limit = 7; // Number of records per pageNo


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

                $sql="select * from blogs limit ? offset ? ";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                
                <div class="blgs card mb-4 pt-4 d-flex justify-content-center" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
                    <center>
                        <img class="card-img-top" src="<?= $data['imageDirectory'] ?>" style=" width:300px; height:300px; " alt="Company News">
                    </center>

                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $data['bTitle'] ?></h5>
                        <p class="card-text text-center" style="height: 23px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $data['bPost'] ?></p>
                        <center><a href="blogs-Read-More.php?id=<?= $data['id'] ?>" class="btn border-white text-white text-center">Read More</a></center>
                    </div>


                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="blgs-edit">
                       <a href="dashboard-Blogs-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen  text-success"></i>
                       </a> 
                    </div>

                    <!-- Delete icon -->
                    <div class="blgs-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Blogs-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash  text-danger"></i>
                       </a> 
                    </div>
                
                <?php } ?>

                </div>

                <?php 

                    }
                 ?>


<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM blogs ";

                $stmt2=$conn->prepare($sql2);

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
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
            <ul class="pagination" >

                    <!-- Previous -->
                    <?php if ($pageNo > 1) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="Blogs.php?pageNo=<?= $pageNo - 1 ?>">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="Blogs.php?pageNo=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="Blogs.php?pageNo=<?= $pageNo + 1 ?>">Next</a>
                        </li>

                    <?php
                        } 
                    ?>
            </ul>
            </div>
        </div>



            </div>

                <?php include "blogs-Aside.php"; ?>
        
        </div>
        
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

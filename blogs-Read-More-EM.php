<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog & News - Midwave Productions (Event management)</title>

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

    <div class="container mt-3 mx-5" style="position:absolute; top: 80px; ">
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

                $bCategory="Event Management";


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


                $sql="select * from blogs where bCategory=? limit ? offset ? ;

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('sii',$bCategory,$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                
                <div class="blgs card mb-4 d-flex justify-content-center">
                    <center>
                        <img class="card-img-top" src="<?= $data['imageDirectory'] ?>" style=" width:300px; height:300px; " alt="Company News">
                    </center>

                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $data['bTitle'] ?></h5>
                        <p class="card-text text-center" style="height: 23px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $data['bPost'] ?></p>
                        <center><a href="blogs-Read-More.php?id=<?= $data['id'] ?>&msg=apd2em" class="btn border-white text-white text-center">Read More</a></center>
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
        $sql2 = "SELECT COUNT(*) AS total FROM blogs where bCategory=? ";

                $stmt2=$conn->prepare($sql2);

                $stmt2->bind_param('s',$bCategory);

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
                            <a class="page-link text-white bg-dark" href="blogs-Read-More-EM.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2em">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="blogs-Read-More-EM.php?pageNo=<?= $i ?>&msg=apd2em"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="blogs-Read-More-EM.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2em">Next</a>
                        </li>

                    <?php
                        } 
                        $conn->close();
                    ?>
            </ul>
        </nav>

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

    <script>
        function confirmDelete() {
            return confirm("are you sure you want to delete this ?");
        }
    </script>


</body>
</html>

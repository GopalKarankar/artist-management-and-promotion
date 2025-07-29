<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - places Performed at</title>

    
<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <?php include "dashboard-Aside.php"; ?>


    <div class="main">
        <h2 class="text-center"><i class="fa-solid fa-location-pin"></i><div class="d-inline bangers-regular">&nbsp Places performed at</div></h2>


                <center>
                <a href="dashboard-Pperformedat-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new places</a>
                </center>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered "   >
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Places</th>
                <th class="text-center">Time of upload</th>
                <!-- <th class="text-center">size</th> -->
                <th class="text-center">Actions</th>
            </tr>

            <?php 
                include "conn.php";

                $sql="select * from pperformedat order by id desc";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

            <tr>
                <td class="text-center"><?= $data['id'] ?></td>
                <td class="text-center"><?= $data['plocation'] ?></td>
                <td class="text-center"><?= $data['timeOfUpload'] ?></td>

                <td class="text-center" >
                    <a class=" text-success d-inline " title="Edit"  href="dashboard-Pperformedat-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square "></i></a>
                </td>

                <?php 

                    }

                 ?>
            </tr>
        </table>    
        </div>
        
<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM pperformedat  ";

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
                            <a class="page-link text-white bg-dark" href="dashboard-Pperformedat.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2pperformedat">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="dashboard-Pperformedat.php?pageNo=<?= $i ?>&msg=apd2pperformedat"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="dashboard-Pperformedat.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2pperformedat">Next</a>
                        </li>

                    <?php
                        } 
                        $conn->close();
                    ?>
            </ul>
        </nav>

    </div>
    
    <?php include "preloader.php"; ?>




    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <script>

        function confirmDelete() {
            return confirm("Are you sure you want to delete this ?");
        }

    </script>

</body>
</html>
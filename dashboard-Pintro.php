<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - portfolio intro list</title>

    
<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <?php include "dashboard-Aside.php"; ?>


    <div class="main">
        <h2 class="text-center"><i class="fa-solid fa-newspaper"></i><div class="d-inline bangers-regular">&nbsp Portfolio intro</div></h2>


                <center>
                <a href="dashboard-Pintro-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new portfolio intro</a>
                </center>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered "   >
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Singer image</th>
                <th class="text-center">Singer name</th>
                <th class="text-center">Singer quaities</th>
                <th class="text-center">Singer details</th>
                <th class="text-center">Upload Time</th>
                <th class="text-center">Actions</th>
            </tr>

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
                $sql="select * from pintro limit ? offset ? ";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

            <tr>
                <td class="text-center"><?= $data['id'] ?></td>
                <td class="text-center"><img src="<?= $data['imageDirectory'] ?>" alt="" width="120px" height="120px"></td>
                <td class="text-center"><?= $data['sName'] ?></td>
                <td class="text-center"><?= $data['sChars'] ?></td>
                <td class="text-center"><div class="toflw"><?= $data['sDetails'] ?></div></td>
                <td class="text-center"><?= $data['timeOfUpload'] ?></td>
                <td class=" text-center" >

                    <a class="  text-success d-inline" title="Edit"  href="dashboard-Pintro-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a class=" text-danger  d-inline "   title="Delete"  onclick="return confirmDelete()"  href="dashboard-Pintro-Delete.php?id=<?= $data['id'] ?>&directory=<?= $data['imageDirectory'] ?>"><i class="fa-solid fa-trash"></i></a>

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
        $sql2 = "SELECT COUNT(*) AS total FROM pintro  ";

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
                            <a class="page-link text-white bg-dark" href="dashboard-Pintro.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2pintro">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="dashboard-Pintro.php?pageNo=<?= $i ?>&msg=apd2pintro"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="dashboard-Pintro.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2pintro">Next</a>
                        </li>

                    <?php
                        } 
                        $conn->close();
                    ?>
            </ul>
        </nav>


    </div>

    <?php include "preloader.php"; ?>



    <!-- Include Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>


    <script type="text/javascript" >
        
        function confirmDelete() {
            return confirm("Are you sure you want to delete this ?");
        }


          document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
              const content = header.nextElementSibling;
              header.classList.toggle('active');
              content.classList.toggle('open');
            });
          });

    </script>

</body>
</html>
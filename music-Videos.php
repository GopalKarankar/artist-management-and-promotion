<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Music videos</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>


		<!-- Releases -->
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

				$category="Releases";

				$sql="select * from music where category=? order by id desc limit ? offset ?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('sii',$category,$limit,$offset);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();
			?>

		<br><br>
		<div class="container pt-5" id="pop">
       
        <h2 class="text-center text-white"> Releases </h2>

		<hr class="bg-white">

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

            <center>
            <a href="dashboard-Music-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Link</a>
            </center>
            <br>
			<?php } ?>

				<div class="row d-flex py-5 justify-content-around " style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

					<?php
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

		$category="Releases";

        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM music where category=?  ";

                $stmt2=$conn->prepare($sql2);

                $stmt2->bind_param('s',$category);

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
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>

		</div>
		
		<!-- Music & Recordings -->
			<?php 
				include "conn.php";

				$category="Music n Recordings";

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

				$sql="select * from music where category=? order by id desc limit ? offset ?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('sii',$category,$limit,$offset);


				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();
			?>
		<br><br>
		<div class="container pt-5" id="pop">
       
        <h2 class="text-center text-white"> Music & Recordings </h2>

		<hr class="bg-white">

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

            <center>
            <a href="dashboard-Music-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Link</a>
            </center>
            <br>

			<?php } ?>

				<div class="row d-flex py-5 justify-content-around " style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

					<?php
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

					$category="Music n Recordings";

        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM music  where category=?  ";

                $stmt2=$conn->prepare($sql2);

                $stmt2->bind_param('s',$category);

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
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>

		</div>






		<!-- Mixing & Mastering -->
			<?php 
				include "conn.php";

				$category="Mixing n Mastering";

				$sql="select * from music  where category=?  order by id desc";

				$stmt=$conn->prepare($sql);

				$stmt->bind_param('s',$category);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();
			?>
		<br><br>
		<div class="container pt-5" id="pop">
       
        <h2 class="text-center text-white"> Mixing & Mastering </h2>

		<hr class="bg-white">

           <?php if (isset($_SESSION['username']))                 
             { 
           ?>

            <center>
            <a href="dashboard-Music-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Link</a>
            </center>
            <br>
			<?php } ?>
			
				<div class="row d-flex py-5 justify-content-around " style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

					<?php
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

				$category="Mixing n Mastering";


        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM music where category=? ";

                $stmt2=$conn->prepare($sql2);

                $stmt2->bind_param('s',$category);

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
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="music-Videos.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        // $conn->close();
                    ?>
            </ul>
        </nav>

		</div>






			<br><br>
			<hr class="bg-white">
			<?php include "footer.php"; ?>

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
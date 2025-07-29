<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Artist hired</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	
	<?php include "dashboard-Aside.php"; ?>

	<div class="main">
		<h2 class="text-center"><i class="fa-solid fa-guitar"></i>&nbsp Artist hired</h2>

	
		<!-- options -->
		<div class="text-center">
			<ul class="list-unstyled">
				
				<a class="text-decoration-none d-inline px-4 py-2 apd <?php if (!empty($_GET['msg'])) { echo $_GET['msg'];	} ?>"  href="dashboard-Hired-All.php?msg=apd2ah">All</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Hired-Approved.php?msg=apd2ah">Approved</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Hired-Disapproved.php?msg=apd2ah">Disapproved</a>

			</ul>			
		</div>



			<?php 
				include "conn.php";

				$id=$_GET['id'];

				$status=$_GET['status'];
				

				$sql="select * from hired where id=?  and  status=?";

				$stmt=$conn->prepare($sql);

				$stmt->bind_param('is',$id,$status);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){

			 ?>




		<div class="container">
			<div class="row d-flex justify-content-around">
			<div class="col-md-3 p-3 m-1" style="border: 1px solid white; border-radius: 10px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">

				<h5 class="">id: <span class="text-success font-italic"><?= $data['id'] ?></span></h5>
				<br>
				<h5 class="">Name: <span class="text-success font-italic"><?= $data['fullName'] ?></span></h5>
				<br>
				<h5 class="">Sender Email: <span class="text-success font-italic"><?= $data['senderEmail'] ?></span></h5>
				<br>
				<h5 class="">Phone Number: <span class="text-success font-italic"><?= $data['phNumber'] ?></span></h5>
				<br>
				<h5 class="">Artist: <span class="text-success font-italic"><?= $data['artist'] ?></span></h5>
				<br>
				<h5 class="">Time Of Sending: <span class="text-success font-italic"><?= $data['timeOfUpload'] ?></span></h5>
				<br>
				<h5 class="">Status: <span class="text-success font-italic"><?= $data['status'] ?></span></h5>
				<br>
				<h5 class="">Actions: <span>
				<br>

				<p class=" text-center" >

					<?php if ($data['status']=="Disapproved"||$data['status']=="pending") {
					?>
						<a class="appr btn text-success d-inline" title="Approve" href="dashboard-Hired-Approved-2.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-thumbs-up"></i></a>				
					<?php
						} 
					?>

					<?php if ($data['status']=="Approved"||$data['status']=="pending") {
					?>

						<a class="btn text-danger  d-inline" title="Disapprove" href="dashboard-Hired-Disapproved-2.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-thumbs-down"></i></a>
					<?php
						} 
					?>

				</p>

				</span></h5>

			</div>

			<div class="col-md-8 m-1 pt-4" style="border: 1px solid white; border-radius: 10px;">
				<h5 class="text-center">Event Details</h5>
				<p class="text-center text-success"><?= $data['details'] ?></p>
			</div>
				

			</div>

		</div>
				<?php 

					}

				 ?>

		</div>
		<!-- Main ends -->
		
		
    <?php include "preloader.php"; ?>


	

<!-- Include Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

	<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="js/script.js"></script>

</body>
</html>
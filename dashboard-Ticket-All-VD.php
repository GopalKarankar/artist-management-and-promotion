<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Tickets</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	
	<?php include "dashboard-Aside.php"; ?>

	<div class="main">
		<h2 class="text-center"><i class="fa-solid fa-ticket"></i>&nbsp Tickets</h2>

	
		<!-- options -->
		<div class="text-center">
			<ul class="list-unstyled">
				
				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Ticket-All.php?msg=apd2dbt">All</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Ticket-Confirmed.php?msg=apd2dbt">Confirmed</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Ticket-Unconfirmed.php?msg=apd2dbt">Unconfirmed</a>

			</ul>			
		</div>



			<?php 
				include "conn.php";

				$id=$_GET['id'];

				$status=$_GET['status'];
				

				$sql="select * from ticket where id=?  and  status=?";

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

				<h5 class="">Id: <span class="text-success font-italic"><?= $data['id'] ?></span></h5>
				<br>
				<h5 class="">Event Id: <span class="text-success font-italic"><?= $data['eventID'] ?></span></h5>
				<br>
				<h5 class="">Name: <span class="text-success font-italic"><?= $data['fullName'] ?></span></h5>
				<br>
				<h5 class="">Sender Email: <span class="text-success font-italic"><?= $data['senderEmail'] ?></span></h5>
				<br>
				<h5 class="">Phone Number: <span class="text-success font-italic"><?= $data['phNumber'] ?></span></h5>
				<br>
				<h5 class="">Time Of Sending: <span class="text-success font-italic"><?= $data['timeOfUpload'] ?></span></h5>
				<br>
				<h5 class="">Status: <span class="text-success font-italic"><?= $data['status'] ?></span></h5>
				<br>
				<h5 class="">Actions: <span>
				<br>

				<p class=" text-center" >

					<?php if ($data['status']=="Unconfirmed"||$data['status']=="pending") {
					?>
						<a class="appr btn text-success d-inline" title="Confirm" href="dashboard-Ticket-Confirmed-2.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-thumbs-up"></i></a>				
					<?php
						} 
					?>

					<?php if ($data['status']=="Confirmed"||$data['status']=="pending") {
					?>

						<a class="btn text-danger  d-inline" title="Unconfirm" href="dashboard-Ticket-Unconfirmed-2.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-thumbs-down"></i></a>
					<?php
						} 
					?>

				</p>

				</span></h5>

			</div>

			<div class="col-md-8 m-1 pt-4" style="border: 1px solid white; border-radius: 10px;">
				<h5 class="text-center">Address</h5>
				<p class="text-center text-success"><?= $data['address'] ?></p>
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
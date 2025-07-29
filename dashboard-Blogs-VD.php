<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Blogs post</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	
	<?php include "dashboard-Aside.php"; ?>

	<div class="main">
		<h2 class="text-center"><i class="fa-solid fa-newspaper"></i>&nbsp Blogs</h2>


			<?php 
				include "conn.php";

				$id=$_GET['id'];				

				$sql="select * from blogs where id=? ";

				$stmt=$conn->prepare($sql);

				$stmt->bind_param('i',$id);

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
					<h5 class="">Title: <span class="text-success font-italic"><?= $data['bTitle'] ?></span></h5>

					<br>
					<h5 class="">Category: <span class="text-success font-italic"><?= $data['bCategory'] ?></span></h5>

					<br>
					<h5 class="">Time Of Sending: <span class="text-success font-italic"><?= $data['timeOfUpload'] ?></span></h5>
					

				</div>

				<div class="col-md-8 m-1 pt-4" style="border: 1px solid white; border-radius: 10px;">
					<h5 class="text-center">Post</h5>
					<p class="text-center text-success"><?= $data['bPost'] ?></p>
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
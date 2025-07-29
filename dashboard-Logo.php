<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - website Logo</title>

	
<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">


</head>
<body>
	
	<?php include "dashboard-Aside.php"; ?>


	<div class="main">
		
				<h2 class="text-center"><i class="fas fa-globe"></i><div class="d-inline bangers-regular">&nbsp Dashboard - logo</div></h2>

		<!-- Table -->
		<div class="table-responsive">
			<table class="table table-bordered "   >
			<tr>
				<th class="text-center">Logo</th>
				<th class="text-center">Time of Updating</th>
				<th class="text-center">Actions</th>
			</tr>

			<?php 
				include "conn.php";

				$sql="select * from logo order by id desc";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){


			 ?>

			<tr>
				<td class="text-center"><img src="<?= $data['imageDirectory'] ?>" style=" width: 200px; height: 200px; "  alt="" ></td>

				<td class="text-center"><?= $data['timeOfUpload'] ?></td>

				<td class=" text-center" >
					<a class="  text-success d-inline" title="Edit" href="dashboard-Logo-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
				</td>


				<?php 

					}

				 ?>
			</tr>
		</table>	
		</div>

	</div>

    <?php include "preloader.php"; ?>


	<!-- Include Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

	<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="js/script.js"></script>


</body>
</html>
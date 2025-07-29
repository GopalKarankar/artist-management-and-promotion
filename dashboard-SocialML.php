<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Social media links</title>

	
<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">


	 <link rel="stylesheet" href="css/style.css">


</head>
<body>
	
	<?php include "dashboard-Aside.php"; ?>


	<div class="main">
		
				<h2 class="text-center"><i class="fa-solid fa-link"></i><div class="d-inline bangers-regular">&nbsp Social media links</div></h2>

				<center>
				<a href="dashboard-SocialML-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new link</a>
				</center>

		<!-- Table -->
		<div class="table-responsive">
			<table class="table table-bordered "   >
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">platform</th>
				<th class="text-center">Logo</th>
				<th class="text-center">link</th>
				<!-- <th class="text-center">Visibilit status</th> -->
				<th class="text-center">Upload Time</th>
				<th class="text-center">Status</th>
				<th class="text-center">Actions</th>
			</tr>

			<?php 
				include "conn.php";

				$sql="select * from social order by id desc";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){


			 ?>

			<tr>
				<td class="text-center"><?= $data['id'] ?></td>
				<td class="text-center"><?= $data['platform'] ?></td>
				<td class="text-center"><?= $data['logo'] ?></td>
				<td class="text-center"><?= $data['link'] ?></td>
				<!-- <td class="text-center"><?= $data['status'] ?></td> -->
				<td class="text-center"><?= $data['timeOfUpload'] ?></td>
				<td class="text-center">
					<?php if ($data['status']=="show") {
					?>
						<a class="appr btn text-success d-inline" title="Shown" href="dashboard-Socialml-Hide.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-eye"></i></a>

					<?php
					} ?>

					<?php if ($data['status']=="hide") {
					?>
						<a class="appr btn text-danger d-inline" title="Hidden" href="dashboard-Socialml-Show.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-eye-slash"></i></a>

					<?php
					} ?>

				
				</td>
				<td class=" text-center" >

					<a class="  text-success d-inline" title="Edit"  href="dashboard-SocialML-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

					<a class=" text-danger  d-inline "  title="Delete"  onclick="return confirmDelete()"  href="dashboard-SocialML-Delete.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-trash"></i></a>

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

	<script type="text/javascript" >
		
		function confirmDelete() {
			return confirm("Are you sure you want to delete this ?");
		}

	</script>


</body>
</html>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Core social media logos</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	<?php include "dashboard-Aside.php"; ?>

	<div class="main">
		<h2 class="text-center"><i class="fa-solid fa-circle-notch"></i><div class="d-inline bangers-regular">&nbsp Core social media logos</div></h2>

		<center>
		<a href="dashboard-Coresocial-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new logo</a>
		</center>

		<!-- Table -->
		<div class="table-responsive">
			<table class="table table-bordered "   >
			<tr>
				<th class="text-center">Logo</th>
				<!-- <th class="text-center">size</th> -->
				<th class="text-center">Actions</th>
			</tr>

			<?php 
				include "conn.php";

				$sql="select * from coresocial order by id desc";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){


			 ?>

			<tr>
				<td class="text-center"><?= $data['logo'] ?></td>
				<!-- <td class="text-center"><?= $data['size'] ?></td> -->

				<td class="text-center" >
					<a class=" text-success d-inline " title="Edit"  href="dashboard-Coresocial-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square "></i></a>
					<a class=" text-danger  d-inline border-white"   title="Delete"  onclick="return confirmDelete()"   href="dashboard-Coresocial-Delete.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-trash"></i></a>
				</td>

				<?php 

					}

				 ?>
			</tr>
		</table>	
		</div>
		
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
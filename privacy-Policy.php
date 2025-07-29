<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Privacy policy - page</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>

	<div class="container " style="position: absolute; top: 140px; ">



			<h1 class="text-white text-center"><i class="fas fa-shield-alt"></i>&nbspPrivacy policy</h1>
			<br>

			<?php 
				include "conn.php";

				$sql="select * from pp";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){


			 ?>

			 <div class="pp bg-dark p-4" style="position: relative;">

				<p class="h5"><?= $data['pp'] ?></p>	


               <?php if (isset($_SESSION['username'])) 	               
                 { 
               ?>

		        <!-- Edit icon -->
		        <div class="pp-edit">
		           <a href="dashboard-PP-Edit.php?id=<?= $data['id'] ?>">
		                <i class="fa-solid fa-square-pen text-success fa-2x"></i>
		           </a> 
		        </div>

				<?php } ?>				 	
			 </div>
			
			<?php 
				}
			 ?>	


			<br>
			<br>

			<center>
				<a href="index.php" class="btn border-white text-white text-align ">Go back</a>
			</center>

<br><br>
<hr class="bg-white">
	<?php include "footer.php"; ?>
			
	</div>

	<?php include "preloader.php"; ?>

	<?php include "resp-nav.php"; ?>

		



<!-- Include Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

	<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="js/script.js"></script>



</body>
</html>
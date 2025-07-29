<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add logo</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>

	<div class="container pt-5" id="book-an-show" >

		<div class="row border-bottom border-white ">
			<div class="col-md-12">


				<h2 class="text-center">Add new logo</h2>

		        <form action="dashboard-Coresocial-Add-2.php" method="post" class="my-4">

		            <div class="mb-3">
		                <label for="logo" class="form-label">
		                	Enter logo svg code from font awesome website &nbsp
		                	(<a target="_blank" href="https://fontawesome.com/icons">Click here to Search</a>)
		                </label>
		                <input type="text" class="form-control" id="logo" placeholder="Enter Logo svg code from font awesome website" name="logo" required>
		            </div>

		            <center><button type="submit" class="btn text-white border-white" style="background-color: #000000; border-width: 2px;" name="bs">Submit</button></center>

		        </form>

			</div>
		</div>		
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
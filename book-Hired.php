<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book an artist</title>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>

	<div class="container pt-5" id="book-an-artist" >

		<div class="row border-bottom border-white ">
			<div class="col-md-12">

				<h2 class="text-center">Book an artist</h2>

		        <form action="book-Hired-Upload.php" method="post" class="my-4">
			<?php 
				include "conn.php";

				$sql="select * from intro order by id desc";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

			 ?>

				<br>
			 	<center>
		            <div class="mb-3">
		                <label for="artist" class="form-label">Choose artist</label>
		                <select class="form-select" id="artist" name="artist" required>
		                    <option selected disabled>None</option>
			<?php 

				// Fetch data
				while($data=$result->fetch_assoc()){

			 ?>
		                    <option value="<?= $data['name'] ?>"><?= $data['name'] ?></option>
			<?php 
			}
			 ?>
		                </select>
		            </div>
			</center>


		            <div class="mb-3">
		                <label for="name" class="form-label">Your Name</label>
		                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="fullName" required>
		            </div>

		            <div class="mb-3">
		                <label for="email" class="form-label">Email Address</label>
		                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="senderEmail" required>
		            </div>

		            <div class="mb-3">
		                <label for="phone" class="form-label">Phone Number</label>
		                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phNumber" required>
		            </div>

		            <div class="mb-3">
		                <label for="message" class="form-label">Message</label>
		                <textarea class="form-control" id="message" rows="4" placeholder="Enter any additional details" name="details" required></textarea>
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
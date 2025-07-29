<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Ticket</title>


	<style>		
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

	</style>


<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>




		<div class="row border-bottom border-white ">
			<div class="col-md-12">

				<h2 class="text-center">Book a ticket</h2>

			    <hr class="bg-white">

		        <form action="book-Ticket-Upload.php" method="post" class="my-4">

                    <br>
                    <center>
                        <div class="mb-3">

                            <h2 for="eventID" class="form-label">Event ID : <?php if (!empty($_GET['eventID'])) {
                                 echo $_GET['eventID'];
                            } else {
                                echo "<p class='text-danger'>You haven't chosen any event.</p>";
                            }

                             ?></h2>

                             <input type="hidden" name="eventID" value="<?= $_GET['eventID'] ?>">

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
		                <label for="address" class="form-label">address</label>
		                <textarea class="form-control" id="address" rows="4" placeholder="Enter address" name="address" required></textarea>
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

    <script>
        
        function confirmDelete() {
            return confirm("Are you sure you want to delete this ?");
        }

    </script>


</body>
</html>
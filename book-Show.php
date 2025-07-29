<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book an event</title>


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

	<div class="container pt-5" id="book-an-show" >

        <br><br><br>
        <center>
        <a href="#bat" class="btn text-white bg-info text-center border-white p-2 m-3  text-decoration-none">Book an Event</a>
        </center>
        <br>


        <hr class="bg-white">

        <br><br>
        <div class="row d-flex justify-content-around">
            
            <section class="p-5 text-white" id="upcoming-events"  style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">


                <center>
                    <h2 class="text-center mb-4"><i class="fa-solid fa-calendar"></i> Upcoming Events</h2>                    
                </center>

        <center>
        <a href="dashboard-Upcoming-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new Upcoming event</a>
        </center>
        <br>

            <?php 
                include "conn.php";


                $sql="select * from upcoming order by id desc";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();
            ?>


                <div class="row d-flex justify-content-center">

                    <?php
                        // Fetch data
                        while($data=$result->fetch_assoc()){
                    ?>

                      <!-- Event Item -->
                      <div class="col-auto mb-4">
                        <div class="card bg-secondary text-white">
                          <div class="card-body"  style="background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">

                            <h5 class="card-title" id="event1">Event ID: <?= $data['id'] ?></h5>
                            <br>

                            <p class="card-text ">
                              <strong><i class="fa-solid fa-location-dot text-white"></i> &nbsp</strong> <span id="address1"><?= $data['address'] ?></span>
                              <br><br>
                              <strong><i class="fa-solid fa-calendar-days text-white"></i> &nbsp</strong> <span id="eventDate1"><?= $data['eventDate'] ?></span>
                              <br><br>
                              <strong><i class="fa-solid fa-clock text-white"></i> &nbsp</strong> <span id="eventTime1"><?= $data['eventTime'] ?></span>
                              <br>

                                <center>
                                <a href="book-Ticket.php?eventID=<?= $data['id'] ?>" class="btn text-white bg-primary border-white p-2 m-3  text-decoration-none">Book ticket</a>
                                </center>
                                

                              <small class="">Uploaded: <span id="timeOfUpload1"><?= $data['timeOfUpload'] ?></span></small>
                            </p>


                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>
         
                            <!-- Edit icon -->
                            <div class="events-edit">
                               <a href="dashboard-Upcoming-Edit.php?id=<?= $data['id'] ?>">
                                    <i class="fa-solid fa-square-pen "></i>
                               </a> 
                            </div>
         
                            <!-- Delete icon -->
                            <div class="events-delete" onclick="return confirmDelete()">
                               <a href="dashboard-Upcoming-Delete.php?id=<?= $data['id'] ?>">
                                    <i class="fa-solid fa-trash "></i>
                               </a> 
                            </div>
                    <?php } ?>

                          </div>
                        </div>
                      </div>
              
                <?php
                    }
                 ?>

            </section>

        </div>
        <br><br>


<hr class="bg-white">

        <center>
            <h2 class="text-center mb-4"><i class="fa-solid fa-guitar"></i> Past Events</h2>                    
        </center>

        <center>
        <a href="dashboard-Event-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new event pic</a>
        </center>
        <br>

        <div class="row d-flex justify-content-around py-5" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">


            <?php 
                include "conn.php";

                $limit = 6; // Number of records per pageNo


                // Get the current pageNo number from the URL, default to 1 if not set
                if (isset($_GET['pageNo'])) {
                    $pageNo=$_GET['pageNo'];
                } else {
                    $pageNo=1;
                }


                // if pageNo is less than 1
                if ($pageNo < 1){
                    $pageNo = 1;
                } 


                // Calculate offset
                $offset = ($pageNo - 1) * $limit;

                $sql="select * from events limit ? offset ? ";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('ii',$limit,$offset);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                <div class="events col-auto mb-4">

                    <img src="<?= $data['imageDirectory'] ?>" style=" width: 200px; height:200px; " class="profile-img mx-auto" alt="Past Event 2">

 
                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                    <!-- Edit icon -->
                    <div class="events-edit">
                       <a href="dashboard-Event-Edit.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-square-pen text-success"></i>
                       </a> 
                    </div>
 
                    <!-- Delete icon -->
                    <div class="events-delete" onclick="return confirmDelete()">
                       <a href="dashboard-Event-Delete.php?id=<?= $data['id'] ?>">
                            <i class="fa-solid fa-trash text-danger"></i>
                       </a> 
                    </div>
                <?php } ?>
                
                </div>

                <?php 

                    }

                 ?>

        </div>

<!-- (Pagination) -->
<?php  
        // Get total records count
        $sql2 = "SELECT COUNT(*) AS total FROM events  ";

                $stmt2=$conn->prepare($sql2);

                // $stmt2->bind_param('s',$status);

                $stmt2->execute();

                $total_records_result=$stmt2->get_result();

        // Fetch the total number of records from the database query result
        $total_records_row = $total_records_result->fetch_assoc(); 

        // Extract the 'total' value from the associative array
        $total_records = $total_records_row['total']; 


        $total_pages = ceil($total_records / $limit);

?>

        <!-- (Pagination links) -->
        <br>
        <nav class=" d-flex justify-content-center">
            <ul class="pagination" >

                    <!-- Previous -->
                    <?php if ($pageNo > 1) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="event-N-Booking.php?pageNo=<?= $pageNo - 1 ?>&msg=apd2evnts">Previous</a>
                        </li>

                    <?php
                    } ?>


                    <!-- All page numbers -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                        <li class="page-item <?php if ($i==$pageNo) { echo "active";} ?>">
                            <a class="page-link text-white bg-dark" href="event-N-Booking.php?pageNo=<?= $i ?>&msg=apd2evnts"><?= $i ?></a>
                        </li>
                    <?php
                        } 
                    ?>


                    <!-- Next -->
                    <?php if ($pageNo < $total_pages) {
                    ?>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark" href="event-N-Booking.php?pageNo=<?= $pageNo + 1 ?>&msg=apd2evnts">Next</a>
                        </li>

                    <?php
                        } 
                        $conn->close();
                    ?>
            </ul>
        </nav>



<hr class="bg-white" id="bat">

		<div class="row border-bottom border-white ">
			<div class="col-md-12" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

				<h2 class="text-center">Book an event</h2>

		        <form action="book-Show-Upload.php" method="post" class="my-4">


                    <br>
                    <center>
                    <div class="mb-3">
                        <label for="event" class="form-label">Event Type</label>
                        <select class="form-select" id="event" name="eventType" required>
                            <option selected disabled>None</option>
                            <option value="concert">Concert</option>
                            <option value="wedding">Wedding</option>
                            <option value="corporate">Corporate Event</option>
                            <option value="private">Private Party</option>
                            <option value="other">Other</option>
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

    <script>
        
        function confirmDelete() {
            return confirm("Are you sure you want to delete this ?");
        }

    </script>


</body>
</html>
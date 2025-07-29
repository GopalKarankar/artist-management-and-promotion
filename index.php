<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the latest music, videos, and events of [Midwave productions]. Stay updated with new releases and exclusive content.">
    <meta name="keywords" content="music, band, artist, digital promotion, latest songs, live performances, concerts, new album, music videos, streaming">
    <meta name="author" content="Midwave productions">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (for Social Media) -->
    <meta property="og:title" content="[Midwave productions] - Official Website">
    <meta property="og:description" content="Check out the latest music, videos, and events from [Midwave productions]. Join the community and stay updated.">
    <meta property="og:image" content="https://www.example.com/artist-image.jpg">
    <meta property="og:url" content="https://www.example.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="[Midwave productions] - Official Website">
    <meta name="twitter:description" content="Listen to the latest music, watch new videos, and follow [Midwave productions] for updates.">
    <meta name="twitter:image" content="https://www.example.com/artist-image.jpg">
    <meta name="twitter:site" content="@YourTwitterHandle">

	<link rel="icon" type="image/png" href="image/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="image/favicon/favicon.svg" />
	<link rel="shortcut icon" href="image/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="midwave" />
	<link rel="manifest" href="image/favicon/site.webmanifest" />

    <!-- Schema Markup for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MusicGroup",
      "name": "[Midwave productions]",
      "url": "https://www.example.com",
      "image": "https://www.example.com/artist-image.jpg",
      "description": "Discover the latest music, videos, and events of [Midwave productions].",
      "sameAs": [
        "https://www.facebook.com/artist",
        "https://www.instagram.com/artist",
        "https://www.twitter.com/artist",
        "https://www.youtube.com/artist"
      ]
    }
    </script>

<!-- css links -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

	 <link rel="stylesheet" href="css/style.css">

</head>
<body>


	<!-- header -->
	<?php include "header.php"; ?>

		<!-- first container -->
		<div class="container p-5" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
			<div class="row">

				<!-- first column -->
				<div class="col-md-8">

					<!-- first row -->
					<div class="tt row d-flex justify-content-center">
						<div class="image-container">

<?php 
            include "conn.php";

            $sql="select * from index1";

            $stmt=$conn->prepare($sql);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

            // Fetch data
            while($data=$result->fetch_assoc()){

?>
						        <img src="<?= $data['imageDirectory'] ?>" alt="Oval Image" class="oval-image">
						        <!-- <h5>Watch <br>  showreel</h5> -->


               

               <?php if (isset($_SESSION['username'])) 
               
                 { 

               ?>

                 <!-- Edit icon -->
                 <div class="idx1-edit">
                    <a href="dashboard-Index1-Edit.php?id=<?= $data['id'] ?>">
                         <i class="fa-solid fa-square-pen text-success fa-2x"></i>
                    </a> 
                 </div>
               
               <?php 
                  }
                ?>


<?php 
	} 
?>					    

							</div>	
					</div>

					<!-- second row -->
				    <div class="row">

				    	<!-- first column -->
				    	<div class="col-8 d-flex justify-content-center border-bottom border-white pb-4">
					    	<p class="font-weight-bold">Artist &nbsp &nbsp  run &nbsp &nbsp —  &nbsp &nbsp   music   &nbsp &nbsp  video, film, 
				    		<br>  production.</p>
		    		  	</div>

				    	<!-- second column -->
				    	<div class="col-2 border-bottom border-white pb-4">
				    		<p class="font-weight-bold" style="font-size: 20px;">V#00<span class="text-danger d-inline">1</span></p>
				    	</div>

				    </div>	


					<!-- third row -->
				    <div class=" row" style="position: relative;">

				    	<!-- first column -->
				    	<div class="tt col-10 d-flex justify-content-center border-bottom border-white pb-4">
					    	<p class=" display-4 bangers-regular" id="typing-text"></p>


						<?php 
							include "conn.php";

							$sql="select * from typing";

							$stmt=$conn->prepare($sql);

							$stmt->execute();

							// Get result 
							$result=$stmt->get_result();

							// Fetch data
							while($data=$result->fetch_assoc()){


						 ?>

					<?php if (isset($_SESSION['username'])) 				
						{ 
		               ?>
					        <!-- Edit icon -->
					        <div class="tt-edit">
					           <a href="dashboard-Typing-Edit.php?id=<?= $data['id'] ?>">
					                <i class="fa-solid fa-square-pen text-success fa-2x"></i>
					           </a> 
					        </div>
					 <?php 
	                  }
	                ?>
						
						<?php 
							}
						 ?>					    		
				    	
				    	</div>

				    	<!-- second column -->
				    	<div class=" custom-oval col-2  pb-4">
				    		<h5 class="mt-4 font-weight-bold">↓</h5>
				    	</div>

				    </div>	

    			</div><!-- First column ends -->


				<!-- Second column -->
				<div class="col-md-4" >

					<div class="row">
						<p style="font-size: 35px;">SITE MAP <span class="text-danger"><b>↓</b></span></p>
					</div>

					<!-- "About us" -->
					<br>
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="intro.php">
										<p class="text-hover" style="font-size: 22.3px;">ABOUT US</p>		
									</a>
								</div>

								<div class="col-2">
									<a href="intro.php">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>

					<!-- "Services" -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="services.php">
										<p class="text-hover" style="font-size: 22.3px;">SERVICES</p>		
									</a>
								</div>

								<div class="col-2">
									<a href="services.php">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>



					<!-- "Blogs" -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="blogs.php">
										<p class="text-hover" style="font-size: 22.3px;">BLOGS</p>		
									</a>
								</div>

								<div class="col-2">
									<a href="blogs.php">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>



					<!-- "MV" row -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="Music-Videos.php">
										<p class="text-hover" style="font-size: 22.3px;">MUSIC VIDEOS</p>					
									</a>
								</div>

								<div class="col-2">
									<a href="Music-Videos.php">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>

				
					<!-- Artists n bookings -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
																
							</div>

							<div class="row ">

								<div class="col-10">
									<a href="artists-N-Booking.php">
										<p class="text-hover" style="font-size: 22.3px;">ARTISTS N BOOKINGS</p>
									</a>
								</div>

								<div class="col-2">
									<a href="#book-an-show">									
										<img src="image/sm2.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>	
								</div>	

							</div>

						</div>
					</div>
					


				
					<!-- Event n bookings -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
																
							</div>

							<div class="row ">

								<div class="col-10">
									<a href="book-Show.php">
										<p class="text-hover" style="font-size: 22.3px;">EVENT N BOOKINGS</p>
									</a>
								</div>

								<div class="col-2">
									<a href="#book-an-show">									
										<img src="image/sm2.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>	
								</div>	

							</div>

						</div>
					</div>
					



				
					<!-- Promote songs -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
																
							</div>

							<div class="row ">

								<div class="col-10">
									<a href="promote.php">
										<p class="text-hover" style="font-size: 22.3px;">PROMOTE SONGS</p>
									</a>
								</div>

								<div class="col-2">
									<a href="#book-an-show">									
										<img src="image/sm2.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>	
								</div>	

							</div>

						</div>
					</div>
					



					<!-- "Contact us" -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="contact-Us-Add.php">
										<p class="text-hover" style="font-size: 22.3px;">CONTACT US</p>		
									</a>
								</div>

								<div class="col-2">
									<a href="contact-Us.php">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>				




					<?php if (isset($_SESSION['username'])) 
					
					  { 

				  	?>

					<!-- "Dashboard" -->
					<div class="row">
						<div class="col">
							
							<div class="row" style=" border-bottom:0.5px solid #858585;">
								
							</div>

							<div class="row ">


								<div class="col-10">
									<a href="dashboard-Hired-All.php?msg=apd2ah">
										<p class="text-hover" style="font-size: 22.3px;">DASHBOARD</p>		
									</a>
								</div>

								<div class="col-2">
									<a href="dashboard-Book-All.php?msg=apd2dba">
										<img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
									</a>
								</div>	

							</div>

						</div>
					</div>				


					<?php 

						} 
					?>





				</div><!-- Second column ends -->

			</div><!-- row ends -->
		</div><!-- First container -->
		</div>



		<!-- SHOW REEL container -->
		<br><br>
		<div class="container"  style="background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
			<div class="tt row">
				<div class="col-md-12">
						<!-- <center><h3 class="d-inline font-weight-bold">WATCH  SHOWREEL</h3></center> -->
						<!-- <br> -->

<?php 
            include "conn.php";

            $sql="select * from index2";

            $stmt=$conn->prepare($sql);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

            // Fetch data
            while($data=$result->fetch_assoc()){

?>

						<center><img class="pill-image " src="<?= $data['imageDirectory'] ?>" height="492" alt=""></center>


               <?php if (isset($_SESSION['username'])) 
               
                 { 

               ?>

                 <!-- Edit icon -->
                 <div class="tt-edit">
                    <a href="dashboard-Index2-Edit.php?id=<?= $data['id'] ?>">
                         <i class="fa-solid fa-square-pen text-success fa-2x"></i>
                    </a> 
                 </div>
               
               <?php 
                  }
                ?>
               


<?php

   }

?>

						<br>
						<center><h3 class="font-weight-bold">#2025</h3></center>
				</div>
			</div>		
		</div>
		<br>


		<!-- CALL TO ACTIONS container -->

    <!-- Hero Section -->
        <div class="hero-overlay" style="background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
			<br>
        	<div class="hero-overlay-2">
	            <h4 class="bangers-regular"> Your One-Stop Solution for Music, Events, and Talent Management</h4>
	            <a href="services.php" class="btn btn-dark border-white mt-3">Explore Our Services</a>
        	</div>
	    <br>
        </div>
    		<br>




    
    <!-- Services -->

    <!-- Call-to-Action -->
    <section class="text-center py-5" style="background: linear-gradient(135deg, #000000 0%, #1a1a1a 40%, #ff004f 100%);">
	<br><br>
        <h2 class="bangers-regular text-white "><i class="fas fa-handshake"></i> Ready to Collaborate?</h2>
        <a href="contact-Us-Add.php" class="btn btn-dark text-white border-white">Book a Consultation Now</a>
	<br>
	<br>    
    </section>



		<!-- BRANDS WE HAVE WORKED WITH container -->
		<br><br>
		<div class="container" style="background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);">
			<div class="row  pt-5 pb-5  ">
				<div class="col-md-12">
						<center><h4 class="d-inline font-weight-bold">BRANDS - we have worked with</h4></center>
						<br>
						<div class="col-md-12">

        <center>
        <a href="dashboard-Brands-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new pic</a>
        </center>
        <br>

                            <!-- First row -->
							<div class="row">
							


								<div class="col-12">
									<div class="row d-flex justify-content-around">

											<?php 

									include "conn.php";

					                $sql="select * from brands ";

					                $stmt=$conn->prepare($sql);

					                $stmt->execute();

					                // Get result 
					                $result=$stmt->get_result();

					                // Fetch data
					                while($data=$result->fetch_assoc()){


								 ?>
								 	<div class="brandEDT" style="position: relative; ">

										<img src="<?= $data['imageDirectory'] ?>" class="m-3" style="width: 180px; height: 180px; display: block;" alt="">	
               
					               <?php if (isset($_SESSION['username'])) 
					               
					                 { 

					               ?>
								        <!-- Edit icon -->
								        <div class="brandEDT-edit">
								           <a href="dashboard-Brands-Edit.php?id=<?= $data['id'] ?>">
								                <i class="fa-solid fa-square-pen text-success"></i>
								           </a> 
								        </div>

								        <div class="brandEDT-delete" onclick="return confirmDelete()">
								           <a href="dashboard-Brands-Delete.php?id=<?= $data['id'] ?>">
								                <i class="fa-solid fa-trash text-danger"></i>
								           </a> 
								        </div>
									
									<?php 
										} 
									?> 		
								 	
								 	</div>

								<?php 
									} 

									$stmt->close();
								?>
									</div>
								</div>

							</div>

                                                  
						</div>
				</div>
			</div>		
		</div>
		
		

		<!-- FOOTER 1 container -->
		<br><br>
		<div class="container">
			<div class="row  pt-4 pb-4 d-flex justify-content-around " style="border: 1px solid white; border-radius: 80px;">
				
				<!-- Music-videos column -->
				<div class="col-sm-2">

					<!-- first row -->
					<a href="music-Videos.php">
					<div class="row">
						<div class="col pt-4 pb-4 mx-3" style="border: 1px solid white; border-radius: 80px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
						
							<center><h5 class="d-inline font-weight-bold">MUSIC VIDEOS</h5></center>
							<br>
							<center><p class="d-inline font-italic " style="font-size: 10.72px; color: #858585;">SHOWCASE AND ARCHIVE</p></center>
							<br>
							<center><h5 class="d-inline font-weight-bold text-danger pt-2 pb-2 px-2" style="border: 0.5px solid white; border-radius: 80px;">↗</h5></center>
								
						</div>
					</div>
					</a>
					
					<!-- second row -->
					<div class="row" style="border: 1px solid white; border-radius: 50%; width: 58px; height: 58px;">
						<div class="col">
									<h5 class="d-inline"><span style="font-size: 8.57px; ">No.</span> <span class="display-6 text-danger">1</span></h5>			
						</div>
					</div>

				</div>


				
				<!-- Blogs column -->
				<div class="col-sm-2">

					<!-- first row -->
					<a href="blogs.php">
					<div class="row">
						<div class="col pt-4 pb-4 mx-3" style="border: 1px solid white; border-radius: 80px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
						
							<center><h5 class="d-inline font-weight-bold">BLOGS</h5></center>
							<br>
							<center><p class="d-inline font-italic " style="font-size: 10.72px; color: #858585;">SHOWCASE AND ARCHIVE</p></center>
							<br>
							<center><h5 class="d-inline font-weight-bold text-danger pt-2 pb-2 px-2" style="border: 0.5px solid white; border-radius: 80px;">↗</h5></center>
								
						</div>
					</div>
					</a>

					<!-- second row -->
					<div class="row" style="border: 1px solid white; border-radius: 50%; width: 58px; height: 58px;">
						<div class="col">
									<h5 class="d-inline"><span style="font-size: 8.57px; ">No.</span> <span class="display-6 text-danger">2</span></h5>			
						</div>
					</div>

				</div>


				
				<!-- Services column -->
				<div class="col-sm-2">

					<!-- first row -->
					<a href="intro.php">
					<div class="row">
						<div class="col pt-4 pb-4 mx-3" style="border: 1px solid white; border-radius: 80px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
						
							<center><h5 class="d-inline font-weight-bold " style="">ABOUT US</h5></center>
							<br>
							<center><p class="d-inline font-italic " style="font-size: 10.72px; color: #858585;">SHOWCASE AND ARCHIVE</p></center>
							<br>
							<center><h5 class="d-inline font-weight-bold text-danger pt-2 pb-2 px-2" style="border: 0.5px solid white; border-radius: 80px;">↗</h5></center>
								
						</div>
					</div>
					</a>
					
					<!-- second row -->
					<div class="row" style="border: 1px solid white; border-radius: 50%; width: 58px; height: 58px;">
						<div class="col">
									<h5 class="d-inline"><span style="font-size: 8.57px; ">No.</span> <span class="display-6 text-danger">3</span></h5>			
						</div>
					</div>

				</div>


				
				<!-- Services column -->
				<div class="col-sm-2">

					<!-- first row -->
					<a href="services.php">
					<div class="row">
						<div class="col pt-4 pb-4 mx-3" style="border: 1px solid white; border-radius: 80px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
						
							<center><h5 class="d-inline font-weight-bold">SERVICES</h5></center>
							<br>
							<center><p class="d-inline font-italic " style="font-size: 10.72px; color: #858585;">SHOWCASE AND ARCHIVE</p></center>
							<br>
							<center><h5 class="d-inline font-weight-bold text-danger pt-2 pb-2 px-2" style="border: 0.5px solid white; border-radius: 80px;">↗</h5></center>
								
						</div>
					</div>
					</a>
					
					<!-- second row -->
					<div class="row" style="border: 1px solid white; border-radius: 50%; width: 58px; height: 58px;">
						<div class="col">
									<h5 class="d-inline"><span style="font-size: 8.57px; ">No.</span> <span class="display-6 text-danger">4</span></h5>			
						</div>
					</div>

				</div>


				
				<!-- Contact us column -->
				<div class="col-sm-2">

					<!-- first row -->
					<a href="contact-Us-Add.php">
					<div class="row">
						<div class="col pt-4 pb-4 mx-3" style="border: 1px solid white; border-radius: 80px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
						
							<center><h5 class="d-inline font-weight-bold">CONTACT US</h5></center>
							<br>
							<center><p class="d-inline font-italic " style="font-size: 10.72px; color: #858585;">SHOWCASE AND ARCHIVE</p></center>
							<br>
							<center><h5 class="d-inline font-weight-bold text-danger pt-2 pb-2 px-2" style="border: 0.5px solid white; border-radius: 80px;">↗</h5></center>
								
						</div>
					</div>
					</a>
					
					<!-- second row -->
					<div class="row" style="border: 1px solid white; border-radius: 50%; width: 58px; height: 58px;">
						<div class="col">
									<h5 class="d-inline"><span style="font-size: 8.57px; ">No.</span> <span class="display-6 text-danger">5</span></h5>			
						</div>
					</div>

				</div>


			</div>		
		</div>


		<!-- FOOTER 2 container -->
		<br><br>
		<div class="container">
			<div class="row  pt-3 pb-3  " style=" border-radius: 80px; border: 0.5px solid white; ">
				<div class="col-md-12">
						<div class="row">

							<div class="col-md-6 d-flex justify-content-center" style="place-items: center;">
								<p class="d-inline text-center display-4 bangers-regular">Midwave productions & Studios</p>
							</div>

							<?php 
								include "conn.php";

								$sql="select * from mps";

								$stmt=$conn->prepare($sql);

								$stmt->execute();

								// Get result 
								$result=$stmt->get_result();

								// Fetch data
								while($data=$result->fetch_assoc()){


							 ?>

								<div class="col-md-4 d-flex justify-content-center border-right border-left border-white ">
									<p class="d-inline"><?= $data['mps'] ?></p>
								
									<?php if (isset($_SESSION['username'])) 				
										{ 
						               ?>
									        <!-- Edit icon -->
									        <div class="tt-edit">
									           <a href="dashboard-MPS-Edit.php?id=<?= $data['id'] ?>">
									                <i class="fa-solid fa-square-pen text-success fa-2x"></i>
									           </a> 
									        </div>

									 <?php 
					                  }
					                ?>

								</div>

							<?php } ?>



					<?php 
					            include "conn.php";

					            $sql="select * from mpsimage";

					            $stmt=$conn->prepare($sql);

					            $stmt->execute();

					            // Get result 
					            $result=$stmt->get_result();


					?>


						<div class="col-md-2 d-flex justify-content-center" style="place-items: center;">

							<?php 

					            // Fetch data
					            while($data=$result->fetch_assoc()){

							 ?>
								<img src="<?= $data['imageDirectory'] ?>" style="width: 120px; height: 120px; " alt="">

								
						               <?php if (isset($_SESSION['username'])) 
 						                 { 
						               ?>

						                 <!-- Edit icon -->
						                 <div style=" position: absolute; top: 45px; right: 0px;">

						                    <a href="dashboard-Mpsimage-Edit.php?id=<?= $data['id'] ?>">
						                         <i class="fa-solid fa-square-pen text-success "></i>
						                    </a> 

						                 </div>
						               
						               <?php 
						                  }
						                ?>

							<?php 
								} 
							?>

							</div>

						</div>
				</div>
			</div>		
		</div>

		<br>

		<?php include 'footer.php'; ?>

		<?php include 'preloader.php'; ?>

		<?php include "resp-nav.php"; ?>

		

<script>


			<?php 
				include "conn.php";

				$sql="select * from typing";

				$stmt=$conn->prepare($sql);

				$stmt->execute();

				// Get result 
				$result=$stmt->get_result();

				// Fetch data
				while($data=$result->fetch_assoc()){


			 ?>

	  const textArray = ["<?= $data['txt1'] ?>", "<?= $data['txt2'] ?>", "<?= $data['txt3'] ?>"];

				<?php 

					}

				 ?>

        let textIndex = 0;
        let charIndex = 0;
        const typingSpeed = 100; // Speed of typing
        const erasingSpeed = 50; // Speed of erasing
        const delayBetweenTexts = 1000; // Pause before erasing

        function typeText() {
            if (charIndex < textArray[textIndex].length) {
                document.getElementById("typing-text").textContent += textArray[textIndex].charAt(charIndex);
                charIndex++;
                setTimeout(typeText, typingSpeed);
            } else {
                setTimeout(eraseText, delayBetweenTexts);
            }
        }

        function eraseText() {
            if (charIndex > 0) {
                document.getElementById("typing-text").textContent = textArray[textIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(eraseText, erasingSpeed);
            } else {
                textIndex = (textIndex + 1) % textArray.length;
                setTimeout(typeText, typingSpeed);
            }
        }

        // Start the effect
        typeText();


        function confirmDelete() {
        	return confirm("Are you sure you want to delete this ?");

        }

</script>

<!-- Include Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

	<script src="js/script.js"></script>

	<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>



</body>
</html>


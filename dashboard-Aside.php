<?php if (!isset($_SESSION['username'])) {

	header("Location:index.php");

} ?>

<?php include "conn.php"; ?>

	<div class="sidebar bg-dark" id="sidebar">
		<ul>

			<!-- Home -->
			<a class="d-block text-decoration-none  p-3 border-black " href="index.php">
			
				<i class="fa-solid fa-house"></i>

				<span class="invsbl" id="invsbl" >  Home</span>

			</a>



            <?php 

                $sql="select count(*) as cnt from bookshow";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Dashboard aside -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ah") { echo $_GET['msg'];} ?>" href="dashboard-Hired-All.php?msg=apd2ah">
			
				<i class="fa-solid fa-guitar"></i>
			
				<span class="invsbl" id="invsbl" >  Artist hired &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span> </span> 

			</a>

			<?php 
				}

			 ?>



            <?php 

                $sql="select count(*) as cnt from bookshow";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Event booked -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2dba") { echo $_GET['msg'];} ?>" href="dashboard-Book-All.php?msg=apd2dba">
			
				<i class="fa-solid fa-ticket"></i>
			
				<span class="invsbl" id="invsbl" >  Events booked &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span> </span> 

			</a>

			<?php 
				}

			 ?>


            <?php 

                $sql="select count(*) as cnt from upcoming";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Upcoming events -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2upcg") { echo $_GET['msg'];	} ?>  " href="dashboard-Upcoming.php?msg=apd2upcg">

				<i class="fa-solid fa-calendar"></i>

				<span class="invsbl" id="invsbl" >  Upcoming events &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 
				}
			 ?>


            <?php 

                $sql="select count(*) as cnt from ticket";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Tickets booked -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2dbt") { echo $_GET['msg'];} ?>" href="dashboard-Ticket-All.php?msg=apd2dbt">
			
				<i class="fa-solid fa-ticket-simple"></i>
			
				<span class="invsbl" id="invsbl" >  Tickets booked &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span> </span> 

			</a>

			<?php 
				}

			 ?>



            <?php 

                $sql="select count(*) as cnt from contactus";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Contact us -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2cu") { echo $_GET['msg'];	} ?>  " href="dashboard-Contact-Us.php?msg=apd2cu">

				<i class="fa-solid fa-address-book"></i>

				<span class="invsbl" id="invsbl" >Client contact requests &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 
				}
			 ?>


            <?php 

                $sql="select count(*) as cnt from promote";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Contact us -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pr") { echo $_GET['msg'];	} ?>  " href="dashboard-Promote.php?msg=apd2pr">

				<i class="fa-solid fa-arrow-trend-up"></i>

				<span class="invsbl" id="invsbl" >Promotion Requests &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 
				}
			 ?>


            <?php 

                $sql="select count(*) as cnt from music";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			
			<!-- Music list -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ml") { echo $_GET['msg'];	} ?> " href="dashboard-Music.php?msg=apd2ml">

				<i class="fa fa-music"></i>

				<span class="invsbl" id="invsbl" >  Music list &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>

			<?php 
				}

			 ?>






            <?php 

                $sql="select count(*) as cnt from intro";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Team intro -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ti") { echo $_GET['msg'];	} ?>  " href="dashboard-Intro.php?msg=apd2ti">

				<i class="fa fa-users"></i>

				<span class="invsbl" id="invsbl" >  Team members &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 

				}
			 ?>




            <?php 

                $sql="select count(*) as cnt from blogs";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Blogs -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2blgs") { echo $_GET['msg'];	} ?>  " href="dashboard-Blogs.php?msg=apd2blgs">

				<i class="fa-solid fa-newspaper"></i>

				<span class="invsbl" id="invsbl" >  Blogs &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>

			<?php 
				}
			 ?>


            <?php 

                $sql="select count(*) as cnt from brands";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Brands -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2brnds") { echo $_GET['msg'];	} ?>  " href="dashboard-Brands.php?msg=apd2brnds">

				<i class="fa-solid fa-handshake"></i>

				<span class="invsbl" id="invsbl" >  Brands &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>

			<?php 
				 } 
			 ?>



			<!-- Get in touch -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2git") { echo $_GET['msg'];	} ?>  " href="dashboard-Get-In-Touch.php?msg=apd2git">

				<i class="fa-solid fa-location-arrow"></i>

				<span class="invsbl" id="invsbl" >  Get in touch with us</span>

			</a>


            <?php 

                $sql="select count(*) as cnt from coresocial";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Social media logos -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2cs") { echo $_GET['msg'];	} ?>  " href="dashboard-Coresocial.php?msg=apd2cs">

				<i class="fa-solid fa-circle-notch"></i>

				<span class="invsbl" id="invsbl" >  Logo list &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 
				}
			 ?>



            <?php 

                $sql="select count(*) as cnt from social";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Social media logos -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2sml") { echo $_GET['msg'];	} ?>  " href="dashboard-Socialml.php?msg=apd2sml">

				<i class="fa-solid fa-circle-notch"></i>

				<span class="invsbl" id="invsbl" >  Social media logos &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>
			<?php 
				}
			 ?>



            <?php 

                $sql="select count(*) as cnt from bts";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Behind the scenes -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2bts") { echo $_GET['msg'];	} ?>  " href="dashboard-BTS.php?msg=apd2bts">

				<i class="fa-solid fa-image"></i>

				<span class="invsbl" id="invsbl" >Behind the scenes &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>

			<?php 
				} 
			?>



            <?php 

                $sql="select count(*) as cnt from events";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

			<!-- Events -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2evnts") { echo $_GET['msg'];	} ?>  " href="dashboard-Event.php?msg=apd2evnts">

				<i class="fa-solid fa-images"></i>

				<span class="invsbl" id="invsbl" >Events snapshots &nbsp <span class="badge badge-success"><?= $data['cnt'] ?></span></span>

			</a>

			<?php 
				} 
			?>



			<!--  Typing effect text   -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2typing") { echo $_GET['msg'];	} ?>  " href="dashboard-Typing.php?msg=apd2typing">

				<i class="fa-solid fa-text-width"></i>

				<span class="invsbl" id="invsbl" >Typing effect text </span>

			</a>



			<!--  Privacy policy  -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pp") { echo $_GET['msg'];	} ?>  " href="dashboard-PP.php?msg=apd2pp">

				<i class="fas fa-shield-alt"></i>

				<span class="invsbl" id="invsbl" >Privacy policy</span>

			</a>



			<!--  Terms and conditions  -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2tnc") { echo $_GET['msg'];	} ?>  " href="dashboard-TnC.php?msg=apd2tnc">


				<i class="fas fa-file-signature"></i> 

				<span class="invsbl" id="invsbl" >Terms & Conditions</span>

			</a>



			<!-- Logo name -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ln") { echo $_GET['msg'];	} ?>  " href="dashboard-Logo.php?msg=apd2ln">

				<i class="fas fa-globe"></i>

				<span class="invsbl" id="invsbl" >Website Logo</span>

			</a>




			<!-- Log out -->
			<a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2lo") { echo $_GET['msg'];	} ?>  " href="log-Out.php?msg=apd2lo">

				<i class="fas fa-power-off text-success"></i>

				<span class="invsbl text-success" id="invsbl" >  Log out</span>

			</a>


		</ul>

	</div>


		<!-- hamburger button -->
		<i class="hb fas fa-bars  border-success text-success py-1 px-2" id="hb" style="border:2px solid white ; border-radius: 5px; " ></i>


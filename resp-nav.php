<div class="column1" id="column1" style="overflow: auto; scrollbar-width: none;">
			
			<!-- first column -->
				<div class="col-12 pl-5 pt-4" >






					<br>
					<!-- HOME row -->
					<div class="row">
						<div class="col">

							<div class="row ">

								<div class="col-10 <?php if (empty($_GET['msg2'])) { echo "dapd2hm";} ?>" >
									<a href="index.php" class="" onclick="chng2()">
										<p class="text-hover  px-2" style="font-size: 22.3px;">HOME</p>
									</a>
								</div>

							</div>

						</div>
					</div>		


					<!-- INTRO row -->
					<div class="row">
						<div class="col">
														
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2au") { echo $_GET['msg2'];} ?>" >
									<a href="intro.php?msg2=dapd2au"  onclick="chng2()">
										<p class="text-hover  px-2" style="font-size: 22.3px;">ABOUT US</p>
									</a>
								</div>

							</div>

						</div>
					</div>


					<!-- MV row -->
					<div class="row">
						<div class="col">
														
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2svcs") { echo $_GET['msg2'];} ?>">
									<a href="services.php?msg2=dapd2svcs" onclick="chng2()">
										<p class="text-hover  px-2" style="font-size: 22.3px;">SERVICES</p>
									</a>
								</div>

							</div>

						</div>
					</div>


					<!-- BAS row -->
					<div class="row">
						<div class="col">
							
							

							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2blgs") { echo $_GET['msg2'];} ?>">
								<a href="blogs.php?msg2=dapd2blgs" onclick="chng2()">		
									<p class="text-hover  px-2" style="font-size: 22.3px;">BLOGS</p>											
								</a>

								</div>

							</div>

						</div>
					</div>
					




					<!-- DP row -->
					<div class="row">
						<div class="col">
												
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2mv") { echo $_GET['msg2'];} ?>">
									<a href="music-Videos.php?msg2=dapd2mv">
										<p class="text-hover  px-2" style="font-size: 22px;">MUSIC VIDEOS</p>						
									</a>
								</div>

							</div>

						</div>
					</div>


					<!-- AnB row -->
					<div class="row">
						<div class="col">
							
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2ab") { echo $_GET['msg2'];} ?>">
									<a href="artists-N-Booking.php?msg2=dapd2ab">									
										<p class="text-hover  px-2" style="font-size: 22.3px;">ARTISTS & BOOKINGS</p>
									</a>
								</div>

							</div>

						</div>
					</div>


					<!-- WSC row -->
					<div class="row">
						<div class="col">
							
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2eb") { echo $_GET['msg2'];} ?>">
									<a href="book-Show.php?msg2=dapd2eb">									
										<p class="text-hover  px-2" style="font-size: 22.3px;">EVENT & BOOKINGS</p>
									</a>
								</div>

							</div>

						</div>
					</div>


					<!-- Contact us -->
					<div class="row">
						<div class="col">
														
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2cu") { echo $_GET['msg2'];} ?>">
									<a href="contact-Us-Add.php?msg2=dapd2cu">									
										<p class="text-hover  px-2" style="font-size: 22.3px;">CONTACT US</p>
									</a>
								</div>

							</div>

						</div>
					</div>


	               <?php if (isset($_SESSION['username'])) 	               
	                 { 
	               ?>

					<!-- Dashboard -->
					<div class="row">
						<div class="col">
														
							<div class="row ">

								<div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2dbrd") { echo $_GET['msg2'];} ?>">
									<a href="dashboard-Hired-All.php?msg=apd2ah&msg2=dapd2dbrd">									
										<p class="text-hover  px-2" style="font-size: 22.3px;">DASHBOARD</p>
									</a>

								</div>

							</div>

					</div>

				</div>
			<?php } ?>





					<br>
					<!-- COPYRIGHT row -->
					<div class="row">
						<div class="col">
							
							<div class="row ">

								<div class="col-6">
									<p class="d-inline"  style="font-size: 10.3px;">COPYRIGHT © & ℗ </p>
									<br>
								<p class="d-inline"  style="color:#d50b0e; font-size: 12.3px;">Midwave Productions</p>
								</div>

								
							</div>

						</div>
					</div>

																							
				</div><!-- First column ends -->
		</div>


		<!-- Center button -->
		<label class="closebtn2" id="closebtn2" onclick="chng2()"><img src="image/close.svg" alt=""></label>


		<!-- Second column -->
		<div class="column2" id="column2" style="overflow: auto; scrollbar-width: none;">

			<div class="d-flex justify-content-center align-content-center">
		        <img src="image/ws.gif"  alt="Oval Image" style=" transform: rotate(90deg); width: 425px; height: 582px; ">
				
			</div>

			<a href="log-In.php" style="position: absolute; bottom: 10px; right: 20px; z-index: 1003;">
				<h6>¤</h6>
			</a>

		</div>
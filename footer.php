<br><br>
<footer class=" text-white py-4 text-center" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
    
    <div class="container">
        
        <!-- Copyright & Privacy Policy -->
        <p class="mb-0">&copy; 2025 Midwave Productions.<p class="d-inline" style="font-size: 13px;">COPYRIGHT  ℗ </p>. <br> | <a href="privacy-Policy.php" class="text-white d-inline">Privacy Policy</a> |</p>  | <a href="terms-Conditions.php" class="text-white d-inline">Terms & Conditions</a> |</p>
    </div>
    

            <?php 
                include "conn.php";

                // $status="all";

                $sql="select * from social ";

                $stmt=$conn->prepare($sql);

                // $stmt->bind_param('s',$status);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();


             ?>


                <h3 class="mt-3">Follow Us on</h3>

                
                <div class="social-links" style="position: relative;">
                
                    <?php 
                        // Fetch data
                        while($data=$result->fetch_assoc()){
                        if ($data['status']=="show") {

                     ?>


                        <a href="<?= $data['link'] ?>" target="_blank"  ><?= $data['logo'] ?></a>


                      <?php if (isset($_SESSION['username']))    
                         { 
                       ?> 
                        <!-- Edit icon -->
                        <div class="social-edit">
                           <a href="dashboard-Socialml.php?id=<?= $data['id'] ?>&msg=apd2sml">
                                <i class="fa-solid fa-square-pen" style="font-size: 15px;"></i>
                           </a> 
                        </div>

                        <?php } ?>
                
                    <?php 
                            }
                        }
                     ?>

                </div>




</footer>




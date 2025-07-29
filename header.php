<nav class="parent-nav">

<?php 
            include "conn.php";

            $sql="select * from logo";

            $stmt=$conn->prepare($sql);

            $stmt->execute();

            // Get result 
            $result=$stmt->get_result();

            // Fetch data
            while($data=$result->fetch_assoc()){

?>

               <!-- brand logo -->
              <a class="logo" href="index.php">
               
                  <img src="<?= $data['imageDirectory'] ?>" width="100px" height="50px" alt=""> 
                  - 
                  <h5 class="sub-logo2">Home</h5>

               <?php if (isset($_SESSION['username'])) 
               
                 { 

               ?>

                 <!-- Edit icon -->
                 <div class="logoP-edit">
                    <a href="dashboard-Logo-Edit.php?id=<?= $data['id'] ?>">
                         <i class="fa-solid fa-square-pen text-success "></i>
                    </a> 
                 </div>
               
               <?php 
                  }
                ?>
               
               
               </a>


<?php

   }

?>
   

                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>


                   <a class="wmv2 d-inline text-success" title="Log out" href="log-Out.php"><i class="fas fa-power-off fa-2x"></i></a> 
                    
                    <?php } ?>

           <h5 class="wmv d-inline text-white">Work <br> Music videos</h5>

           <!-- hamburger button -->
         <label id="closebtn1" onclick="chng1()" for=""> <img class="ham-button" src="image/hamburger.svg" alt=""></label>


</nav>

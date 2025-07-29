<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Music Band</title>

<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

    <style>
        body { background-color: #121212; color: #ffffff; }

        .contact-section { padding: 50px 0; }

        .form-control { background-color: #333; color: #ffffff; border: 1px solid #555; }

        .form-control::placeholder { color: #bbb; }

        .btn-primary { background-color: #ff9800; border: none; }

        .btn-primary:hover { background-color: #e68900; }

        a { color: #ff9800; }

        a:hover { color: #e68900; }

    </style>
</head>
<body>

        <?php include "header.php"; ?>

    <div class="container contact-section mx-5" style="position:absolute; top: 60px; ">
        <div class="row" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <form action="contact-Us-Add-2.php" method="post">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="form-group">
                        <label for="inquiry">Inquiry Type</label>
                        <select class="form-control" name="inquiry" id="inquiry">
                            <option value="Reserve studio">Reserve studio</option>
                            <option value="Booking">Booking</option>
                            <option value="Collaboration">Collaboration</option>
                            <option value="General inquiry">General Inquiry</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message..."></textarea>
                    </div>

                    <button type="submit" class="btn text-white border-white">Send Message</button>
                </form>
            </div>


                
            <?php 
                include "conn.php";

                // $status="all";

                $sql="select * from getintouch  order by id desc";

                $stmt=$conn->prepare($sql);

                // $stmt->bind_param('s',$status);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                   // Fetch data
                while($data=$result->fetch_assoc()){

             ?>


            <div class="cua col-md-6 mt-sm-5">
                <h2>Get in Touch</h2>
                <p><strong>Phone:</strong> <a href="tel:+<?= $data['phone'] ?>"><?= $data['phone'] ?></a></p>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/<?= $data['whatsapp'] ?>" target="_blank">Chat on WhatsApp</a></p>
                <p><strong>Email:</strong> <a href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a></p>
                <p><strong>Address: </strong><?= $data['address'] ?></p>

                <div style="width: ; height: 50%;">
                        <?= $data['gmap'] ?>
                 </div>

                <br>
                

                   <?php if (isset($_SESSION['username']))                 
                     { 
                   ?>

                <!-- Edit icon -->
                <div class="cua-edit">
                   <a href="dashboard-Get-In-Touch-Edit.php?id=<?= $data['id'] ?>">
                        <i class="fa-solid fa-square-pen fa-2x text-white"></i>
                   </a> 
                </div>

                <?php } ?>
<!--                 <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" 
                        src="" 
                        allowfullscreen></iframe>

                 </div>
 -->            
            <?php 
                }
             ?>

            </div>


        </div>

        <br><br>
        <hr class="bg-white">
        <?php include 'footer.php'; ?>

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

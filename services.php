<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    
<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">
    
    <style>
        .btn-block {
            text-align: left;
            width: 100%;
            padding: 1rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.25rem;
        }
        .card-header {
            cursor: pointer;
        }
        .arrow {
            float: right;
            transition: transform 0.3s ease;
        }
        .collapsed .arrow {
            transform: rotate(0deg);
        }
        .arrow {
            transform: rotate(90deg);
        }
    </style>
</head>
<body >
        <?php include 'header.php'; ?>

    <br>
    <!-- Services -->
    <section id="services"  style="position: absolute; margin-top: 100px; margin-bottom: 50px;">
       
        <h2 class="text-center text-white"><i class="fas fa-cogs"></i> Exclusive Services</h2>

        <hr class="bg-white">

        <br>
        <div class="row text-center py-5" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">

            <div class="col-md-3 mt-5">
                <i class="fas fa-microphone fa-4x"></i>
                <br><br> 
                <h4>Artist Booking</h4>
                <p>Hire singers, musicians, and performers.</p>
                <a href="artists-N-Booking.php" class="btn btn-dark border-white mt-2">Book Now</a>
            </div>

            <div class="col-md-3 mt-5">
                <i class="fas fa-headphones fa-4x"></i>
                <br><br> 
                <h4>Music Production</h4>
                <p>Recording, mixing, mastering, and releases.</p>
                <a href="music-Videos.php" class="btn btn-dark border-white mt-2">Get Started</a>
            </div>

            <div class="col-md-3 mt-5">
                <i class="fas fa-calendar-alt fa-4x"></i>
                <br><br> 
                <h4>Event Planning</h4>
                <p>Corporate events, concerts, weddings, and more.</p>
                <a href="book-Show.php#bat" class="btn btn-dark border-white mt-2">Plan Now</a>
            </div>

            <div class="col-md-3 mt-5">

                <div class="p-2" style=" display: inline-block; border: 2px solid white; border-radius:10px; ">
                    <i class="fas fa-video fa-2x"></i> &nbsp
                    <i class="fa-solid fa-camera fa-2x"></i> <br>
                    <i class="fa-solid fa-microphone-lines fa-2x"></i>               
                </div>

                <br><br> 
                <h4>Studio Services</h4>
                <p>Fully equipped audio and video production studios.</p>
                <a href="reserve-Studio.php" class="btn btn-dark border-white mt-2">Reserve Studio</a>
            </div>

        </div>

<br><br><br>
<hr class="bg-white">

        <?php include "footer.php"; ?>
        
    </section>


    
    <?php include "preloader.php"; ?>


    <?php include 'resp-Nav.php'; ?>


<!-- Include Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anon-ymous"></script>
    <script src="js/script.js"></script>


    <script>
    
    
        $(document).ready(function() {
            $('.card-header').click(function() {
                $(this).find('.arrow').toggleClass('rotated');
            });
        });

-    </script>

</body>
</html>

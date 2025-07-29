<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boost Your Music | Professional Song Promotion</title>


  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">


    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-btn {
            background: linear-gradient(45deg, #4A00E0, #8E2DE2);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        
        .gradient-btn:hover {
            background: linear-gradient(45deg, #8E2DE2, #4A00E0);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(142, 45, 226, 0.3);
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: #8E2DE2;
            box-shadow: 0 0 0 0.2rem rgba(142, 45, 226, 0.25);
            color: white;
        }
        
        .stat-item {
            position: relative;
            padding-left: 30px;
        }
        
        .stat-item:before {
            content: "";
            position: absolute;
            left: 0;
            top: 10px;
            height: 10px;
            width: 10px;
            background: linear-gradient(45deg, #4A00E0, #8E2DE2);
            border-radius: 50%;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .platform-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #4A00E0, #8E2DE2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

    <div class="container-fluid">

        <!-- Hero Section -->
        <section class="py-5 py-md-7">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-12">

                        <h1 class="display-4 font-weight-bold mb-4 text-center">Supercharge Your <span class="text-gradient">Music Reach</span></h1>

                        <p class="lead mb-4 text-center">Professionally promote your songs using Google Ads & Meta Ads strategy that delivers real results and grows your fanbase exponentially.</p>

                        <center>                            
                                <a href="#form-section" class="btn btn-lg gradient-btn mr-3 mb-3 px-4">
                                    <i class="fas fa-rocket mr-2"></i> Get Started
                                    </a>
                        </center>

                    </div>

                </div>
            </div>
        </section>

        <!-- Platform Logos -->
        <section class="py-4" style="background: rgba(255, 255, 255, 0.03);">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h5 class="mb-4">OUR ADS RUN ON THESE PLATFORMS</h5>
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="mx-4 mb-3">
                                <i class="fab fa-google platform-icon"></i>
                                <p>Google Ads</p>
                            </div>
                            <div class="mx-4 mb-3">
                                <i class="fab fa-facebook platform-icon"></i>
                                <p>Facebook Ads</p>
                            </div>
                            <div class="mx-4 mb-3">
                                <i class="fab fa-instagram platform-icon"></i>
                                <p>Instagram Ads</p>
                            </div>
<!--                             <div class="mx-4 mb-3">
                                <i class="fab fa-youtube platform-icon"></i>
                                <p>YouTube Ads</p>
                            </div>
                            <div class="mx-4 mb-3">
                                <i class="fab fa-spotify platform-icon"></i>
                                <p>Spotify Ads</p>
                            </div>
 -->                        
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-5 py-md-7">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="font-weight-bold">How We <span class="text-gradient">Promote Your Music</span></h2>
                    <p class="lead">Our data-driven approach gets your music in front of the right audience</p>
                </div>

                <div class="row d-flex justify-content-around">

                    <div class="col-md-4 mb-4">
                        <div class="feature-card p-4 h-100">
                            <div class="text-center mb-3">
                                <i class="fas fa-bullseye fa-3x text-gradient" style="background: linear-gradient(45deg, #4A00E0, #8E2DE2); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <h4 class="text-center mb-3">Targeted Ads</h4>
                            <p class="text-center">We precisely target listeners who match your ideal fan profile based on demographics, interests, and listening habits.</p>
                        </div>
                    </div>



                    <div class="col-md-4 mb-4">
                        <div class="feature-card p-4 h-100">
                            <div class="text-center mb-3">
                                <i class="fas fa-chart-line fa-3x text-gradient" style="background: linear-gradient(45deg, #4A00E0, #8E2DE2); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <h4 class="text-center mb-3">Performance Tracking</h4>
                            <p class="text-center">Real-time analytics show exactly how your ads are performing with detailed metrics on plays, follows, and engagement.</p>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="feature-card p-4 h-100">
                            <h4 class="text-center mb-4">Typical Campaign Results</h4>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fas fa-play-circle mr-2 text-gradient"></i> Streams
                                </div>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar gradient-bg" role="progressbar" style="width: 80%; background: linear-gradient(45deg, #4A00E0, #8E2DE2);"></div>
                            </div>
                            
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fas fa-user-plus mr-2 text-gradient"></i> New Followers
                                </div>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar gradient-bg" role="progressbar" style="width: 65%; background: linear-gradient(45deg, #4A00E0, #8E2DE2);"></div>
                            </div>
                            
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fas fa-heart mr-2 text-gradient"></i> Engagement Rate
                                </div>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar gradient-bg" role="progressbar" style="width: 75%; background: linear-gradient(45deg, #4A00E0, #8E2DE2);"></div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <small class="text-muted">*Results vary based on budget, genre, and existing fanbase</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        
        <!-- Form Section -->
        <section id="form-section" class="py-5 py-md-7" style="background: linear-gradient(135deg, rgba(74,0,224,0.1) 0%, rgba(142,45,226,0.1) 100%);">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="feature-card p-4 p-md-5">

                            <div class="text-center mb-5">
                                <h2 class="font-weight-bold">Ready to <span class="text-gradient">Boost Your Music</span>?</h2>
                                <p class="lead">Fill out the form below and we'll get back to you within 24 hours</p>
                            </div>

                            <form action="promote-2.php" method="post">

                                <div class="form-row">
                                
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="email"  name="email"required>
                                        </div>
                                    </div>

                                </div>

                                <center>
                                    <div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="tel" class="form-control" name="phone" id="phone">
                                            </div>
                                        </div>                                    
                                    </div>
                                </center>
                                <br>

                                <div class="form-group">
                                    <label for="links">Links to Your Music (Spotify, Apple Music, YouTube, etc.)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-link"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="links" name="link" placeholder="Paste your links here...">
                                    </div>
                                </div>
                                <br>


                                <div class="form-group">
                                    <label for="message">Additional Information</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Tell us more about your music and promotion needs..."  name="message" ></textarea>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-lg gradient-btn px-5">
                                        <i class="fas fa-paper-plane mr-2"></i> Submit Request
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  
        <!-- CTA Section -->
        <section class="py-5 py-md-7 text-center" style="background: linear-gradient(135deg, #4A00E0 0%, #8E2DE2 100%);">
            <div class="container">
                <h2 class="text-white font-weight-bold mb-4">Ready to Take Your Music to the Next Level?</h2>
                <p class="lead text-white mb-5">Let's create a customized promotion strategy that fits your goals and budget.</p>
                <a href="#form-section" class="btn btn-light btn-lg px-5">
                    <i class="fas fa-headphones mr-2"></i> Start Your Campaign Today by filling form given above
                </a>
            </div>
        </section>

    </div>

    <?php include 'footer.php'; ?>

    <?php include "preloader.php"; ?>

    <?php include "resp-nav.php"; ?>


<!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- jQuery & DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>

  <script src="js/script.js"></script>

</body>
</html>
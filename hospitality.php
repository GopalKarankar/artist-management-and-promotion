<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Hospitality</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .hospitality-item {
            transition: all 0.3s ease;
        }
        .hospitality-item:hover {
            transform: translateY(-5px);
        }
        .icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }
        .section-title {
            position: relative;
            padding-bottom: 15px;
        }
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title display-4 font-weight-bold">Artist Hospitality</h2>
                <p class="lead mt-3">Our team ensures all requirements are met to create the perfect environment for performance excellence.</p>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">

                    <div class="icon-wrapper">
                        <i class="fas fa-utensils fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Catering</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Organic, high-quality meals</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Custom dietary requirements</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Pre-performance and post-performance meals</li>
                        <li><i class="fas fa-check-circle mr-2"></i> 24/7 snacks and beverages</li>
                    </ul>

                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-bed fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Accommodation</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Luxury suites with blackout curtains</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Soundproof rooms</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> White noise machines available</li>
                        <li><i class="fas fa-check-circle mr-2"></i> 24-hour room service</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-hand-holding-water fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Dressing Room</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Private, secure space</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Full-length mirrors</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Steamers and ironing equipment</li>
                        <li><i class="fas fa-check-circle mr-2"></i> Vanity lighting</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-spa fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Wellness</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> On-call massage therapist</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Vocal steam treatments</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Private yoga sessions</li>
                        <li><i class="fas fa-check-circle mr-2"></i> Meditation space</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-wifi fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Technology</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> High-speed WiFi</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Charging stations</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Streaming-capable smart TVs</li>
                        <li><i class="fas fa-check-circle mr-2"></i> Secure storage for valuables</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="hospitality-item p-4 h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h4 class="text-center mb-3">Support Staff</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Personal assistant</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Security personnel</li>
                        <li class="mb-2"><i class="fas fa-check-circle mr-2"></i> Hair and makeup artists</li>
                        <li><i class="fas fa-check-circle mr-2"></i> Runner service for last-minute needs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
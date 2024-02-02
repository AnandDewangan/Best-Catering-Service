<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Catering Service in India - Taste Symphony: Catering Harmonies for Every Occasion Ganesh Caterers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="catering services, event catering, wedding catering, corporate catering, gourmet cuisine, personalized menus, professional catering, culinary excellence, special events, menu planning"> 
    <meta name="description" content="Discover exquisite catering services for your special events. From weddings to corporate gatherings, our culinary expertise elevates every occasion. Indulge in a symphony of flavors, meticulous presentation, and personalized service. Your celebration, our commitment to culinary excellence.">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Ganesh <span class="text-success">Caterers</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#services" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="#booking" class="dropdown-item">Booking</a>
                                <a href="#team" class="dropdown-item">Our Team</a>
                                <a href="#testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Cooking is an art, and the ingredients are the colors that paint a masterpiece. Quality ingredients are the brushstrokes that create a lasting impression on the palate.</p>
                            <a href="tel:+918963906336" class="btn btn-outline-warning text-success w-50">📞 Call Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img src="img/hero.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <?php include 'service.php' ?>
        <!-- Service End -->


        <!-- About Start -->
        <?php include 'about.php' ?>
        <!-- About End -->


        <!-- Menu Start -->
        <?php include 'menu.php' ?>
        <!-- Menu End -->


        <!-- Booking Start -->
        <?php include 'booking.php' ?>
        <!-- Booking End -->


        <!-- Team Start -->
        <?php include 'team.php' ?>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php include 'testimonial.php' ?>
        <!-- Testimonial End --> 
        

        <!-- Contact Start -->
        <?php include 'contact.php' ?>
        <!-- Contact End -->


        <!-- contact form  -->
        <?php
        if(isset($_GET['error'])){
            echo '<div class="alert alert-danger alert-dismissible fade show position-fixed bottom-0" role="alert">
            <strong>Warning!</strong> Please fill all fields.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if(isset($_GET['success'])){
            echo '<div class="alert alert-success alert-dismissible fade show position-fixed bottom-0" role="alert">
            <strong>Hurrey!</strong> You form submitted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="#about">About Us</a>
                        <a class="btn btn-link" href="tel: +918963906336">Contact Us</a>
                        <a class="btn btn-link" href="#booking">Reservation</a>
                        <a class="btn btn-link" href="index.php">Privacy Policy</a>
                        <a class="btn btn-link" href="index.php">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Budhwari Bajar, Baloda, Dist- Janjgir-Champa (C.G.)</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9189639 06336</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>apnacateringservices@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Sunday</h5>
                        <p>09AM - 09PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>New Flavors, New Experiences: Unveiling Our Latest Menu</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.php">Apna Catering Services</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://www.linkedin.com/in/anand-dewangan/">Anand Dewangan</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-outline-success btn-lg-circle back-to-top"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
</a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
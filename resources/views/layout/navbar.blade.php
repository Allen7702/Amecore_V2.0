<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amecore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
    <!-- Favicon -->
    <link href="{{asset('')}}website/img/amec.png" rel="icon" type="image/png" sizes="16*16">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('website/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/animate.min.css')}}" rel="stylesheet">


    <!-- JQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      
    <!-- Template Javascript -->
    <script src="{{asset('website/js/main.js')}}"></script>
    <script src="{{asset('website/js/readmore.js')}}"></script>
    <script src="{{asset('website/js/wow.js')}}"></script>
    <script src="{{asset('website/js/wow.min.js')}}"></script>



</head>

<body class="bg-light">
  


    <!-- Navbar Start -->
  
    <div class="container-fluid p-0">
        <nav class="navbar fixed-top navbar-expand-lg   navbar-dark  py-lg-0 px-lg-5 host" >
            <div class="navbar-brand row d-none d-lg-block">
                <div style="display: flex; flex-direction: row;">
                  <img src="{{asset('website/img/amec.png')}}" alt="" width="40" height="40">
                  <div class="nunito" style="font-size:30px;font-weight:700;">
                    <span class="text-primary" style="padding-left:10px;">AME</span><span>CORE</span>
                  </div>
                </div>
              </div>
         
          <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize text-white" style="font-family: 'Roboto', sans-serif;"><span class="text-primary">AME</span>CORE</h1>
            </a>
          
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 sup">
                    <a href="/" class="nav-lnk {{ Request::path() === '/' ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-lnk {{ Request::path() === 'about' ? 'active' : '' }}">About</a>
                    <a href="/contact" class="nav-lnk {{ Request::path() === 'contact' ? 'active' : '' }}">Contact</a>
                    <a href="/solution" class="nav-lnk {{ Request::path() === 'solution' ? 'active' : '' }}">Solution</a>
                </div>
         
            </div>
        </nav>
    </div>  
    <!-- Navbar End -->

@yield('content')



    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Ame</span>core</h1>
                <p class="m-0">Amecore will help you take advantage of our wide range of Services, leverage data and Analytics to really know your business, protect your systems with the latest in Security solutions, replace or maintain your Devices, or explore your options for Connectivity.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>C&G Plaza, Plot 672 Mwai Kibaki Road, Mikocheni</p>
                        <a href="tel:+255713999934" class="text-decoration-none text-white" >
                        <p><i class="fa fa-phone-alt mr-2"></i>
                        <a href="tel:+255713999934" class="text-white" >+255 713 999 934</a></p> 
                        <p><i class="fa fa-envelope mr-2"></i>info@amecore.co.tz</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#learn-more"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                          
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form method="POST" action="connection.php">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" name="username" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" name="useremail" required="required" />
                            </div>
                            <div>
                                <input type="hidden" name="newsletter_form" value="1">
                                <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#"><span class="text-primary">Amecore</span>-Technologies Company Limited</a>. All Rights Reserved.
                   
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

</body>

</html>


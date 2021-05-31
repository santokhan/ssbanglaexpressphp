<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/jpg" href="image/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Title -->
    <title>SS Bangla Express</title>
</head>

<body>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "115143816850546");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v10.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>



    <!-- Header -->
    <div class="container-fluid px-lg-5 text-light">
        <div class="row mx-lg-5">
            <div class="col d-lg-flex bg-danger justify-content-between rounded overflow-hidden px-lg-4 py-lg-3">
                <span class="crop-corner-top"></span>
                <div class="pl-lg-1">
                    <nav class="navbar navbar-expand-md text-white">
                        <ul class="navbar-nav">
                            <li class="nav-item pr-2"><i class="fas fa-phone pr-1"></i>+880 1711 327 764</li>
                            <li class="nav-item"><i class="fas fa-envelope pr-1"></i>banglaexpress01@gmail.com</li>
                        </ul>
                    </nav>
                </div>
                <nav class="navbar navbar-expand navbar-dark px-0 pt-lg-2 pb-sm-1">
                    <ul class="navbar-nav ml-lg-auto m-auto">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="https://www.facebook.com/Banglaexpress1/"><i class="fab fa-facebook px-1"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#"><i class="fab fa-instagram px-1"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#"><i class="fab fa-twitter px-1"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#"><i class="fab fa-youtube px-1"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#"><i class="fab fa-linkedin px-1"></i></a>
                        </li>
                    </ul>
                </nav>
                <span class="crop-corner-bottom"></span>
            </div>
        </div>
    </div>

    <!-- Logo -->
    <div class="container-fluid px-lg-5">
        <div class="row mx-lg-5">
            <div class="col-lg-3 d-flex justify-content-between">
                <div class="logo">
                    <img src="image/ss-bangla-express-logo2.png" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-3 pb-1 ml-auto">
                <div class="align-self-center d-flex py-2">
                    <i class="fas fas fa-location-arrow text-danger p-2"></i>
                    <p class="py-0 m-0">Ali Azom market. Hojjcamp, 47-Dakhkhin Khan Mollartek, Bottola,Dhaka-1230.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Navbar -->
    <div class="container-fluid px-lg-5" id="top-navbar">
        <div class="row mx-lg-5">
            <div class="col bg-danger rounded">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page/about/about.html" tabindex="-1" aria-disabled="true">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page/services/services.html" tabindex="-1" aria-disabled="true">Services</a>
                                </li>
                                <li class="nav-item tools-btn">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Tools<i class="fas fa-caret-down pl-1"></i></a>
                                    <div class="bg-white p-4 rounded tools-dropdown">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Company News</a></li>
                                            <hr>
                                            <li><a href="page/tools/currency-converter/currency-converter.html">Currancy Converter</a></li>
                                            <hr>
                                            <li><a href="page/tools/valuemetric-weight/valumetric-weight.html">Valumetric Weight</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page/contact/contact.html" tabindex="-1" aria-disabled="true">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <script>
                    var navbar = document.getElementById("top-navbar");
                    var sticky = navbar.offsetTop;
                    window.onscroll = function() {
                        if (window.pageYOffset >= sticky) {
                            navbar.classList.add("sticky");
                        } else {
                            navbar.classList.remove("sticky");
                        }
                    }
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider -->
    <div class="container-fluid pb-5 overflow-hidden">
        <div class="slide-text-box"><span class="slide-text">FASTEST COURIER SOLUTION</span></div>
        <div class="row">
            <div class="col m-0 p-0">
                <div class="text-white overflow-hidden h-lg-40 position-relative m-0 p-0">
                    <div class="mySlides">
                        <img class="card-img-top" src="image/slide (4).jpg" alt="card-image">
                    </div>

                    <div class="mySlides">
                        <img class="card-img-top" src="image/slide(1).png" alt="card-image">
                    </div>

                    <div class="mySlides">
                        <img class="card-img-top" src="image/slide(6).jpg" alt="card-image" max-width="100%">
                    </div>
                    <i class="fas fa-angle-left" onclick="plusSlides(-1)"></i>
                    <i class="fas fa-angle-right" onclick="plusSlides(1)"></i>
                </div>

                <div class="row bg-danger py-3 px-lg-5 text-white">
                    <div class="col-lg-4 py-3 px-lg-5">
                        <div class="pl-lg-5">
                            <h5 class="text-center">Any query-> +8801711327764</h5>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 align-self-center">
                        <div class="row pr-lg-5" title="Tracking is in under construction mode">
                            <div class="col-lg-4 text-lg-right text-center">
                                <h5 class="pr-lg-2 pt-1">Track your product:</h5>
                            </div>

                            <div class="col-lg-7 text-lg-right">
                                <form id="trackingForm">
                                    <div class="input-group p-lg-0 px-3">
                                        <input class="form-control" type="number" name="tracking_number" placeholder="Tracking No. 00340434292135100131" id="inputTrackId" aria-label="Recipient's">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text btn btn-danger" id="my-addon">Track</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    </script>

    <!-- Card -->
    <div class="container-fluid p-lg-5">
        <div class="row mx-lg-5">
            <div class="col-md-3">
                <div class="card overflow-hidden mb-3 animate-up">
                    <div class="position-relative card-img-clip">
                        <img class="card-img-top" src="http://smhsoft.info/sites/square/images/features/feature1.jpg" alt="card-image">
                        <span class="note"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">International Express</h5>
                        <p class="card-text text-justify text-secondary">SS Bangla Express provides a global solution for moving time-sensitive
                            documents and parcels door-to-door around the world and within a variety of transit time options that will meet
                            your every need.</p>
                        <a class="btn btn-danger" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card overflow-hidden mb-3 animate-up">
                    <div class="position-relative card-img-clip">
                        <img class="card-img-top" src="http://smhsoft.info/sites/square/images/features/feature2.jpg" alt="card-image">
                        <span class="note"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Document Express</h5>
                        <p class="card-text text-justify text-secondary pb-lg-4">Through an extensive network and competitive shipping rates, SS
                            Bangla Express guarantees on time door-to-door delivery of your urgent documents to any worldwide destination.</p>
                        <a class="btn btn-danger" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card overflow-hidden mb-3 animate-up">
                    <div class="position-relative card-img-clip">
                        <img class="card-img-top" src="http://smhsoft.info/sites/square/images/features/feature3.jpg" alt="card-image">
                        <span class="note"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Parcel Express</h5>
                        <p class="card-text text-justify text-secondary pb-lg-4">Your non document shipments are specially packaged, swiftly shipped and attentively cleared through customs to arrive
                            on
                            time to any global destination by SS Bangla Express.</p>
                        <a class="btn btn-danger" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card overflow-hidden mb-3 animate-up">
                    <div class="position-relative card-img-clip">
                        <img class="card-img-top" src="http://smhsoft.info/sites/square/images/features/feature4.jpg" alt="card-image">
                        <span class="note"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Value Express</h5>
                        <p class="card-text text-justify text-secondary pb-lg-5">For your non-priority express shipments, SS Bangla Express offers Value Express as a cost-efficient delivery
                            alternative
                            to
                            suit your business budget.</p>
                        <a class="btn btn-danger" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parallex Scroll Effect Background-->
    <div class="container-fluid text-center bg-secondary py-5 parallax">
        <span class="glass-effect"></span>
        <div class="row py-5 my-5 text-white bg-transparent">
            <div class="col py-5  bg-transparent">
                <h3>WE CARE ABOUT YOUR CARGO / COURIER.</h3>
                <p><strong>"Make your transportation fast and safe"</strong></p>
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="container-fluid bg-dark position-relative text-light px-lg-5 parallax-2">
        <span class="glass-effect"></span>
        <div class="row mx-lg-5 py-lg-5">
            <div class="col-lg-3 py-4">
                <h5 class="pb-4 text-center text-lg-left">ABOUT US</h5>
                <img src="image/ss-bangla-express-logo3.png" alt="ss-bangla-express-logo" width="180px">
                <p class="text-justify pr-lg-4">To be market leader and to be customers first choice for economy express courier service
                    industry in Bangladesh and to offer the possible shortest time with most affordable price.</p>
            </div>
            <div class="col-lg-3 py-4">
                <div>
                    <h5 class="pb-4 text-center text-lg-left">SERVICES</h5>
                    <ul class="list-unstyled">
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>International Courier Export</a></li>
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>Imports (Courier & Cargo)</a></li>
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>Customs Clearance</a></li>
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>24x7 hour Online Internet Tracking</a></li>
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>Instant Customer Query Response</a></li>
                        <li class="pb-2"><a class="text-light text-decoration-none" href="#"><i class="fas fa-dot-circle pr-1"></i>Pick up and delivery services</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div>
                    <h5 class="pb-4 text-center text-lg-left">WORKING HOURS</h5>
                    <p class="text-justify pr-lg-4">We work 7 days a week, every day excluding major holidays. Contact
                        us if you have an emergency, with our Hotline and Contact form.</p>
                    <p>Sunday - Thursday:08:00 - 22:00</p>
                    <p>Saturday:08:00 - 20:00</p>
                    <p>Friday and holidays:10:00 - 18:00</p>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <h5 class="pb-4 text-center text-lg-left">FIND US</h5>
                <p><i class="fab fa-whatsapp pr-2"></i>+880 1711 327 764</p>
                <p><i class="fas fa-phone pr-2"></i>+880 1611 327 764</p>
                <p><i class="far fa-envelope pr-2"></i>banglaexpress01@gmail.com</p>
                <div class="d-flex">
                    <i class="far fa-map pr-1 pt-2"></i>
                    <p>Ali Azom market. Hojjcamp, 47-Dakhkhin Khan Mollartek, Bottola,Dhaka-1230.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-danger px-lg-5 text-white">
        <div class="row mx-lg-5 d-flex align-items-center">
            <div class="col-lg-5 ml-lg-auto align-self-center order-lg-2 pt-3">
                <div class="bg-danger">
                    <ul class="d-flex flex-lg-row flex-column  list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/about/about.html" tabindex="-1" aria-disabled="true">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/services/services.html" tabindex="-1" aria-disabled="true">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/about/about.html" tabindex="-1" aria-disabled="true">Terms &
                                Condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/contact/contact.html" tabindex="-1" aria-disabled="true">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 py-3 order-lg-1 text-center text-lg-left">
                <i>Copyright@ 2021 All right reserved by <a class="stretched-link text-white" href="https://www.facebook.com/SantoKhan1999/">Santo Khan</a></i>
            </div>
        </div>
    </div>



    <!-- JavaScript source -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- DPDHL API -->
    <script src="js/dpdhl.js"></script>
</body>

</html>
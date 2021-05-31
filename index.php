<?php include "component/header.php"; ?>

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



<!-- Top -->
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
                <img src="component/image/ss-bangla-express-logo2.png" alt="" width="100%">
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

<?php include "./component/slider.php"; ?>

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

<?php include "component/footer.php"; ?>
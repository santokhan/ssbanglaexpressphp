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
                                <a class="nav-link" href="about.php" tabindex="-1" aria-disabled="true">About Us</a>
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
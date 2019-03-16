<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Teacher's Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Custom Theme files -->
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- main -->
    <div class="main-content inner" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <!-- nav -->
                <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                    <div id="logo">
                        <h1><a href="/">Teacher's Portal</a></h1>
                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/apply">Sign Up</a></li>
                        <!--<li>
                             First Tier Drop Down
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="../index.html" class="drop-text">Professors</a></li>
                                <li><a href="../index.html" class="drop-text">Statistics</a></li>
                                <li><a href="../index.html" class="drop-text">Reviews</a></li>
                                <li><a href="../course.html" class="drop-text">Courses</a></li>

                            </ul>
                        </li>-->
                        <li><a href="">Contact Us</a></li>
                        <li>
                            <p class="w3pvt-phone">
                                <span class="fa fa-phone mr-2"></span>9496109471
                            </p>
                        </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
    </div>
    <!-- //main -->
    <!-- banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Log In</h3>
            <div class="comment-top mt-5 row">
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">

                <form class="form-group" method="post" action="/Loginme">
                     @csrf
                    <!-- <input type="hidden" name="_token" value="{{@csrf_token()}}"> -->
                     <div class="row">
                            <div class="col-lg-6 form-group">
                            <label>Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email..." name="uname" required="" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
					</div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6 form-group">
                            <label>Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password..." name="password" required="" ><br>
                            <button type="submit" class="btn submit mt-3" name="submit">Get Started @isset($msg ) {{ $msg  }} @endisset</button><br><br>
                    <a href="">Forgot Password? Click Here..</a>
                    </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="../images/apply.jpg" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- //banner-bottom -->

    <!-- footer -->
    <footer class="footer-content text-center py-5">
        <div class="container py-md-3">
            <!-- logo -->
            <h2 class="logo2 text-center">
                <a href="../index.php">
                    Teacher's Portal
                </a>
            </h2>
            <!-- //logo -->
            <!-- address -->
            <div class="contact-left-footer mt-md-4">
                <ul>
                    <li>
                        <p>
                            <span class="fa fa-map-marker mr-2"></span>Teacher's Portal, 9th Block,Kottayam
                        </p>
                    </li>
                    <li class="mx-4">
                        <p>
                            <span class="fa fa-phone mr-2"></span>9496109471.
                        </p>
                    </li>
                    <li>
                        <p class="text-wh">
                            <span class="fa fa-envelope-open mr-2"></span>
                            <a href="mailto:info@example.com">teachersportal@gmail.com</a>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- //address -->
            <!-- social icons -->
            <div class="footer-w3pvt-copy-social my-4">
                {{-- <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook-square"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fa fa-twitter-square"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span class="fa fa-google-plus-square"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fa fa-linkedin-square"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-rss-square"></span>
                        </a>
                    </li>
                    <li class="ml-2">
                        <a href="#">
                            <span class="fa fa-pinterest-square"></span>
                        </a>
                    </li>
                </ul> --}}
            </div>
            <!-- //social icons -->
            <!-- copyright -->
            <div class="w3layouts-copy text-center">
                <p class="text-da">© 2019 Teacher's Portal. All rights reserved | Design by
                 irene mary
                </p>
            </div>
            <!-- //copyright -->
            <!-- move top icon -->
			 <div class="move-top text-center mt-3">
            <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
			</div>
			<!-- //move top icon -->
        </div>
    </footer>
    <!-- //footer -->



    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
</body>

</html>

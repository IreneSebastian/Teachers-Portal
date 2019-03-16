@if(session()->has('uname'))

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Teacher's Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Custom Theme files -->
    <link href="teachers/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="teachers/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="teachers/css/font-awesome.min.css" rel="stylesheet">
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
                    <div>

                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">

                        <li><a href="/teachersindex">Home</a></li>
                        <li><a href="/teachprofile">Profile</a></li>
                        <li><a href="/apply">Sign Up</a></li>
                        <li>

                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="#" class="drop-text">Professors</a></li>
                                <li><a href="#" class="drop-text">Statistics</a></li>
                                <li><a href="#" class="drop-text">Reviews</a></li>
                                <li><a href="#" class="drop-text">Courses</a></li>

                            </ul>
                        </li>
                        <li><a href="">Contact Us</a></li>
						<li>
                        <label for="drop-2" class="toggle">Dropdown<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">{{session()->get('uname')}} <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3" />
                            <ul>
                                <li><a href="#" class="drop-text">Professors</a></li>
                                <li><a href="#" class="drop-text">Statistics</a></li>
                                <li><a href="#" class="drop-text">Reviews</a></li>
                                <li><a href="/logout" class="drop-text">Log out</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
                    <br><br><br><br>
                    <ul>
                        <li style="color:#FFFFFF; text-align:center; font:medium; font-style:italic;">"Join a conversation and find teachers like you. Ask or answer a question, share your thoughts in a post, or join a conversation that’s already started".</li>
                    </ul>



                <!-- //nav -->

        </header>
        <!-- //header -->
    </div>
    <!-- //main -->
    <!-- banner-bottom -->
    <section>
           <form class="form-group" method="post">
                @csrf
                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-lg-6 form-group" align="right"><br><br>

                                <button type="submit"  name="submit" style="background-color:#2c81dc;border: none;color: white;padding: 15px 32px;text-align: center;
  text-decoration: none;display: inline-block;font-size: 16px;">Create Post</button><br><br>

                         </div>
                 </div>
    </section>
    <!-- //banner-bottom -->

    <!-- footer -->
    <br><br><br>
    {{-- <footer class="footer-content text-center py-5">

    </footer> --}}
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
@endif

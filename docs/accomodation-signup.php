<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="contact-page">
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">CIVIL</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>
                                <li><a href="index.php#home">HOME</a></li>
                                <li><a href="index.php#workshops">WORKSHOPS</a></li>
                                <li><a href="index.php#events">EVENTS</a></li>
                                <li><a href="index.php#lectures">LECTURES</a></li>
                                <li><a href="accomodation.php">ACCOMODATION</a></li>
                                <li><a href="about.php">CONTACT</a></li>
                                <?php
                                // Start the session

                                if(isset($_SESSION["cid"]))
                                {
                                  $print1 .="<li><a href='login.php'>LOGOUT</a></li>";
                                }
                                else {
                                  $print1 .="<li><a href='signup.php'>LOGIN</a></li>";
                                }
                                echo  $print1;
                                ?>


                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Accomodation</h2>

                        <!--<ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>Contact</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="main-content">
            <!--<div class="contact-page-map">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><!-- map -->

            <!--<div class="contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/phone.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Phone
                                    </div>
                                    <div class="entry-content">
                                        +45 677 8993000 223
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/mail.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        E-mail
                                    </div>
                                    <div class="entry-content">
                                        office@template.com
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-lg-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/place.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Address
                                    </div>
                                    <div class="entry-content">
                                        Main Str. no 45-46, b3, 56832,<br>
                                        Los Angeles, CA
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->
                </div>
            </div><!-- contact-details -->

            <div class="get-in-touch">
                <div class="entry-header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Accomodations</h2>
                    </div>
                </div>

                <div class="entry-content">
                    <p>Please enter the correct date, time and duration of the stay.<br> This will help us you plan accordingly and provide you with the best possible resources.</p>
                </div>

                <div class="contact-form">
                    <div class="row"></p>
                      <div class="col-12">
                          <input id="datepicker" width="276" />
                          <script>
                          $('#datepicker').datepicker();
                          </script>
                      </div><!-- col-4 -->
                        <p><BR></p>
                          <div class="col-12">
                            <input id="timepicker" width="276" />
    <script>
        $('#timepicker').timepicker();
    </script>
    <p><BR></p>
                          </div>
                        </div>
                        <div class="row">


                        <div class="col-6">
                        <select id="hours">
                          <option value="">&nbsp;&nbsp;&nbsp;&nbsp;Number of hours</option>
                          <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;24</option>
                          <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;48</option>
                          <option value="72">&nbsp;&nbsp;&nbsp;&nbsp;72</option>
                        </select>
                        </div>
                      </div>

                        <!--<div class="col-12">
                            <input id="when" name="when" type="date" min="2018-02-01" max="2018-12-01">
                        </div><!-- col-4 -->

                        <div class="col-12 submit flex justify-content-center">
                            <input type="button" onclick="regAccomodation()" value="Register" class="btn">
                        </div>


                        <!--<div class="entry-header">
                            <div class="entry-title">
                                <p>JUST THE BEST</p>
                                <h2>Get in touch</h2>
                            </div>
                        </div>

                        <div class="entry-content">
                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus.
                                Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                                Integer accumsan sodales odio, id tempus velit ullamcorper id.</p>
                        </div>


                        <div class="row">
                          <div class="col-6">
                          <select id="extras">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;Select for lunch and T-Shirt</option>
                            <option value="lunch">&nbsp;&nbsp;&nbsp;&nbsp;Lunch only</option>
                            <option value="tshirt">&nbsp;&nbsp;&nbsp;&nbsp;T-Shirt only</option>
                            <option value="lunch-tshirt">&nbsp;&nbsp;&nbsp;&nbsp;Lunch and T-Shirt</option>
                          </select>
                          </div>

                          <!--<div class="col-12">
                              <input id="when" name="when" type="date" min="2018-02-01" max="2018-12-01">
                          </div>

                          <div class="col-12 submit flex justify-content-center">
                              <input type="button" onclick="regExtras()" value="Register" class="btn">
                          </div>

                    </div>
                </div><!-- contact-form -->
            </div><!-- newsletter-subscribe -->
        </div><!-- main-content -->
    </div><!-- container -->



        <footer class="site-footer">
            <div class="footer-cover-title flex justify-content-center align-items-center">
                <h2>CIVIL</h2>
            </div><!-- .site-footer -->

            <div class="footer-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="entry-title">
                                <a href="#">SYMPO!</a>
                            </div><!-- entry-title -->

                            <div class="entry-mail">
                                <a href="mailto:help@civilisationceg.in?Subject=Hello%20again" target="_top">help@civilisationceg.in</a>
                            </div><!-- .entry-mail -->

                            <div class="copyright-info">
                                This site is made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" style="color: #7443A1;" target="_blank">Chennai</a>
                            </div><!-- copyright-info -->

                            <div class="footer-social">
                                <ul class="flex justify-content-center align-items-center">
                                    <li><a href="https://fb.com/au.civilisation"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="tel:+91‭8489732365‬"><i class="fa fa-phone fa-rotate-90"></i></a></li>
                                    <li><a href="mailto:help@civilisationceg.in?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-address-book"></i></a></li>-->
                                    <li><a href="https://api.whatsapp.com/send?phone=91‭9092859699‬"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://goo.gl/forms/7aUhSw8LaI6rfAn52"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- footer-social -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- footer-content-wrapper -->
        </footer><!-- site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/main.js'></script>
</body>
</html>

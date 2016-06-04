<?php
// 1) Start Session and Require Connection
session_start();
require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yara Said</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>


    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#selfies">Send a Selfie</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Social</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Art Request</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading">Yara Said</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What Yara does</h2>
                    <h3 class="section-subheading text-muted">... and even more</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Art Therapy</h4>
                    <p class="text-muted">Art can alleviate the traumas of many refugees. It is one of my passions to facilitate this process.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tint fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Creative projects</h4>
                    <p class="text-muted">The canvas is out my outlet, everything that I have felt and have seen is translated into my creative projects</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">community-art projects</h4>
                    <p class="text-muted">The community is what I aim to serve. Art creates community. Art is the community</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Check out some things I have been working on..</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-1.jpg" class="img-responsive" alt="Yara-2.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>The Endeavor</h4>
                        <p class="text-muted">Oil</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Changes</h4>
                        <p class="text-muted">Acrylic</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>The Great Challenge</h4>
                        <p class="text-muted">Water-paint</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Damascus</h4>
                        <p class="text-muted">Acrylic</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Water-paint & Latex</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Yara-6.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Latex</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Selfie Section -->
    <section id="selfies">
      <div class="container">
        <div class="row">
          <form action="selfie.php" method="post" enctype="multipart/form-data">
              <h2 class="section-heading text-center">Upload a Selfie and I will make it into Art!</h2>
              <div class="form-group">
                  <input type="text" name="name" class="form-control text-center" placeholder="Please enter your name">
                  <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                  <input type="text" name="description" class="form-control text-center" placeholder="Your selfie description">
                  <p class="help-block text-danger"></p>
              </div>
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Selfie" name="selfie_submit" class="btn">
          </form>
        </div>
        <div id="selfie_errors">
          <?php
          if(isset($_SESSION['errors']))
          {
          foreach($_SESSION['errors'] as $error){echo $error;}
          unset($_SESSION['errors']);
          $_SESSION['errors']=array();
          }
          ?>
      </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Life in Moments</h2>
                    <h3 class="section-subheading text-muted">From then 'till now..</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>May 1991</h4>
                                    <h4 class="subheading">My Humble Beginning</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Born in the city of Damascus, to an open-minded but traditional Syrrian family. Since Generations my family have been artisinal creators.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>June 2000</h4>
                                    <h4 class="subheading">My First Creation</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This was the day my dad brought back a painting set, and this is also the day that I for the first time saw the potential of a canvas and a bit of paint. This was the day I fell in love.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2010</h4>
                                    <h4 class="subheading">Graduation day</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Graduated from the Art University of Damascus. According to the world I somehow now had a certificate proving that I am actually a qualified artist. F*ck Insitutionalized education.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Moved to the Netherlands</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The situation in Syria caused me to make my way to Europe, and start a new life here.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Follow my adventures in the online world</h2>
                    <h3 class="section-subheading text-muted">Although social media sucks..</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img src="img/team/Yara_Said.jpg" class="img-responsive img-circle" alt="">
                        <h4>Yara Said</h4>
                        <p class="text-muted">Artist</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/saiddyara"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/Yara-Said-845028635568261/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/yara-said-526804113"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Art has made me who I am, it is my start and my finish. It is everything to me. Nothing can try to to contain this relationship.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted">Make an art request.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Request *" id="request" required data-validation-required-message="Please specify your request. Think of possible themes, emotions or scenarios. Your request remains 100% anonymous."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Yara 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>The Endeavor</h2>
                            <p class="item-intro text-muted">July 2014</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-1.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Changes</h2>
                            <p class="item-intro text-muted">June 2012</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-2.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>The Great Challenge</h2>
                            <p class="item-intro text-muted">April 2015</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-3.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Damascus</h2>
                            <p class="item-intro text-muted">May 2016</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-4.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Escape</h2>
                            <p class="item-intro text-muted">November 2013</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-5.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Dreams</h2>
                            <p class="item-intro text-muted">January 2016</p>
                            <img class="img-responsive img-centered" src="img/portfolio/Yara-6.jpg" alt="">
                            <p>This picture hanging on this wall is painted on a very large, wide canvas. If you stand in the middle, it seems to expand indefinitely on either side of you.
                            It's an abstract work, without any hint of representation. Its colors are sombre: black, blue, grey, brown and white on an off-white background. It's painted in Jackson Pollock's famous 'drip' technique. And there's no better way of describing the way it looks than to explain the way it was painted. Pollock laid the canvas flat on the floor.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>

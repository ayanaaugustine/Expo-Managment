<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Exhibitor</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/bootstrap.min.css" >    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/responsive.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="exhibitor/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="exhibitor/fonts/simple-line-icons.css"> 
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/nivo-lightbox.css" > 
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/owl.carousel.css">   
    
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="exhibitor/css/colors/default.css" media="screen" /> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Roof area Starts -->
      <div id="roof" class="hidden-xs">
          <div class="container">
            <div class="col-md-6 col-sm-6">
              <!--<div class="info-bar-address">
                 <i class="icon-location-pin"></i> San Francisco, CA, United States
              </div>-->
            </div>
            <div class="col-md-6 col-sm-6">
              <!-- Quick Contacts Starts -->
              <div class="quick-contacts">
                  <!--<span><i class="icon-phone"></i> (00) 123 456 789</span>-->
                  <span><i class="icon-envelope"></i><a href="#">{{ Auth::user()->email }}</a></span>
              </div>
              <!-- Quick Contacts End -->
            </div>
          </div>
      </div>
      <!-- Roof area End -->

      <!-- Nav Menu Section Start -->
      <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event" >
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="assets/img/logo1.png" alt=""></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Pages <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                    <li><a href="{{ ('about') }}">About Us</a></li>
                    <li><a href="gallery.html">profile</a></li>
                    <li><a href="{{ ('pricing') }}">Ticket details</a></li>
                    
                  </ul>
                </li>                
                           
                <li><a href="speakers.html">Add Expo</a></li>                
                <!--<li><a href="blog.html">Blog</a></li>             
                <li class="animated bounceIn"><a href="{{ ('pricing') }}">Buy Tickets</a></li>-->                
                <li><a href="">booth allocation</a></li> 
                <li><a  class="main-menubar d-flex align-items-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>               
              </ul>
            </div><!-- /navbar-collapse -->
          </div><!-- /container -->

          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a>
               <ul class="dropdown">
                <li><a href="{{ ('about') }}">About Us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>
                <li><a href="sponsors.html">Sponsors</a></li>
                <li><a href="single-post.html">Single Post</a></li>
              </ul>
            </li>                
            <li><a href="schedule.html">Schedule</a></li>              
            <li><a href="speakers.html">Speakers</a></li>                
                       
           <li><a href="contact.html">Contact</a></li> 
           </ul>
          <!-- Mobile Menu End -->

        </nav>
      </div>
      <!-- Nav Menu Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Main Slider Section Start -->
    
        <!-- Wrapper for slides -->
        <!--<div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/img/slider/bg-1.jpg" alt="">
            <div class="carousel-caption">
              <h2 class="wow fadeInRight" data-wow-delay="300ms">Impression - Startup Event<br> Join us be The First to Book Your Ticket</h2>
              <div class="buttons wow fadeInDown" data-wow-delay="0.2s"><a class="btn btn-lg btn-border" href="#">Registration</a></div>
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/slider/bg-2.jpg" alt="">
            <div class="carousel-caption">
              <h2 class="wow fadeInUp" data-wow-delay="300ms">Opportunity to showcase<br> your product and services to attendees</h2>
              <div class="buttons">
              <a class="btn btn-lg btn-common wow fadeInLeft" data-wow-delay="300ms" href="#">Buy Tickets</a>
              <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="#">Know More</a>
              </div>                
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/slider/bg-3.jpg" alt="">
            <div class="carousel-caption">
              <h2 class="wow fadeInDown" data-wow-delay="300ms">Expert and Love to Speak? <br> Apply as Speaker for Taking Session</h2>
              <div class="wow fadeInUp" data-wow-delay="300ms"><a class="btn btn-lg btn-common" href="#">Apply Now</a></div>
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <!--<a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
          <span class="icon-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
          <span class="icon-arrow-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
    <!-- Main Slider Section End -->

        <!-- Call to action Section -->
        <!--<section id="event" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="wow animated slideInRight" data-wow-delay=".4s"><a rel="nofollow" href="https://rebrand.ly/gg-impression-purchase">Purchase Full Version to Get All Pages and Features</a></h2>
                        <a rel="nofollow" href="https://rebrand.ly/gg-impression-purchase" class="wow animated fadeInUp btn btn-common mt-50" data-wow-delay=".6s"><i class="fa fa-shopping-cart"></i> Purchase Now!<div class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action Section End -->


    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0s">THE EXPO</h2>
            <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
          </div>
          <!--<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
              <a href="#"><img src="assets/img/sponsors/logo-01.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
              <a href="#"><img src="assets/img/sponsors/logo-02.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
              <a href="#"><img src="assets/img/sponsors/logo-03.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
              <a href="#"><img src="assets/img/sponsors/logo-04.png" alt=""></a>
            </div>            
          </div>
        </div>
      </div>
    </section>
    
     Sponsors Section End --> 
    <section id="sponsors" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0s">About</h2>
            <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Expo Management is totally built at administrative end and thus only the administrator is guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Tickets, Company, Customers, Bookings. 
With the increasing growth in the number of industries and the competitive run for the trophy of perfection and profit, these industries round the globe are in the lookout for a roof to exhibit their products in the most convenient, profitable and successful means. Chambers of Commerce and Industrial Associates around the world conduct expos or large trade fairs and exhibitions with the aim of promoting their products and companies. The organizers face a huge amount of effort in conduction such large scale expos. Nevertheless, organizing such exhibitions not only give companies good exposure but also servers to agree upon big deals and agreements with other corporate or potential clients. </p>
          </div>
          <!--<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
              <a href="#"><img src="assets/img/sponsors/logo-01.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
              <a href="#"><img src="assets/img/sponsors/logo-02.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
              <a href="#"><img src="assets/img/sponsors/logo-03.png" alt=""></a>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
              <a href="#"><img src="assets/img/sponsors/logo-04.png" alt=""></a>
            </div>            
          </div>
        </div>
      </div>
    </section>
    

        <!-- Call to action Section -->
        <!--<section id="event" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="wow animated slideInRight" data-wow-delay=".4s"><a rel="nofollow" href="https://rebrand.ly/gg-impression-purchase">Purchase Full Version to Get All Pages and Features</a></h2>
                        <a rel="nofollow" href="https://rebrand.ly/gg-impression-purchase" class="wow animated fadeInUp btn btn-common mt-50" data-wow-delay=".6s"><i class="fa fa-shopping-cart"></i> Purchase Now!<div class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action Section End -->

    <!-- Footer Section Start -->   
    <footer class="section">  
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h3><img src="assets/img/footer-logo.png" alt=""></h3>
            <p>
              If you think you have the passion, 
              attitude and capability to join us 
              the next big software company
              s so that we can get the convers.
            </p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h3>Support</h3>
            <ul>
              <li><a href="#">Support</a></li>
              <li><a href="#">Docs</a></li>
              <li><a href="#">Contact Us</a></li>               
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h3>Learn More</h3>
            <ul>
              <li><a href="#">How it Works</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Log In</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h3>Quick Link</h3>
            <ul>
              <li><a href="#">Schedule</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>          
        </div>
      </div>      
    </footer>  
    <!-- Footer Section End -->  
   
    </div>
    <!-- Main contetn End -->

    <!-- Copytight Start -->
    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text text-center">
             ©Designed and Developed by 
              <a rel="nofollow" href="http://graygrids.com">
                GrayGrids
              </a>
            </p>
          </div>
        </div>
      </div>
    </section> 
    <!-- Copytight End -->   

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
    </a>

     

    <!-- jQuery Load -->    
    <script src="exhibitor/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="exhibitor/js/bootstrap.min.js"></script>
    <!-- Countdown Js -->
    <script src="exhibitor/js/jquery.countdown.min.js"></script>
    <!-- Smooth scroll JS -->   
    <script src="exhibitor/js/smooth-scroll.js"></script>        
    <!-- Wow Scroll -->
    <script src="exhibitor/js/wow.js"></script>
    <!-- Owl carousel -->
    <script src="exhibitor/js/owl.carousel.min.js"></script>
    <!-- Slicknav js -->
    <script src="exhibitor/js/jquery.slicknav.js"></script>
    <!--  Nivo lightbox Js -->
    <script src="exhibitor/js/nivo-lightbox.js"></script>   
    <!-- Contact Form Scripts -->
    <script src="exhibitor/js/form-validator.min.js"></script>  
    <script src="exhibitor/js/contact-form-script.js"></script>    
 
    <!-- All Js plugin -->
    <script src="assets/js/main.js"></script> 
    <!-- Map JS -->
    <script type="text/javascript" src="exhibitor/js/jquery.mapit.min.js"></script>
    <script src="exhibitor/js/initializers.js"></script>

  </body>
</html>
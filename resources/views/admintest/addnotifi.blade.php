<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="test/img/favicon.png">

  <title>Expo Managment</title>

  <!-- Bootstrap CSS -->
  <link href="test/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="test/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="test/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="test/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="test/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="test/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="test/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="test/css/owl.carousel.css" type="text/css">
  <link href="test/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="test/css/fullcalendar.css">
  <link href="test/css/widgets.css" rel="stylesheet">
  <link href="test/css/style.css" rel="stylesheet">
  <link href="test/css/style-responsive.css" rel="stylesheet" />
  <link href="test/css/xcharts.min.css" rel=" stylesheet">
  <link href="test/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="../index.php" class="logo">Expo<span class="lite">Managment</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">{{ Auth::user()->email }}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              
              <li>
              <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ ('home') }}">
                          <i class="icon_house_alt"></i>
                          <span>HOME</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_document_alt"></i>
                          <span>VIEW REQUESTS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ ('/listcompany') }}"> company</a></li>
              <li><a class="" href="{{ ('/listrexhi') }}">Exhibitor</a></li>
			   
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="{{ ('home') }}" class="">
                          <i class="icon_document_alt"></i>
                          <span>NOTIFICATION</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/toys.php"> Add</a></li>
              <li><a class="" href="admin/toys1.php">Delete</a></li>
			   <li><a class="" href="toys2.php"> Update</a></li>
            </ul>
          </li>
          <li class="active">
            <a class="" href="{{ ('home') }}">
                          <i class="icon_house_alt"></i>
                          <span>ADD LANDMARK</span>
                      </a>
          </li>
         
         
          
         
         
          <!--<li id="menu-comunicacao" ><a href="admin_list_house_memers.php"><i class="fa fa-book nav_icon"></i><span>House Members Details</span><span <class="fa fa-angle-right" style="float: right"></span></a>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Notification</span><span <class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="admin_notification.php">Add</a>		              
		            </li>
		             <li id="menu-arquivos" ><a href="notification_view.php">View</a></li>
		            <li id="menu-arquivos" ><a href="notification_delete.php">Delete</a></li>
		            <li id="menu-arquivos" ><a href="notification_update.php">Update</a></li>
		          </ul>
		        </li>-->
          <li class="sub-menu">
            <a href="{{ ('home') }}" class="">
            <span>APPROOVE EXPO</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/toys.php"> View & Response</a></li>
              </ul>

          </li>
         
		            <!--<li class="sub-menu">
           <a href="admin/javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>ADS & NEWS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/toys.php"> Add</a></li>
              <li><a class="" href="admin/toys1.php">Delete</a></li>
              </ul>
          </li>

         <li class="sub-menu">
           <a href="admin/javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>CHITTY</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/toys.php"> Add</a></li>
              <li><a class="" href="admin/toys.php"> Chitty Members</a></li>
              <li><a class="" href="admin/toys.php"> Chitty Pay</a></li>
              <li><a class="" href="admin/toys.php"> Chitty Result</a></li>
              </ul>
          </li>

          <li class="sub-menu">
           <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          
          <span>EMPLOYEE BOOKING</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
           
         <!-- </li>
		  <li class="sub-menu">
           <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Add names</span>
						  <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
					   <ul class="sub">
              <li><a class="" href="adboy.php">Boy Names</a></li>
              <li><a class="" href="adgirl.php">Girl Names</a></li>
            </ul>
          </li>

<li class="sub-menu">
           <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>View</span>
						  <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
					   <ul class="sub">
              <li><a class="" href="viewproduct.php">Added products</a></li>
              
            </ul>
          </li> 
          <li class="sub-menu">
            <a href="admin/javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.php">Profile</a></li>
              <li><a class="" href="../login.php"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>-->
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>ADMIN HOME</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <!--<div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">6.674</div>
              <div class="title">Download</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

         <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">7.538</div>
              <div class="title">Purchased</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Order</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Stock</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

<style>

#table1 tr{border:solid 1px #000;}

</style>


<form  action="/addnotification" >
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
							<tr>
							<td>
                                <div  class="input-group"><label style="color:black">Notification    </label></td>
								
								<td>
                                  <input style="margin-right=200" class="input--style-4 form-control" type="text" name="notification" pattern="[a-zA-Z]+$+[a-zA-Z]" oninput="this.reportValidity()" required="" title="Name should only contain letters.">
                                </td>
								</tr>
								</div>
                            </div>
                            
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>-->
                        </div>
                        
                        <div class="p-t-15">
						<tr>
						<td></td>
						<td>
						<br>
            <br>
            <br>
                            <button style="background:black;padding:1% 7%;border-radius:20px"  type="submit" ><label style="color:white">ADD</label></button>
                        </div>
						</td>
						</tr>
					</form>
								
					</div>

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-9 col-md-12">

           <!-- <div class="panel panel-default">
             <!-- <div class="panel-heading">
                <!--<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                

            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
             
              
             
            </ul>
          </div>


        </div>


        <!-- Today status end -->



        <!--<div class="row">

         
                        
                          
                          
                        
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
         <!-- <div class="col-md-3">

            
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
         <!-- <div class="col-md-3">

           
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->




       
                <!-- Widget content -->
               <!-- <div class="padd sscroll">

                  <ul class="chats">

                    
          </div>
        </div><br><br>

       


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="test/js/jquery.js"></script>
  <script src="test/js/jquery-ui-1.10.4.min.js"></script>
  <script src="test/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="test/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="test/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="test/js/jquery.scrollTo.min.js"></script>
  <script src="test/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="test/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="test/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="test/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="test/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="test/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="test/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="test/js/calendar-custom.js"></script>
    <script src="test/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="test/js/jquery.customSelect.min.js"></script>
    <script src="test/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="test/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="test/js/sparkline-chart.js"></script>
    <script src="test/js/easy-pie-chart.js"></script>
    <script src="test/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="test/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="test/js/xcharts.min.js"></script>
    <script src="test/js/jquery.autosize.min.js"></script>
    <script src="test/js/jquery.placeholder.min.js"></script>
    <script src="test/js/gdp-data.js"></script>
    <script src="test/js/morris.min.js"></script>
    <script src="test/js/sparklines.js"></script>
    <script src="test/js/charts.js"></script>
    <script src="test/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

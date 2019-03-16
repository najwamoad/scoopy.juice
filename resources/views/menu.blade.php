<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Scoop.juice</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
   
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="vendors/js-calender/zabuto_calendar.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       <div id="preloader">
            <div class="loader absolute-center">
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
            </div>
        </div>
       
        <!--================ Frist hader Area =================-->
        <div class="first_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                         <div class="header_contact_details">
                            <a href="#"><i class="fa fa-phone"></i>+971 52 363 6139 </a>
                            <a href="#"><i class="fa fa-envelope-o"></i>scoopyjuice@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_btn_inner">
                            <a class="event_btn" href="/entabel"><i class="fa fa-calendar" aria-hidden="true"></i>{{ __('words.BookaTable')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Footer Area =================-->
        
        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Scoop.juice</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="/enHome">{{ __('words.Home')}}</a></li>
                           
                            <li><a href="/enAbout">{{ __('words.About')}}</a></li>
                            <li><a href="/enmenu">{{ __('words.MENU')}}</a></li>
                            <li><a href="/engallery">{{ __('words.gallery')}}</a></li>
                           <li><a href="/enNews">{{ __('words.NEWS')}}</a></li>
                            
                            <li><a href="/enconect">{{ __('words.CONTACTUS')}}</a></li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Blog Details</h4>
                    <a href="#">Home</a>
                    <a href="blog.html">Blog</a>
                    <a class="active" href="blog-details.html">Details</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog List Area =================-->
        <section class="blog_list_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row contact_form_area">
                            <h3 class="contact_title">Book an order</h3>
                            <form action="/chang" method="post">
                                {{ csrf_field() }}
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{old('employee_name')}}" placeholder="employee_name*">
                                </div>
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{old('customer_phone')}}"placeholder="customer_phone*">
                                </div>
                               
                              <div class="form-group col-md-12">
                                  <input type="email" class="form-control" id="number_table" name="number_table" value="{{old('number_table')}}" placeholder="number_table*">
                                </div>
                                
                                  <div class="form-group col-md-12">
                                    <button class="btn btn-default submit_btn" type="submit">Send order</button>
                                 </div>
                            </form>
                            @if ($errors->any())
                           <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                             </div>
                           @endif
                            <div id="success">
                                <p>Your text message sent successfully!</p>
                            </div>
                            <div id="error">
                                <p>Sorry! Message not sent. Something went wrong!!</p>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
     </section>
        <!--================End Blog List Area =================-->
        
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                    <h4>ABOUT  </h4>
                                </div>
                                <p> scopy top and the rest photoshop.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <p>Have questions, comments or just want to say hello:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>scoopyjuice@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+971523636139</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i> ajman_sheikh khalifa,<br /> golden tower next to dana mall</a></li>
                                </ul>
                            </aside>
                        </div>
                        
                        
                        <div class="col-md-3">
                            <aside class="f_widget gallery_widget">
                                <div class="f_w_title">
                                    <h4>Gallery On Flickr</h4>
                                </div>
                                <table  >
                                <tr>
                                    <td><a href="#"><img src="img/2.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                    <td><a href="#"><img src="img/77.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td><a href="#"><img src="img/sh.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                    <td><a href="#"><img src="img/545.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td><a href="#"><img src="img/777.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                   <td><a href="#"><img src="img/6666.jpg" width=150 height=150 alt=""><i class="fa fa-search"></i></a></td>
                                </tr>
                                </table>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></h5>
                    </div>
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="/enHome">Home</a></li>
                            <li ><a href="/enAbout">About Us</a></li>
                            <li><a href="/enmenu">Menu</a></li>
                            <li><a href="/engallery">Gallery</a></li>
                            
                            <li><a href="/enNews">News</a></li>
                            <li><a  href="/enconect">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Recent Blog Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>

        
        <script src="js/theme.js"></script>
    </body>
</html>
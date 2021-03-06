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
                            <a class="event_btn" href="/enEvents"><i class="fa fa-table" aria-hidden="true"></i>{{ __('words.BookanEvent')}}</a>
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
                    <h4>Table Form</h4>
                    <a href="#">Home</a>
                    <a class="active" href="table.html">Table Form</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Booking Table Area =================-->
        <section class="booking_table_area booking_area_white">
            <div class="container">
                <div class="s_black_title">
                    <h3>Book a</h3>
                    <h2>Table</h2>
                    <p>Booking Table.</p>
                </div>
                <div class="row">
                <form action="/add" method="post">
                {{ csrf_field() }}
                    <div class="col-md-3">
                        <div class="input-append date form_datetime">
                            <input size="16" name="start_date" id="start_date" value="{{old('start_date')}}" type="text" value="" readonly placeholder="Date">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-append date form_time">
                            <input size="16" name="end_date" id="end_date"  type="text"readonly placeholder="Dining Time">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" ">
                            <input name="mobile_customer" id="mobile_customer" value="{{old('mobile_customer')}}" type="text"  placeholder="number phone">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="party_size">
                            <select class="selectpicker" id="number_people"   name="number_people">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                            </select>
                        </div>
                    </div>
                 

              @if ($errors->any())
          <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
          @endif
          <section class="our_feature_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>Choose the meals you want to prepare for you</h3>
                </div>
                <select name="cars">
                @if(count($categories))
                        @foreach($categories as $category) 
                        <option value="{{$category->categoria_name}}" onchange="catSelect">{{$category->categoria_name}}</option>
                        @endforeach
                @endif
                </select>
                <script>
                function catSelect()
                {
                    
                }
                </script>
                
                <div class="feature_slider">
                   
                    @if(count($t))
                        @foreach($t as $s) 
                        <div class="item">
                        <div class="feature_item">
                            <div class="feature_item_inner">
                                <img src="{{$s->picture}}" style="width:30%px;  height: 250px;"alt="">
                            </div>
                            <div class="title_text">
                                <div class="feature_left"><a href="table.html"><span>{{$s->food_name}}</span></a>
                                
                                <h6> components: {{$s->components}}</h6>
                                 <h6> price: {{$s->price_per_dish}}</h6>
                                </div>
                                 <input type="textbox"/>
                            </div>
                        </div>
                        </div>
                    @endforeach 
                     @endif 
                     
                </div>
            </div>
        </section>
        
        <div class="col-md-3">
                        <button type="submite" class="btn btn-default submit_btn">BOOK MY TABLE</button>
                    </div>
                </div>
                
                </form>
                
                <div class="row map_contact">
                    <div class="col-md-6">
                        <div class="map_area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.8666396062!2d-74.25819367467702!3d40.70531099097622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1489317146051" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_contact_info">
                            <h3>Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor utim labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <ul>
                                <li><a href="#"><span>Address:</span>RedCayenne Restaurant, 414 Columbus Ave, San Francisco, CA 94133</a></li>
                                <li><a href="#"><span>Phone:</span>+0 000-000-0000</a></li>
                                <li><a href="#"><span>Phone</span> support@themeXart.com</a></li>
                            </ul>
                            <h4>Opening Times</h4>
                            <h5>Monday - Friday 9am - 11pm</h5>
                            <h5>Saturday 2pm - 10pm | Sunday 2pm - 10pm</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Booking Table Area =================-->
        
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                    <h4>ABOUT RedCayenne</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.</p>
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
                                    <li><a href="#"><i class="fa fa-envelope"></i>backpiper.com@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+88 01911 854 378</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>5001 E. Colorado Blvd. Suite 820,<br /> Pasadena, CA 91106</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h4>Twitter Feed</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget gallery_widget">
                                <div class="f_w_title">
                                    <h4>Gallery On Flickr</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-1.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-2.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-3.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-4.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-5.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-6.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                </ul>
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
                            <li><a href="/enHome">Home</a></li>
                            <li ><a href="/enAbout">About Us</a></li>
                            <li><a   href="/enmenu">Menu</a></li>
                            <li><a href="/engallery">Gallery</a></li>
                            
                            <li><a  href="/enNews">News</a></li>
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
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
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
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
        
        <!--================Slider Area =================-->
        <section class="slider_area">
            <div class=slider_inner>
                <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="home-slider">
                 
                    <ul> 
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/home-slider/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box">
                               <div class="tp-caption bg_box" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-x="center" 
                                    data-y="['350','350','300','250','0']"
                                    data-fontsize="['55']" 
                                    data-lineheight="['60']" 
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['-20']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['42','42','42','42','25']"
                                    data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Welcome To Our
                                </div>
                                <div class="tp-caption secand_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['45']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['36']"
                                    data-lineheight="['42']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Scoop.Juice
                                </div>
                                <div class="tp-caption third_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['100']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['24','24','24','24','16']"
                                    data-lineheight="['34','34','34','34','26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
                                </div>
                                <div class="tp-caption btn_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['180']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['16.75']"
                                    data-lineheight="['26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" ><a class="submit_btn_bg" href="#">Look Menu</a>
                                </div>
                            </div>
                        </li>
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/55.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box text_box2">
                               <div class="tp-caption bg_box" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-x="center" 
                                    data-y="['350','350','300','250']"
                                    data-fontsize="['55']" 
                                    data-lineheight="['60']" 
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['-20']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['42','42','42','42','25']"
                                    data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Welcome To Our
                                </div>
                                <div class="tp-caption secand_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['45']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['36']"
                                    data-lineheight="['42']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Scoop.juice
                                </div>
                                <div class="tp-caption third_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['100']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['24','24','24','24','16']"
                                    data-lineheight="['34','34','34','34','26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
                                </div>
                                <div class="tp-caption btn_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['180']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['16.75']"
                                    data-lineheight="['26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" ><a class="submit_btn_bg" href="#">Look Menu</a>
                                </div>
                            </div>
                        </li>
                    
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/ss.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box text_box2">
                               <div class="tp-caption bg_box" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-x="center" 
                                    data-y="['350','350','300','250']"
                                    data-fontsize="['55']" 
                                    data-lineheight="['60']" 
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['-20']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['42','42','42','42','25']"
                                    data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Welcome To Our
                                </div>
                                <div class="tp-caption secand_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['45']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['36']"
                                    data-lineheight="['42']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Scoop.juice
                                </div>
                                <div class="tp-caption third_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['100']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['24','24','24','24','16']"
                                    data-lineheight="['34','34','34','34','26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
                                </div>
                                <div class="tp-caption btn_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['180']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['16.75']"
                                    data-lineheight="['26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" ><a class="submit_btn_bg" href="#">Look Menu</a>
                                </div>
                            </div>
                        </li>
                    </ul> 
                    
                </div><!-- END REVOLUTION SLIDER -->
            </div>
          
        </section>
        <!--================End Slider Area =================-->
        @yield('content')
 


       

        
        <!--================Our feature Area =================-->
        <section class="our_feature_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>offers</h3>
                </div>
                
                <div class="feature_slider">
                   
                    @if(count($l))
                        @foreach($l as $s) 
                        <div class="item">
                        <div class="feature_item">
                            <div class="feature_item_inner">
                                <img src="{{$s->picture}}" style="width:30%px;  height: 250px;"alt="">
                            </div>
                            <div class="title_text">
                                <div class="feature_left"><a href="table.html"><span>{{$s->offers_text}}</span></a>
                                <h6>offers from data : {{$s->start_date}}</h6>  <h6>to data :{{$s->end_date}} </h6>
                                 <h6> price: {{$s->offers_price}} AED</h6></div>
                            </div>
                        </div>
                        </div>
                    @endforeach 
                     @endif 
                     
                </div>
            </div>
        </section>
        
        <!--================End Our feature Area =================-->
         <!--================Booking Table Area =================-->
         
         <section class="booking_table_area" style="background: url(../img/5.jpg) no-repeat fixed center center;">
            <div class="container">
                <div class="s_white_title">
                    <h3>Book a</h3>
                    <h2>Table</h2>
                    <p>Booking Table.</p>
                </div>
                <div class="row">
                <form action="/add" method="post">
                {{ csrf_field() }}
                    <div class="col-md-3">
                        <div class="input-append date form_datetime">
                            <input size="16" name="start_date" id="start_date" type="text" value="" readonly placeholder="Date">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-append date form_time">
                            <input size="16" name="end_date" id="end_date" type="text" value="" readonly placeholder="Dining Time">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" ">
                            <input name="mobile_customer" id="mobile_customer" type="text" placeholder="number phone">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="party_size">
                            <select class="selectpicker" id="number_people" name="number_people">
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
                    <div class="col-md-3">
                        <button type="submite" class="btn btn-default submit_btn">BOOK MY TABLE</button>
                    </div>
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
        </section>

        
        <!--================End Booking Table Area =================-->
        
        
        <!--================End Our feature Area =================-->
        <section class="most_popular_item_area">
            <div class="container">
                <div class="s_white_title">
                    <h3>Most Popular</h3>
                    <h2>Today's Menu</h2>
                </div>
                <div class="popular_filter">
                    <ul>
                       
                    @if(count($categories))
                        @foreach($categories as $category) 
                       <li> <a href="/{{$category->categorie_id}}"><h3 onclick="javascript:window.location.href='/{{$category->categorie_id}}'">{{$category->categoria_name}}</h3></a>
                       </li>
                        
                        @endforeach
                    @endif
                       
                    </ul>
                </div>
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                        @if(count($t))
                        @foreach($t as $s)
                        <div class="col-md-6 break coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{$s->picture}}"style="width:30%px;  height: 100px; alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>{{$s->food_name}}</h3></a>
                                    <h4> {{$s->price_per_dish}}AED</h4>
                                    <p>{{$s->components}}</p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       @endif
                    
                       
                         
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our feature Area =================-->
        
        <!--================Our Chefs Area =================-->
        <section class="our_chefs_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>{{ __('words.Meet')}}</h3>
                    <h2>{{ __('words.Ouremp')}}</h2>
                </div>
                <div class="chefs_slider_active">
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/1.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>patrick olmedo</h4></a>
                                    <h5>Chef</h5>
                                    <p> Chef .</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Chef</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/2.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>regina elizon</h4></a>
                                    <h5>Chef</h5>
                                    <p> Chef.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>regina elizon</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/3.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>milisia robls</h4></a>
                                    <h5>Chef mini pancake,waffle ,chimney</h5>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>milisia robls</h3>
                                    <h4>Chef mini pancake,waffle ,chimney</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/4.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>junis timinia</h4></a>
                                    <h5>cashier and clearing agent </h5>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>junis timinia</h3>
                                    <h4>cashier and clearing agent</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/5.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>mostafa abdalhafz</h4></a>
                                    <h5>Chef fruits salad and juice</h5>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>mostafa abdalhafz</h3>
                                    <h4>Chef fruits salad and juice</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                         <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="emp/6.jpeg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>mark tisaro</h4></a>
                                    <h5>cashier assistant</h5>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>mark tisaro</h3>
                                    <h4>cashier assistant</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Chefs Area =================-->
        
        <!--================End Our Chefs Area =================-->
        <section class="next_event_area">
            <div class="container">
                <div class="s_white_red_title">
                    <h3>best dish for this week</h3>
                     
                </div>
               
               
                    <div class="item">
                    
                        <div class="col-md-6">
                        @if(count($e))
                        @foreach($e as $s)  
                            <div class="row">
                                <div class="left_event_img">
                                    <img src="{{$s->imag}}" width=500  height=500 alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach 
                        @endif
                        <div class="col-md-6">
                            <div class="row">
                                <div class="right_event_text">
                                    
                                    <a href="#"><h2>Best dish for this week</h2></a>
                                    
                                    <h1>According to the customers' requests, according to their opinions, this dish is the best dish for this week.. </h1>
                                    
                                </div>
                            </div>
                        </div>
                       
                </div>
            </div>
        </section>
        <!--================End Our Chefs Area =================-->
        
        <!--================Recent Blog Area =================-->
        <section class="recent_bloger_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>advertisements</h3>
                    <h2>Recent Blog</h2>
                </div>
                <div class="row">
                 @if(count($o))
                        @foreach($o as $s)
                    <div class="col-md-4">
                        <div class="recent_blog_item">
                            <div class="blog_img">
                                <img src="{{$s->picture}}" width=300 height=300 alt="">
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="#">advertisements</a></h6>
                                    <p>{{$s->names}}.</p>
                                  
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                        @endif
                     
                </div>
            </div>
        </section>
        <!--================End Recent Blog Area =================-->
        
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
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        <!--gmaps Js-->
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->
<!--        <script src="js/gmaps.min.js"></script>-->
        
        
<!--        <script src="js/video_player.js"></script>-->
        <script src="js/theme.js"></script>
    </body>
</html>
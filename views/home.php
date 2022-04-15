<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <link rel="icon" href="favicon.ico">

    <title>ConsultIt - Consulting &nbsp; Finance HTML Template</title>
    <meta name="author" content="Mannat Studio">     
    <meta name="description" content="Consultit">
    <meta name="keywords" content="Consultit,">

    <!-- Bootstrap core CSS -->
    <link href="<?=$asset?>/css/base.css" rel="stylesheet" type="text/css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/revolution/css/navigation.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?=$asset?>/js/modernizr-2.6.2.min.js"></script>
  </head>

  <body>
    <!-- xxx Loader Start xxx -->
    <div class="preloader bg-orange">
        <div class="content">
            <img src="images/logo_anim.svg" alt="">
            <div class="nk-preloader-spinner"></div>
        </div>  
    </div>
    <!-- xxx End xxx -->

    <!-- xxx Header Start xxx -->
    <header class="fixed-top header-fullpage bordered-nav wow fadeInDown">
        <div class="top-bar-right d-flex align-items-center text-md-left">
          <div class="container-lg">
            <div class="row align-items-center">
              <div class="col d-flex">
                <div class="top-text">
                    <small class="txt-black">Address</small>
                    254 Street Avenue, LA US
                </div>            
                <div class="top-text">
                    <small class="txt-black">Emaii Us</small>
                    <a href="#">support@consutlit.com</a>
                </div>
                <div class="top-text">
                    <small class="txt-black">Phone Number</small>
                    +88 (0) 202 0000 001
                </div>        
              </div>
              <div class="col-md-auto hide-on-small">

                <!-- Topbar Language Dropdown Start -->
                <div class="dropdown d-inline-flex lang-toggle shadow-sm">
                  <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                    <img src="images/us.svg" alt="" class="dropdown-item-icon"> 
                    <span class="d-inline-block d-lg-none">US</span>
                    <span class="d-none d-lg-inline-block">US</span> <i class="icofont-rounded-down"></i>
                  </a>
                  <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                    <a class="dropdown-item active" href="#">English</a>
                    <a class="dropdown-item" href="#">Deutsch</a>
                    <a class="dropdown-item" href="#">Español&lrm;</a>
                  </div>
                </div>            
                <!-- Topbar Language Dropdown End --> 

                <div class="d-inline-flex request-btn ml-2">
                    <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center" href="#" role="button" data-toggle="modal" data-target="#request_popup"><i class="icofont-ui-calendar"></i> Get Appointment</a>
                </div>         
              </div>
            </div>
          </div>
        </div>
        
        <!-- Main Navigation Start -->
        <nav class="navbar navbar-expand-lg bdr-nav bg-transparent">
          <div class="container-lg text-nowrap px-0">
            <div class="d-flex mr-auto">
              <a class="navbar-brand" href="index.html">
                <img src="images/logo_white.png" alt="">
              </a> 
            </div>
            <!-- Topbar Request Quote Start -->
            <span class="order-lg-last d-inline-flex request-btn">
                <a class="nav-link ml-auto" href="#" id="search_home"><i class="icofont-search"></i></a>
            </span>
            <!-- Toggle Button Start -->
            <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Toggle Button End -->

            <!-- Topbar Request Quote End -->

            <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icofont-rounded-down"></i></a>                
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                      <li><a class="dropdown-item" href="index.html">Home Layout 1</a></li>
                          <li><a class="dropdown-item" href="index-2.html">Home Layout 2</a></li>
                          <li><a class="dropdown-item" href="index-3.html">Home Layout 3</a></li>
                          <li><a class="dropdown-item" href="index-4.html">Home Layout 4</a></li>
                          <li><a class="dropdown-item" href="index-5.html">Home Layout 5</a></li>
                          <li class="dropdown">
                          <a class="dropdown-toggle-mob dropdown-item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Third Level Menu <i class="icofont-rounded-right float-right"></i></a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="about.html">About Us</a></li>
                      <li><a class="dropdown-item" href="about-team.html">Team List</a></li>
                      <li><a class="dropdown-item" href="team-detials.html">Team Single</a></li>       
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">                  
                      <li><a class="dropdown-item" href="shortcodes-element.html">Shortcode Elements</a></li>
                      <li><a class="dropdown-item" href="typography.html">Typography</a></li>                  
                      <li><a class="dropdown-item" href="request-page.html">Request Quote</a></li>
                      <li><a class="dropdown-item" href="pricing-plan.html">Our Pricing</a></li>
                      <li><a class="dropdown-item" href="404-page.html">404 Page</a></li>                  
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="services.html">Service List</a></li>
                      <li><a class="dropdown-item" href="services-details.html">Service Details</a></li>      
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cases <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="cases-sidebar.html">Cases Sidebar</a></li>
                      <li><a class="dropdown-item" href="cases-2-col.html">Cases 2 Columns</a></li>
                      <li><a class="dropdown-item" href="cases-3-col.html">Cases 3 Columns</a></li>
                      <li><a class="dropdown-item" href="cases-single.html">Cases Single</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="index.html" id="blog-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-rounded-down"></i></a>
                    
                    <ul class="dropdown-menu" aria-labelledby="blog-menu">
                      <li><a class="dropdown-item" href="blog-fullwidth.html">Blog Fullwidth</a></li>
                      <li><a class="dropdown-item" href="blog-small.html">Blog Small</a></li>
                      <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                      <li><a class="dropdown-item" href="blog-single-right.html">Blog Single Right</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
              </ul>
              <!-- Main Navigation End -->
            </div>


          </div>
        </nav>
        <!-- Main Navigation End -->
      </header>
    <!-- xxx Header End xxx -->

    <!-- Fullscreen Slider Start -->
    <div class="slider bg-navy-blue">
      <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>
            <!-- MINIMUM SLIDE STRUCTURE -->
            <li 
              data-index="rs-82" 
              data-transition="random" 
              data-slotamount="default" 
              data-hideafterloop="0" 
              data-hideslideonmobile="off"
              data-easein="Power4.easeOut"
              data-easeout="Power4.easeOut" 
              data-masterspeed="1000"
              data-thumb="../../assets/images/waterfal-100x50.jpg"
              data-rotate="0"
              data-saveperformance="off"
              data-title="Slide"
              data-param1=""
              data-param2=""
              data-param3=""
              data-param4=""
              data-param5=""
              data-param6=""
              data-param7=""
              data-param8=""
              data-param9=""
              data-param10=""
              data-description=""
              data-slicey_shadow="0px 0px 50px 0px transparent"
              >
              <!-- MAIN IMAGE -->
              <img src="images/banner_slider_2.jpg"  alt="" 
                data-bgposition="center center"
                data-kenburns="on"
                data-duration="7000"
                data-ease="Linear.easeNone"
                data-scalestart="100"
                data-scaleend="150"
                data-rotatestart="0"
                data-rotateend="0"
                data-blurstart="0"
                data-blurend="0"
                data-offsetstart="0 0"
                data-offsetend="0 0"
                class="rev-slidebg"
                data-no-retina
              >
              <!-- LAYERS -->        

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme NotGeneric-Title" 

                id="slide-82-layer-2" 

                data-blendmode=”color-dodge“
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" 
                data-voffset="['-70','-70','-70','-70']" 
                data-fontsize="['70','60','60','40']"
                data-lineheight="['80','70','70','40']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                >Talented Consultants</div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption medium_light_white tp-resizeme" 
                id="slide-82-layer-3" 

                data-blendmode=”color-dodge“
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" 
                data-voffset="['-10','-10','-10','-10']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="text" 
                data-responsive_offset="on" 
                data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']"

                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                data-fontsize="['28','28','28','24']"
                data-lineheight="['34','34','34','50']"

                >Without consulting, plans stay as plans. </div>

                <!-- LAYER NR. 12 -->
                <div class="tp-caption tp-resizeme small_light_white " 
                id="slide-82-layer-4" 
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']"
                data-voffset="['60','60','60','60']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"

                data-type="text" 
                data-responsive_offset="on" 

                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                data-fontsize="['16','16','16','16']"
                data-lineheight="['30','30','30','20']"

                >We look forward to getting to know you and to <br> helping you take your company to new heights!</div>

                <!-- LAYER NR. 12 -->
                <div class="tp-caption tp-resizeme btn-theme bg-navy-blue rev-btn" 
                id="slide-82-layer-5" 
                data-x="['center','center','center','center']" 
                data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" 
                data-voffset="['140','140','140','140']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"

                data-type="text" 
                data-responsive_offset="on" 

                data-frames='[{"delay":750,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']"

                data-paddingtop="[0,0,0,0]"
                data-paddingright="[30,30,30,30]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[30,30,30,30]"

                data-fontsize="['14','14','14','14']"
                data-lineheight="['16','16','16','16']"

                >Learn More <i class="icofont-rounded-right"></i></div>
            </li>
            <li data-transition="random" data-masterspeed="1000">
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <img src="images/banner_slider_4.jpg" alt="Sky" class="rev-slidebg">
                <div class="tp-caption tp-resizeme normalWraping layer_1 slider-fonts" 

                     data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                     data-x="['70', '70', '70', '50']" 
                     data-y="['180', '180', '180', '10']" 
                     data-hoffset="0" 
                     data-voffset="['-124', '-110', '-100', '-50']" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-fontsize="20"
                     data-lineheight="36"
                     data-fontweight="700"
                     data-letterspacing="0"
                     data-color="#77cc5e"
                     data-textAlign="left"
                     >What We Do</div>
                <div class="tp-caption tp-resizeme NotGeneric-Title" 

                     data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                     data-x="['70', '70', '70', '50']" 
                     data-y="['220', '220', '220', '50']" 
                     data-hoffset="['12', '200', '10', '25']" 
                     data-voffset="['0', '0', '10', '25']" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-word-wrap="['normal']"
                     data-white-break="['break-all']"
                     data-fontsize="['70', '70', '60', '40']"
                     data-lineheight="['70', '70', '70', '45']"
                     data-fontweight="700"
                     data-letterspacing="['0', '0', '0', '0']"
                     data-color="#FFF"
                     data-textAlign="left"
                     style="color: #FFF;">We Create Value <br>& Build Confidence</div>

                <div class="tp-caption tp-resizeme rev-btn"

                     data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                     data-x="['40', '70', '70', '25']" 
                     data-y="['400', '500', '500', '180']" 
                     data-hoffset="0" 
                     data-voffset="0" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-fontweight="400"
                     data-textAlign="left"

                     data-paddingtop="[0,0,0,0]"
                      data-paddingright="[30,30,30,30]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[30,30,30,30]"
                      data-fontsize="['14','14','14','17']"
                      data-lineheight="['16','16','16','16']"
                     ><a href="#" class="btn-theme bg-orange"><span>Let’s get started</span></a></div>
            </li>
            <li data-transition="random" data-masterspeed="1000">
                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                <img src="images/banner_slider_3.jpg" alt="Sky" class="rev-slidebg slider-fonts">
                <div class="tp-caption tp-resizeme normalWraping layer_1 slider-fonts" 

                     data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                     data-x="center" 
                     data-y="center" 
                     data-hoffset="0" 
                     data-voffset="['-90', '-110', '-100', '-50']" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-fontsize="20"
                     data-lineheight="36"
                     data-fontweight="700"
                     data-letterspacing="0"
                     data-color="#77cc5e"
                     data-textAlign="center"
                     >We Provide Best</div>
                <div class="tp-caption tp-resizeme normalWraping layer_2 slider-fonts" 

                     data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                     data-x="center" 
                     data-y="center" 
                     data-hoffset="0" 
                     data-voffset="['12', '20', '10', '25']" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-word-wrap="['normal']"
                     data-white-break="['break-all']"
                     data-fontsize="['70', '70', '60', '40']"
                     data-lineheight="['70', '80', '65', '50']"
                     data-fontweight="700"
                     data-letterspacing="['0']"
                     data-color="#FFF"
                     data-textAlign="center"
                     >Finance & Consulting <br> Solutions</div>
                <div class="tp-caption tp-resizeme rev-btn"

                     data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                     {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                     data-x="center"
                     data-y="center" 
                     data-hoffset="0" 
                     data-voffset="['150', '200', '150', '140']" 
                     data-width="100%"
                     data-height="['auto]"
                     data-whitesapce="['normal']"
                     data-fontsize="16"
                     data-lineheight=""
                     data-fontweight="400"
                     data-textAlign="center"
                     ><a href="#" class="btn-theme bg-orange"><span>Let’s get started</span></a></div>
            </li>
            
            <!-- SLIDE  -->
            
          </ul>
          <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
      </div>
    </div>
    <!-- Fullscreen Slider End -->

    <div id="body-content" class="no-overflow">
    <section class="light-bg section-pad welcome-no-pad">
      <div class="container">
        <!-- xxx Welcome Section xxx -->
        <div class="row welcome-section">
          <!-- Heading Main -->
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              <span>Welcome To</span>
              Consult-IT Consultancy Services
            </h1>
          </div>
          <!-- Heading Main -->
          <div class="col-lg-4 col-md-12">
            <div class="box-icon-1">
              <i class="icofont icofont-chart-line-alt"></i>
              <h3>FINANCIAL CONSULTING</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
            </div>
          </div> <!-- Icon Box End -->
          <div class="col-lg-4 col-md-12">
            <div class="box-icon-1">
              <i class="icofont icofont-businesswoman"></i>
              <h3>HR CONSULTING</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
            </div>
          </div> <!-- Icon Box End -->
          <div class="col-lg-4 col-md-12">
            <div class="box-icon-1">
              <i class="icofont-chart-flow"></i>
              <h3>MARKETING CONSULTING</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
            </div>
          </div> <!-- Icon Box End -->
        </div> 
        <!-- xxx Welcome Section xxx -->

        <!-- xxx Client Logos xxx -->
        <div class="row">
          <div class="col-sm-12">
            <div class="head-main">
              <h1><span>TRUSTED BY</span> The Industries Best</h1>
              <p>We provide the best consulting financial & professional business solution and strategy for increasing your business growth</p>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-1.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-2.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-3.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-4.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-5.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
          <div class="col-6 col-sm-4 col-lg-2 col-md-4">
            <div class="client-logos">
              <img src="images/clients-icon/icon-6.png" alt="">
            </div>
          </div> <!-- Client Logo Item -->
        </div><!-- xxx Client Logos End xxx -->
      </div>
    </section>

    <!-- xxx Helpful Services xxx -->
    <section class="section-pad">
      <div class="container">
        <div class="row">
            <!-- Services Icon -->
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont icofont-chart-bar-graph"></i>
                <h3>Financial Analysis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont-briefcase-2"></i>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
            <div class="col-sm-12 d-none d-sm-none d-md-block d-lg-none"><p>&nbsp;</p></div>
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont-dollar-true"></i>
                <h3>Cash Investment</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont icofont-wheelchair"></i>
                <h3>Retirement Service</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
            <div class="col-sm-12 d-none d-sm-none d-md-block d-lg-none"><p>&nbsp;</p></div>
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont icofont-black-board"></i>
                <h3>Marketing Plan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
            <div class="col-lg-4 col-md-6">
              <div class="box-icon-2">
                <i class="icofont icofont-bank"></i>
                <h3>Trades &amp; Stocks</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
              </div>
            </div><!-- Services Icon End -->
          </div>
      </div>
    </section><!-- xxx Helpful Services End xxx -->

    <section class="wide-tb-100 bg-scroll bg-img-6 pos-rel callout-style-1">
      <div class="bg-overlay blue opacity-60"></div>
      <div class="container wide-tb-100">
        <div class="row align-items-center">
            <div class="col-12 d-sm-flex col-md-8 col-lg-6">
              <div class="assistance-support">
                <i class="icofont icofont-live-support"></i>
              </div>
              <div class="">
                <h4 class="h4-xl txt-white">Feel Free To Get In Touch</h4>
                <p>Contact our customer support team if you have any further questions. We are always here to help!</p>
                <a href="#" class="btn btn-theme bg-white bordered">Get Appointment <i class="icofont-rounded-right"></i></a>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- xxx Practice Area xxx -->
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">
                <span>Our Main</span>
                Practice Areas
              </h1>
            </div>
            <!-- Heading Main -->
          </div>

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-1.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-1.jpg" alt="">
                </div>
                <div class="header">
                  FINANCIAL SERVICES
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-2.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-2.jpg" alt="">
                </div>
                <div class="header">
                  retirement consultation
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

          <div class="col-sm-12 d-none d-sm-none d-md-block d-lg-none"><p>&nbsp;</p></div>

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-3.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-3.jpg" alt="">
                </div>
                <div class="header">
                  investment consultation
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

          <div class="col-sm-12 d-none d-sm-none d-lg-block"><p>&nbsp;</p></div>

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-4.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-4.jpg" alt="">
                </div>
                <div class="header">
                  Consumer Products
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

          <div class="col-sm-12 d-none d-sm-none d-md-block d-lg-none"><p>&nbsp;</p></div>

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-5.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-5.jpg" alt="">
                </div>
                <div class="header">
                  Tax consultation
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

          <!-- Practice Area -->
          <div class="col-lg-4 col-md-6">
            <div class="practice-area-wrap">
              <a href="images/practice/practice-area-6.jpg" class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                <div class="outer">
                  <div class="stretch-effect"><i class="icofont-search"></i></div>
                  <img src="images/practice/practice-area-6.jpg" alt="">
                </div>
                <div class="header">
                   Business  consultation
                </div>
              </a>
            </div>            
          </div><!-- Practice Area End -->

        </div>
      </div>      
    </section>
    <!-- xxx Practice Area End xxx -->


    <!-- About Us Start -->
    <section class="pos-rel light-bg">
      <div class="container-fluid">
        <div class="row align-items-center">       
            <div class="col-lg-5 col-12 p-0 pos-rel"> 
              <img src="images/about-us-3.jpg" class="w-100" alt="">
              <div class="video-icon">
                  <a class="rounded-circle play-video video-play-button" href="#">
                      <i class="icofont-play"></i>
                  </a>
              </div>
            </div>
            <div class="col-lg-6 col-12">

              <div class="about-whoose">
                <!-- Heading Main -->
                <h1 class="heading-main text-left mb-4 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                  <span>Why Choose</span>
                  Consult-IT Services!
                </h1>
                <!-- Heading Main -->

                <h6 class="txt-blue mb-5">It wasn't a dream his room a proper human room although little too small lay peacefully between its four.</h6>
                
                <!-- Tracking Form -->
                <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i class="icofont-check"></i>Deliver Environmentally Responsible Client Services</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i class="icofont-check"></i>Be an Active Community Partner</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i class="icofont-check"></i>Drive Continuous Improvement</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i class="icofont-check"></i>Clearance and compliance service</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"><i class="icofont-check"></i>Clearance and compliance service</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.5s"><i class="icofont-check"></i>Maintain High Ethical Standards</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s"><i class="icofont-check"></i>Ease The Financial Obstacles!</li>
                  <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s"><i class="icofont-check"></i>We ensure complete security</li>
                </ul>
                <!-- Tracking Form -->
              </div>

            </div>              
        </div>
      </div>        
    </section>
    <!-- About Us End -->

    <!-- xxx Testimonial Slider xxx -->
    <section class="bg-light-gray wide-tb-100">
      <div class="container">
          <div class="row">
            
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">
                <span>What Our</span>
                Customers Saying
              </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-md-8 mx-auto">
                <div class="owl-carousel" id="home-testimonial">
                    <div class="item">
                        <div class="testimonial-wrap">
                            <img src="images/team/testimonial-1.jpg" class="rounded-circle" alt="">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, 
                            urna lacus egestas massa. </p>
                            <h4>- John Gerry  <span>Richar & Sons</span></h4>
                              <div class="star-rating">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <small>
                                  <i class="icofont icofont-star"></i>
                                  <i class="icofont icofont-star"></i>
                                </small>
                              </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrap">
                            <img src="images/team/testimonial-1.jpg" class="rounded-circle" alt="">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, 
                            urna lacus egestas massa. </p>
                            <h4>- John Gerry  <span>Richar & Sons</span></h4>
                              <div class="star-rating">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <small>
                                  <i class="icofont icofont-star"></i>
                                  <i class="icofont icofont-star"></i>
                                </small>
                              </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrap">
                            <img src="images/team/testimonial-1.jpg" class="rounded-circle" alt="">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, 
                            urna lacus egestas massa. </p>
                            <h4>- John Gerry  <span>Richar & Sons</span></h4>
                              <div class="star-rating">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <small>
                                  <i class="icofont icofont-star"></i>
                                  <i class="icofont icofont-star"></i>
                                </small>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>


      </div>      
    </section>
    <!-- xxx Testimonial Slider End xxx -->

    <section class="wide-tb-100">
      <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Heading Main -->
              <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                  <span>Company's News</span>
                  Recent Blog
                </h1>
              </div>
              <!-- Heading Main -->
            </div>

            <!-- Blog Wrap -->
            <div class="col-md-4 col-sm-12">
              <div class="blog-wrap h-100">
                <a href="blog-single.html"><img src="images/blog/blog-1.jpg" alt=""></a>
                <div class="inner-content">
                  <div class="meta-box">
                    <span><a href="#"><i class="icofont icofont-user-male"></i> By Admin</a></span> <span><i class="icofont icofont-calendar"></i> 15 NOVEMBER 2017</span>
                  </div>
                  <h4 class="h4-md mb-3"><a href="blog-single.html">Investment Management are open frome next month</a></h4>
                  <p>Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat</p>
                  <a href="blog-single.html" class="btn-theme bg-navy-blue">Read More <i class="icofont icofont-rounded-double-right"></i></a>
                </div>
              </div>
            </div><!-- Blog Wrap End -->

            <!-- Blog Wrap -->
            <div class="col-md-4 col-sm-12">
              <div class="blog-wrap h-100">
                <a href="blog-single.html"><img src="images/blog/blog-2.jpg" alt=""></a>
                <div class="inner-content">
                  <div class="meta-box">
                    <span><a href="#"><i class="icofont icofont-user-male"></i> By Admin</a></span> <span><i class="icofont icofont-calendar"></i> 15 NOVEMBER 2017</span>
                  </div>
                  <h4 class="h4-md mb-3"><a href="blog-single.html">Investment Management are open frome next month</a></h4>
                  <p>Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat</p>
                  <a href="blog-single.html" class="btn-theme bg-navy-blue">Read More <i class="icofont icofont-rounded-double-right"></i></a>
                </div>
              </div>
            </div><!-- Blog Wrap End -->

            <!-- Blog Wrap -->
            <div class="col-md-4 col-sm-12">
              <div class="blog-wrap h-100">
                <a href="blog-single.html"><img src="images/blog/blog-3.jpg" alt=""></a>
                <div class="inner-content">
                  <div class="meta-box">
                    <span><a href="#"><i class="icofont icofont-user-male"></i> By Admin</a></span> <span><i class="icofont icofont-calendar"></i> 15 NOVEMBER 2017</span>
                  </div>
                  <h4 class="h4-md mb-3"><a href="blog-single.html">Investment Management are open frome next month</a></h4>
                  <p>Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat</p>
                  <a href="blog-single.html" class="btn-theme bg-navy-blue">Read More <i class="icofont icofont-rounded-double-right"></i></a>
                </div>
              </div>
            </div><!-- Blog Wrap End -->


        </div>
      </div>      
    </section>


    <!-- xxx Serving Parllax Background xxx -->
    <div class="wide-tb-100 bg-light-gray">
      <div class="page-overlay"></div>
        <div class="container">
            <div class="row text-center wow fadeInDown" data-wow-duration="0" data-wow-delay="0.5s">
              <div class="col-sm-12 col-md-8 mx-auto">
                <h3 class="h3-xl fw-7 txt-blue">Here to Help Your! <span class="lead fw-5 txt-ligt-gray">Every Business Need.</span></h3>
                <p class="mt-4">Through financial clarity, we provide you with the financial confidence you need to achieve.</p>
                <a href="#" class="btn-theme bg-orange mt-2">Get A Free Quote <i class="icofont-rounded-right"></i></a>
              </div>
            </div>  
        </div>
    </div>
    <!-- xxx Serving Parllax Background End xxx -->
  </div>

    <!-- xxx Google Map xxx -->
    <section class="home-pad">
        <div id="map-holder-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6624.986066388227!2d151.221839!3d-33.876954!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1582101032155!5m2!1sen!2sus" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section><!-- xxx Google Map End xxx -->

    <section class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <div class="contact-wrap">
                  <form novalidate id="contact_form" method="post" action="#">
                    <div class="row">
                      
                          <div class="col-sm-12 col-md-4 mb-0">
                              <input type="text" placeholder="Your Name" class="form-control" id="name" name="name">
                          </div>
                          <div class="col-sm-12 col-md-4 mb-0">
                              <input type="text" placeholder="Your Email " class="form-control" id="lastname" name="lastname">
                          </div>
                          <div class="col-sm-12 col-md-4 mb-0">
                              <input type="text" placeholder="Subject" class="form-control" id="email" name="email">
                          </div>
                          <div class="col-sm-12 mb-0">
                              <textarea placeholder="Message" rows="8" class="form-control" id="comment" name="comment"></textarea>
                          </div>
                          <div class="col-sm-12">
                              <button class="btn-theme bg-orange mt-3" type="submit">Send Now <i class="icofont icofont-verification-check"></i></button>
                          </div>
                      
                      </div>
                    </form>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto wide-tb-50">
              <div class="row">
                  <div class="col-sm-6 col-md-4 footer-links">
                      <h3>COMPANY</h3>
                      <ul>
                        <li><a href="#"><i class="icofont icofont-check"></i>About Us</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Blog</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Press Release</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Sitemap</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Contact Us</a></li>
                      </ul>
                  </div>

                  <div class="col-sm-6 col-md-4 footer-links">
                      <h3>useful topics</h3>
                      <ul>
                        <li><a href="#"><i class="icofont icofont-check"></i>Financial Services</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Retirement Consultation</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Investment Consultation</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Consumer Products</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Tax Consultation</a></li>
                      </ul>
                  </div>

                  <div class="col-sm-6 col-md-4 footer-links">
                      <h3>POLICIES</h3>
                      <ul>
                        <li><a href="#"><i class="icofont icofont-check"></i>Privacy Policy</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Refund &amp; Cancellation Policy</a></li>
                        <li><a href="#"><i class="icofont icofont-check"></i>Grievance Policy</a></li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <ul class="social-links">
                          <li class="facebook"><a href="#"><i class="icofont-facebook"></i></a></li>
                          <li class="twitter"><a href="#"><i class="icofont-twitter"></i></a></li>
                          <li class="linked"><a href="#"><i class="icofont-linkedin"></i></a></li>
                          <li class="youtube"><a href="#"><i class="icofont-youtube-play"></i></a></li>
                          <li class="pinterest"><a href="#"><i class="icofont-pinterest"></i></a></li>
                          <li class="tumbler"><a href="#"><i class="icofont-instagram"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="copyrights">
            © Copyright 2018 <span>|</span> <a href="http://mannatstudio.com/html/consultit/">Consultit</a> WordPress Theme By <a href="https://themeforest.net/user/mannatstudio">Mannat Studio</a> <span>|</span> All Rights Reserved
          </div>
        </footer>
      </section>

    <!-- xxx Back To Top xxx -->
    <div id="back-top">
        <a class="rounded-circle" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
    <!-- xxx End xxx --> 
    
    <button class="btn-theme bg-blue-light" type="button">Download Brochures <i class="icofont icofont-download"></i></button>

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">    
      <form class="form-inline mt-2 mt-md-0">
        <div class="form-inner">
          <div class="form-inner-div d-inline-flex align-items-center no-gutters">
            <div class="col-md-1">
              <i class="icofont-search"></i>
            </div> 
            <div class="col-10">
              <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-1">
              <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- Search Popup End -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=$asset?>/js/jquery.min.js"></script>
    <script src="<?=$asset?>/js/bootstrap.min.js"></script>
    <script src="<?=$asset?>/js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>    
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>    
    <script type='text/javascript' src="js/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript" src="js/jquery.appear.min.js"></script>    
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->  
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Masonary Plugin -->
    <script type="text/javascript" src="<?=$asset?>/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?=$asset?>/js/masonary-custom.js"></script>

    <script src="<?=$asset?>/js/site-custom.js"></script>   

    <script type="text/javascript">
    var tpj=jQuery;

    var revapi1078;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_1078_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1078_1");
      }else{
        revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
          sliderType:"standard",
    jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style:"metis",
              enable:true,
              hide_onmobile:true,
              hide_under:600,
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:30,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:30,
                v_offset:0
              }
            }
            ,
            bullets: {
              style: 'hades',
              tmp: '<span class="tp-bullet-image"></span>',
              enable:false,
              hide_onmobile:true,
              hide_under:600,
              //style:"metis",
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:30,
              space:5,
              //tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
            }
          },
          viewPort: {
            enable:true,
            outof:"pause",
            visible_area:"80%",
            presize:false
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[600,600,500,400],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:2000,
            levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
            type:"mouse",
          },
          shadow:0,
          spinner: 'spinner2',
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"off",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
    }); /*ready*/
    </script> 
  </body>
</html>

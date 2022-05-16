<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AEEK - KASSERE</title>

    <link rel="icon" href="<?=$asset?>/media/logoAEEK.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7CPoppins:300,400,500,600,700"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700|Oswald:200,300,400,500,600,700"
          rel="stylesheet">
    <link href="<?=$asset?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$asset?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$asset?>/flaticon/flaticon.css" rel="stylesheet">
    <link href="<?=$asset?>/css/swiper.min.css" rel="stylesheet">
    <link href="<?=$asset?>/css/lightcase.css" rel="stylesheet">
    <link href="<?=$asset?>/css/quick-view.css" rel="stylesheet">
    <link href="<?=$asset?>/css/jquery.nstSlider.css" rel="stylesheet">
    <link href="<?=$asset?>/css/flexslider.css" rel="stylesheet">
    <link href="<?=$asset?>/css/banner-bg.css" rel="stylesheet">
    <link href="<?=$asset?>/css/style.css" rel="stylesheet">
    <link href="<?=$asset?>/css/header.css" rel="stylesheet">
    <link href="<?=$asset?>/css/index-9.css" rel="stylesheet">
    <link href="<?=$asset?>/css/responsive.css" rel="stylesheet">
    <link href="<?=$asset?>/css/headers.css" rel="stylesheet">
    <link href="<?=$asset?>/css/font-size.css" rel="stylesheet">
    <link href="<?=$asset?>/css/btn.css" rel="stylesheet">
    <link href="<?=$asset?>/plugins/ticker/css/main.css" rel="stylesheet">
    <link href="<?=$asset?>/plugins/sweetalert/sweet-alert.css" rel="stylesheet" />
    <link href="<?=$asset?>/plugins/animate/animate.min.css" rel="stylesheet" />

    <style>
        .carousel-caption{
            bottom: 13rem !important;
        }
        .h-600{
            height: 600px !important;
        }
        .btn-transparence-orange {
            background: #ff46003b !important;
            color: #ff4600 !important;
        }
        .btn-green-transparent{
            background: #00a6504a !important;
            color: #0ba053 !important;
            border: none !important;
        }
        .btn-green-transparent:hover{
            background: #00a65085 !important;
            color: #FFFFFF !important;
            border: none !important;
        }
        .btn-red-transparent{
            background: #f900243d !important;
            color: #f90024 !important;
            border: none !important;
        }
        .btn-red-transparent:hover{
            background: #f90024 !important;
            color: #FFFFFF !important;
            border: none !important;
        }
        .sidebar form input{
            border-radius: 6px !important;
            border: 2px solid #040404 !important;
        }
        .pagination li a.active{
            color: #fff !important;
            border: 1px solid #ff5c00 !important;
            background: #ff5c00 !important;
        }
        .default-button {
            text-transform: initial !important;
        }
        .blog-page .content>a {
            padding: 7px 35px !important;
        }
        .comment-form .comment-submit {
            padding: 11px 22px !important;
        }
        .input-style{
            border: 2px solid #ced4da !important;
            border-radius: 6px !important;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: sans-serif  !important;
            text-transform: initial;
            font-weight: inherit;
        }
        #nt-example2 li{
            font-size: 16px !important;
        }

        #nt-example2 li {
            background: #ff5c00 !important;
        }


        #nt-example2-infos .infos-text{
            line-height: 1.4 !important;
        }
        .text-white{
            color: #fff !important;
        }

        .position-text{
            transform: translateY(319%) !important;
        }

        .banner-blog {
            background-image: url(<?=$asset?>/media/aeek-2.jpeg) !important;
            background-position: 50% 50%;
            background-size: cover;
            height: 600px !important;
            position: relative;
            overflow: hidden;
        }
        .banner{
            height: 600px !important;
        }
        .bg-white{
            background:#fff !important;
        }
        .bg-orange{
            background:#ff5c00 !important;
        }
        header.style-3 div.menu-fixed::after{
            background : #ff460000 !important;
        }

        header.style-3 div.menu-fixed::before {
            border-bottom: 90px solid #ff460000;
        }
        .banner-11 .right-content img {
            transform: translateX(1px) !important;
        }
        .side-image2:before {
            background-image: url(<?=$asset?>/media/right1.png) !important;
        }

        .side-image2:after {
            background-image: url(<?=$asset?>/media/left1.png) !important;
        }
        .multi-gallery-section.style2 {
            background-image: url(<?=$asset?>/media/bg.jpg);
        }


        .menu-button{
            padding: 5px 20px !important;
            text-transform: inherit !important;
        }

        @media(max-width: 767px) {
            nav.navbar{
                background:#f8f9fa!important;
            }
            .banner-11 .right-content img {
                transform: translateY(80px) !important;
            }
            .banner {
                height: 296px !important;
            }
            .banner .banner-overlay {
                height: 296px !important;
            }
            .banner-content{
                padding-top: 60px !important;
            }
            .cb-slideshow{
                margin-bottom: 0 !important;
            }

            .h-600{
                height: 253px !important;
            }
            #carouselExampleCaptions{
                margin-top: 73px !important;
            }
            .carousel-caption {
                top: 20px;
                bottom: 0 !important;
            }
            .font-30{
                font-size: 16px !important;
            }
            .font-70{
                font-size: 30px !important;
            }




        }



    </style>



</head>

<body class="home-fashion">
<header class="style-3">
    <div class="menu-fixed p-0">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="<?=$domaine?>"><img src="<?=$asset?>/media/logoAEEK.png" width="50" alt="logo"
                                                               class="img-responsive"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" style="color: #000;"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="main-menu" style="">
                        <div class="menu-left">
                            <ul>
                                <li><a href="<?=$domaine?>">Accueil</a></li>
                                <li><a href="">Bureau</a></li>

                                <li><a href="">A propos</a></li>

                                <li><a href="">Contact</a></li>

                                <li><a href="<?=$domaine?>/blog">Blog</a></li>
                                <li><a href="">Aeek tv</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu">

                        <div class="menu-right">
                            <ul class="header-cart-ticket-option">
                                <li><a href="ticket.html" class="menu-button btn-transparence-orange">Inscription</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header end here -->

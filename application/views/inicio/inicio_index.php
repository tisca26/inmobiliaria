<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Porto - Responsive HTML5 Template 5.7.2</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo cdn_assets(); ?>/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo cdn_assets(); ?>/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-blog.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/skins/skin-real-estate.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/demos/demo-real-estate.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo cdn_assets(); ?>/vendor/modernizr/modernizr.min.js"></script>

</head>
<body class="loading-overlay-showing" data-loading-overlay>
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="body">
    <header id="header" class="header-narrow"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
        <div class="header-body background-color-primary pt-none pb-none">
            <div class="header-top header-top header-top-style-3 header-top-custom background-color-primary m-none">
                <div class="container">
                    <nav class="header-nav-top pull-left">
                        <ul class="nav nav-pills">
                            <li class="hidden-xs">
                                <span class="ws-nowrap"><i class="icon-location-pin icons"></i> <?php echo EMPRESA_DIRECCION; ?></span>
                            </li>
                            <li>
                                <span class="ws-nowrap"><i class="icon-call-out icons"></i> <?php echo EMPRESA_TELEFONO; ?></span>
                            </li>
                            <li class="hidden-xs">
                                <span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a
                                            class="text-decoration-none"
                                            href="mailto:<?php echo EMPRESA_MAIL; ?>"><?php echo EMPRESA_MAIL; ?></a></span>
                            </li>
                        </ul>
                    </nav>
                    <nav class="header-nav-top langs pull-right mr-none">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="true">
                                    Español
                                    <i class="fa fa-sort-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">

                                    <li>
                                        <a href="#espanol"><img src="<?php echo cdn_assets(); ?>/img/blank.gif"
                                                                class="flag flag-es" alt="Español">
                                            Español</a>
                                    </li>
                                    <li>
                                        <a href="#english"><img src="<?php echo cdn_assets(); ?>/img/blank.gif"
                                                                class="flag flag-us" alt="English">
                                            English</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-container container custom-position-initial">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="demo-real-estate.html">
                                <img alt="Porto" width="143" height="40"
                                     src="<?php echo cdn_assets(); ?>/img/demos/real-estate/logo-real-estate.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse m-none">
                                    <nav>
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown-full-color dropdown-quaternary active">
                                                <a href="demo-real-estate.html">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown-full-color dropdown-quaternary">
                                                <a href="demo-real-estate-properties.html">
                                                    Properties
                                                </a>
                                            </li>

                                            <li class="dropdown dropdown-full-color dropdown-quaternary">
                                                <a class="dropdown-toggle" href="demo-real-estate-who-we-are.html">
                                                    About
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="demo-real-estate-agents.html">Agents</a></li>
                                                    <li><a href="demo-real-estate-who-we-are.html">Who We Are</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-full-color dropdown-quaternary">
                                                <a href="demo-real-estate-contact.html">
                                                    Contact
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega"
                                                id="headerSearchProperties">
                                                <a class="dropdown-toggle" href="#">
                                                    Search <i class="fa fa-search"></i>
                                                </a>
                                                <ul class="dropdown-menu custom-fullwidth-dropdown-menu">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <form id="propertiesFormHeader"
                                                                  action="demo-real-estate-properties.html"
                                                                  method="POST">
                                                                <div class="container p-none">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <div class="form-control-custom">
                                                                                <select class="form-control text-uppercase font-size-sm"
                                                                                        name="propertiesPropertyType"
                                                                                        data-msg-required="This field is required."
                                                                                        id="propertiesPropertyType"
                                                                                        required="">
                                                                                    <option value="">Property Type
                                                                                    </option>
                                                                                    <option value="1">Apartment</option>
                                                                                    <option value="2">House</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-control-custom">
                                                                                <select class="form-control text-uppercase font-size-sm"
                                                                                        name="propertiesLocation"
                                                                                        data-msg-required="This field is required."
                                                                                        id="propertiesLocation"
                                                                                        required="">
                                                                                    <option value="">Location</option>
                                                                                    <option value="1">Miami</option>
                                                                                    <option value="2">New York</option>
                                                                                    <option value="3">Houston</option>
                                                                                    <option value="4">Los Angeles
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-control-custom">
                                                                                <select class="form-control text-uppercase font-size-sm"
                                                                                        name="propertiesMinBeds"
                                                                                        data-msg-required="This field is required."
                                                                                        id="propertiesMinBeds"
                                                                                        required="">
                                                                                    <option value="">Min Beds</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-control-custom">
                                                                                <select class="form-control text-uppercase font-size-sm"
                                                                                        name="propertiesMinPrice"
                                                                                        data-msg-required="This field is required."
                                                                                        id="propertiesMinPrice"
                                                                                        required="">
                                                                                    <option value="">Min Price</option>
                                                                                    <option value="150000">$150,000
                                                                                    </option>
                                                                                    <option value="200000">$200,000
                                                                                    </option>
                                                                                    <option value="250000">$250,000
                                                                                    </option>
                                                                                    <option value="300000">$300,000
                                                                                    </option>
                                                                                    <option value="350000">$350,000
                                                                                    </option>
                                                                                    <option value="400000">$400,000
                                                                                    </option>
                                                                                    <option value="450000">$450,000
                                                                                    </option>
                                                                                    <option value="500000">$500,000
                                                                                    </option>
                                                                                    <option value="550000">$550,000
                                                                                    </option>
                                                                                    <option value="600000">$600,000
                                                                                    </option>
                                                                                    <option value="650000">$650,000
                                                                                    </option>
                                                                                    <option value="700000">$700,000
                                                                                    </option>
                                                                                    <option value="750000">$750,000
                                                                                    </option>
                                                                                    <option value="800000">$800,000
                                                                                    </option>
                                                                                    <option value="850000">$850,000
                                                                                    </option>
                                                                                    <option value="900000">$900,000
                                                                                    </option>
                                                                                    <option value="950000">$950,000
                                                                                    </option>
                                                                                    <option value="1000000">$1,000,000
                                                                                    </option>
                                                                                    <option value="1250000">$1,250,000
                                                                                    </option>
                                                                                    <option value="1500000">$1,500,000
                                                                                    </option>
                                                                                    <option value="1750000">$1,750,000
                                                                                    </option>
                                                                                    <option value="2000000">$2,000,000
                                                                                    </option>
                                                                                    <option value="2250000">$2,250,000
                                                                                    </option>
                                                                                    <option value="2500000">$2,500,000
                                                                                    </option>
                                                                                    <option value="2750000">$2,750,000
                                                                                    </option>
                                                                                    <option value="3000000">$3,000,000
                                                                                    </option>
                                                                                    <option value="3250000">$3,250,000
                                                                                    </option>
                                                                                    <option value="3500000">$3,500,000
                                                                                    </option>
                                                                                    <option value="3750000">$3,750,000
                                                                                    </option>
                                                                                    <option value="4000000">$4,000,000
                                                                                    </option>
                                                                                    <option value="4250000">$4,250,000
                                                                                    </option>
                                                                                    <option value="4500000">$4,500,000
                                                                                    </option>
                                                                                    <option value="4750000">$4,750,000
                                                                                    </option>
                                                                                    <option value="5000000">$5,000,000
                                                                                    </option>
                                                                                    <option value="6000000">$6,000,000
                                                                                    </option>
                                                                                    <option value="7000000">$7,000,000
                                                                                    </option>
                                                                                    <option value="8000000">$8,000,000
                                                                                    </option>
                                                                                    <option value="9000000">$9,000,000
                                                                                    </option>
                                                                                    <option value="10000000">
                                                                                        $10,000,000
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-control-custom">
                                                                                <select class="form-control text-uppercase font-size-sm"
                                                                                        name="propertiesMaxPrice"
                                                                                        data-msg-required="This field is required."
                                                                                        id="propertiesMaxPrice"
                                                                                        required="">
                                                                                    <option value="">Max Price</option>
                                                                                    <option value="150000">$150,000
                                                                                    </option>
                                                                                    <option value="200000">$200,000
                                                                                    </option>
                                                                                    <option value="250000">$250,000
                                                                                    </option>
                                                                                    <option value="300000">$300,000
                                                                                    </option>
                                                                                    <option value="350000">$350,000
                                                                                    </option>
                                                                                    <option value="400000">$400,000
                                                                                    </option>
                                                                                    <option value="450000">$450,000
                                                                                    </option>
                                                                                    <option value="500000">$500,000
                                                                                    </option>
                                                                                    <option value="550000">$550,000
                                                                                    </option>
                                                                                    <option value="600000">$600,000
                                                                                    </option>
                                                                                    <option value="650000">$650,000
                                                                                    </option>
                                                                                    <option value="700000">$700,000
                                                                                    </option>
                                                                                    <option value="750000">$750,000
                                                                                    </option>
                                                                                    <option value="800000">$800,000
                                                                                    </option>
                                                                                    <option value="850000">$850,000
                                                                                    </option>
                                                                                    <option value="900000">$900,000
                                                                                    </option>
                                                                                    <option value="950000">$950,000
                                                                                    </option>
                                                                                    <option value="1000000">$1,000,000
                                                                                    </option>
                                                                                    <option value="1250000">$1,250,000
                                                                                    </option>
                                                                                    <option value="1500000">$1,500,000
                                                                                    </option>
                                                                                    <option value="1750000">$1,750,000
                                                                                    </option>
                                                                                    <option value="2000000">$2,000,000
                                                                                    </option>
                                                                                    <option value="2250000">$2,250,000
                                                                                    </option>
                                                                                    <option value="2500000">$2,500,000
                                                                                    </option>
                                                                                    <option value="2750000">$2,750,000
                                                                                    </option>
                                                                                    <option value="3000000">$3,000,000
                                                                                    </option>
                                                                                    <option value="3250000">$3,250,000
                                                                                    </option>
                                                                                    <option value="3500000">$3,500,000
                                                                                    </option>
                                                                                    <option value="3750000">$3,750,000
                                                                                    </option>
                                                                                    <option value="4000000">$4,000,000
                                                                                    </option>
                                                                                    <option value="4250000">$4,250,000
                                                                                    </option>
                                                                                    <option value="4500000">$4,500,000
                                                                                    </option>
                                                                                    <option value="4750000">$4,750,000
                                                                                    </option>
                                                                                    <option value="5000000">$5,000,000
                                                                                    </option>
                                                                                    <option value="6000000">$6,000,000
                                                                                    </option>
                                                                                    <option value="7000000">$7,000,000
                                                                                    </option>
                                                                                    <option value="8000000">$8,000,000
                                                                                    </option>
                                                                                    <option value="9000000">$9,000,000
                                                                                    </option>
                                                                                    <option value="10000000">
                                                                                        $10,000,000
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <input type="submit" value="Search Now"
                                                                                   class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">

        <div class="slider-container light rev_slider_wrapper" style="height: 650px;">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider
                 data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'arrows': {'enable': true, 'left':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':-80},'right':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':80}}}}">
                <div class="slides-number hidden-xs">
                    <span class="atual">1</span>
                    <span class="total">3</span>
                </div>
                <ul>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/slides/slide-real-estate-1.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                             id="slide-529-layer-1"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="0"
                             data-width="360"
                             data-height="360"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border"
                                  style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50"
                                  style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
											FEATURED
										</span>
                        </div>

                        <div class="tp-caption main-label"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="-50"
                             data-start="1500"
                             data-whitespace="nowrap"
                             data-transform_in="y:[-100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">PORTO DRIVE
                        </div>

                        <div class="tp-caption"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="0"
                             data-start="1500"
                             data-height="44"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">$975,000
                        </div>

                        <a class="tp-caption slide-button"
                           href="demo-real-estate-properties-detail.html"
                           data-x="left" data-hoffset="108"
                           data-y="center" data-voffset="60"
                           data-start="1500"
                           data-whitespace="nowrap"
                           data-transform_in="y:[100%];s:500;"
                           data-transform_out="opacity:0;s:500;"
                           style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                           data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                    </li>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/slides/slide-real-estate-2.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                             id="slide-529-layer-1"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="0"
                             data-width="360"
                             data-height="360"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border"
                                  style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50"
                                  style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
											FEATURED
										</span>
                        </div>

                        <div class="tp-caption main-label"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="-50"
                             data-start="1500"
                             data-whitespace="nowrap"
                             data-transform_in="y:[-100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">SOUTH MIAMI
                        </div>

                        <div class="tp-caption"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="0"
                             data-start="1500"
                             data-height="44"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">$790,000
                        </div>

                        <a class="tp-caption slide-button"
                           href="demo-real-estate-properties-detail.html"
                           data-x="left" data-hoffset="108"
                           data-y="center" data-voffset="60"
                           data-start="1500"
                           data-whitespace="nowrap"
                           data-transform_in="y:[100%];s:500;"
                           data-transform_out="opacity:0;s:500;"
                           style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                           data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                    </li>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/slides/slide-real-estate-3.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                             id="slide-529-layer-1"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="0"
                             data-width="360"
                             data-height="360"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-start="500"
                             data-responsive_offset="on"
                             style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                            <span class="featured-border"
                                  style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                            <span class="feature-tag" data-width="50" data-height="50"
                                  style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
											FEATURED
										</span>
                        </div>

                        <div class="tp-caption main-label"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="-50"
                             data-start="1500"
                             data-whitespace="nowrap"
                             data-transform_in="y:[-100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">MIAMI AVE
                        </div>

                        <div class="tp-caption"
                             data-x="left" data-hoffset="35"
                             data-y="center" data-voffset="0"
                             data-start="1500"
                             data-height="44"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                             data-textAlign="center"
                             style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                             data-mask_in="x:0px;y:0px;">$625,000
                        </div>

                        <a class="tp-caption slide-button"
                           href="demo-real-estate-properties-detail.html"
                           data-x="left" data-hoffset="108"
                           data-y="center" data-voffset="60"
                           data-start="1500"
                           data-whitespace="nowrap"
                           data-transform_in="y:[100%];s:500;"
                           data-transform_out="opacity:0;s:500;"
                           style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                           data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row pt-xlg mt-xlg">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="font-weight-normal mb-xs">
                                Listing for <strong class="text-color-secondary font-weight-extra-bold">Sale</strong>
                                <span class="font-weight-light">or</span> <strong
                                        class="text-color-secondary font-weight-extra-bold">Rent</strong>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <ul id="listingLoadMoreWrapper" class="properties-listing sort-destination p-none"
                            data-total-pages="2">
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-1.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for sale
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 530,000
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">South Miami</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-2.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for sale
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 320,000
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">Sunny Isles Beach</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-3.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for rent
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 3000 / month
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">Miami</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-4.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for sale
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 730,000
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">Lawe Worth, Florida</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-5.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for sale
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 435,000
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">Isles Beach, Florida</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                <div class="listing-item">
                                    <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-6.jpg"
                                                     class="img-responsive" alt="">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    for sale
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ 490,000
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md">Miami Ave</span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Beds:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Baths:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            Sq Ft:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            500
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="col-md-12">
                            <div id="listingLoadMoreLoader" class="listing-load-more-loader">
                                <div class="bounce-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>

                            <button id="listingLoadMore" type="button"
                                    class="btn btn-secondary btn-xs font-size-md text-uppercase outline-none p-md pl-xlg pr-xlg m-auto mb-xlg mt-xlg">
                                Load More...
                            </button>
                        </div>
                    </div>
                    <hr class="dashed">
                    <div class="row pb-lg mt-xlg">
                        <div class="col-md-12">
                            <h2 class="mt-xs mb-none">Exclusive Locations</h2>
                        </div>
                    </div>
                    <div class="row pb-lg mb-xlg">
                        <div class="col-sm-4 col-md-4">
                            <div class="special-offer-item center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-exclusive-location-1.jpg"
                                             class="img-responsive" alt="">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-title font-weight-normal text-lg p-xs mb-xs">
                                                Palm Beach
                                            </span>
                                            <button class="btn btn-secondary text-uppercase p-sm pl-md pr-md">11 Properties</button>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 xs-custom-mt-xlg">
                            <div class="special-offer-item center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-exclusive-location-2.jpg"
                                             class="img-responsive" alt="">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-title font-weight-normal text-lg p-xs mb-xs">
                                                Fischer Island
                                            </span>
                                            <button class="btn btn-secondary text-uppercase p-sm pl-md pr-md">2 Properties</button>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 xs-custom-mt-xlg">
                            <div class="special-offer-item center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-exclusive-location-3.jpg"
                                             class="img-responsive" alt="">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-title font-weight-normal text-lg p-xs mb-xs">
                                                South Miami
                                            </span>
                                            <button class="btn btn-secondary text-uppercase p-sm pl-md pr-md">25 Properties</button>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar">
                        <h2 class="font-weight-normal mb-lg">
                            Special offers
                        </h2>
                        <div class="special-offer-item center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
										<span class="special-offer-wrapper">
											<img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/offers/special-offer-1.jpg"
                                                 class="img-responsive" alt="">
											<span class="special-offer-infos text-color-light">
												<span class="special-offer-description font-weight-light text-lg">
													Amazing Houses <br>Collection
												</span>
												<span class="special-offer-title font-weight-bold text-uppercase text-md pb-xlg mb-md">
													from: $100,000
												</span>
												<button class="btn btn-secondary text-uppercase p-sm pl-xlg pr-xlg">view more</button>
											</span>
										</span>
                            </a>
                        </div>
                        <div class="special-offer-item center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
										<span class="special-offer-wrapper">
											<img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/offers/special-offer-2.jpg"
                                                 class="img-responsive" alt="">
											<span class="special-offer-infos text-color-light pt-lg">
												<span class="special-offer-description font-weight-light text-lg">
													Exclusive Comdominium
												</span>
												<span class="special-offer-title font-weight-bold text-uppercase text-md mb-md">
													Miami Beach
												</span>
												<button class="btn btn-secondary text-uppercase p-sm pl-xlg pr-xlg">view more</button>
											</span>
										</span>
                            </a>
                        </div>
                        <div class="agents text-color-light center">
                            <h4 class="text-light pt-xl m-none">Our Agents</h4>
                            <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none"
                                 data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                                <div class="pr-sm pl-sm">
                                    <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-responsive img-circle"
                                                         src="<?php echo cdn_assets(); ?>/img/team/team-11.jpg"
                                                         alt/>
												</span>
                                        <span class="agent-infos text-light pt-md">
													<strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">bruno@domain.com</span>
												</span>
                                    </a>
                                </div>
                                <div class="pr-sm pl-sm">
                                    <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-responsive img-circle"
                                                         src="<?php echo cdn_assets(); ?>/img/team/team-12.jpg"
                                                         alt/>
												</span>
                                        <span class="agent-infos text-light pt-md">
													<strong class="text-uppercase font-weight-bold">Jeff doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">jeffdoe@domain.com</span>
												</span>
                                    </a>
                                </div>
                                <div class="pr-sm pl-sm">
                                    <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-responsive img-circle"
                                                         src="<?php echo cdn_assets(); ?>/img/team/team-13.jpg"
                                                         alt/>
												</span>
                                        <span class="agent-infos text-light pt-md">
													<strong class="text-uppercase font-weight-bold">Jessica Doe</strong>
													<span class="font-weight-light">123-456-789</span>
													<span class="font-weight-light">jessicadoe@domain.com</span>
												</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter box-shadow-custom p-xlg center">
                            <i class="icon-envelope-letter icons"></i>
                            <h4 class="mt-xs mb-xs">
                                Newsletter
                            </h4>
                            <p>
                                Subscribe and be the first to know about our best offers
                            </p>

                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>

                            <div class="alert alert-danger hidden" id="newsletterError"></div>

                            <form id="newsletterForm" class="text-black pt-sm" action="php/newsletter-subscribe.php"
                                  method="POST">
                                <input class="form-control" placeholder="Your Name *" name="newsletterName"
                                       id="newsletterName" type="text">
                                <input class="form-control" placeholder="Your Email Address *" name="newsletterEmail"
                                       id="newsletterEmail" type="text">
                                <button class="btn btn-default text-uppercase background-color-secondary pt-sm pr-xlg pb-sm pl-xlg mt-xlg text-light"
                                        type="submit">Subscribe
                                </button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <footer id="footer" class="m-none custom-background-color-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="mb-md">Porto Real Estate</h4>
                        <p class="custom-color-2">
                            123 Porto Blvd, Suite 100<br>
                            New York, NY<br>
                            Phone : 123-456-7890<br>
                            Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h4 class="mb-md">Properties</h4>
                        <nav class="nav-footer">
                            <ul class="custom-list-style-1 pl-lg">
                                <li>
                                    <a href="demo-real-estate-properties.html"
                                       class="custom-color-2 text-decoration-none">
                                        For Sale
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-real-estate-properties.html"
                                       class="custom-color-2 text-decoration-none">
                                        For Rent
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-2">
                        <h4 class="mb-md">Links</h4>
                        <nav class="nav-footer">
                            <ul class="custom-list-style-1 pl-lg">
                                <li>
                                    <a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
                                        Agents
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-real-estate-who-we-are.html"
                                       class="custom-color-2 text-decoration-none">
                                        Who We Are
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-5">
                        <h4 class="mb-md">Latest Tweet</h4>
                        <div id="tweet" class="twitter" data-plugin-tweets
                             data-plugin-options="{'username': '', 'count': 1}">
                            <p>Please wait...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright custom-background-color-1 pb-none">
                <div class="container">
                    <div class="row pt-md pb-md">
                        <div class="col-md-12 left m-none">
                            <p>© Copyright 2017. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Vendor -->
<script src="<?php echo cdn_assets(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/common/common.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo cdn_assets(); ?>/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo cdn_assets(); ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo cdn_assets(); ?>/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?php echo cdn_assets(); ?>/js/demos/demo-real-estate.js"></script>

<!-- Theme Custom -->
<script src="<?php echo cdn_assets(); ?>/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo cdn_assets(); ?>/js/theme.init.js"></script>


</body>
</html>

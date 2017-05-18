<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo trans_line('title'); ?></title>

    <meta name="keywords" content="<?php echo trans_line('meta_keywords'); ?>"/>
    <meta name="description" content="<?php echo trans_line('meta_description'); ?>">
    <meta name="author" content="<?php echo trans_line('meta_author'); ?>">

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
                        <?php echo genera_menu_datos_top(); ?>
                    </nav>
                    <nav class="header-nav-top langs pull-right mr-none">
                        <?php echo genera_menu_idioma(); ?>
                    </nav>
                </div>
            </div>
            <div class="header-container container custom-position-initial">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="<?php echo base_url_lang(); ?>">
                                <img alt="Porto" width="143" height="40"
                                     src="<?php echo cdn_assets() . EMPRESA_LOGO; ?>">
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
                                    <!-- Menu generado -->
                                    <?php $this->menu_manager->generar_menu(); ?>
                                    <!-- /Menu generado -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">

        <section class="page-header page-header-light page-header-more-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo trans_line('Propiedades'); ?><span><?php echo trans_line('listado_para_venta_renta'); ?> - 123 <?php echo trans_line('propiedades'); ?></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a></li>
                            <li class="active"><?php echo trans_line('breadcrumb_pagina'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-lg">
                    <div class="col-md-12">

                        <form id="propertiesForm" action="demo-real-estate-properties.html" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesPropertyType"
                                                data-msg-required="This field is required." id="propertiesPropertyType"
                                                required="">
                                            <option value="">Property Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="2">House</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesLocation" data-msg-required="This field is required."
                                                id="propertiesLocation" required="">
                                            <option value="">Location</option>
                                            <option value="1">Miami</option>
                                            <option value="2">New York</option>
                                            <option value="3">Houston</option>
                                            <option value="4">Los Angeles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMin<?php echo trans_line('cuartos'); ?>" data-msg-required="This field is required."
                                                id="propertiesMin<?php echo trans_line('cuartos'); ?>" required="">
                                            <option value="">Min <?php echo trans_line('cuartos'); ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMinPrice" data-msg-required="This field is required."
                                                id="propertiesMinPrice" required="">
                                            <option value="">Min Price</option>
                                            <option value="150000">$150,000</option>
                                            <option value="200000">$200,000</option>
                                            <option value="250000">$250,000</option>
                                            <option value="300000">$300,000</option>
                                            <option value="350000">$350,000</option>
                                            <option value="400000">$400,000</option>
                                            <option value="450000">$450,000</option>
                                            <option value="500000">$500,000</option>
                                            <option value="550000">$550,000</option>
                                            <option value="600000">$600,000</option>
                                            <option value="650000">$650,000</option>
                                            <option value="700000">$700,000</option>
                                            <option value="750000">$750,000</option>
                                            <option value="800000">$800,000</option>
                                            <option value="850000">$850,000</option>
                                            <option value="900000">$900,000</option>
                                            <option value="950000">$950,000</option>
                                            <option value="1000000">$1,000,000</option>
                                            <option value="1250000">$1,250,000</option>
                                            <option value="1500000">$1,500,000</option>
                                            <option value="1750000">$1,750,000</option>
                                            <option value="2000000">$2,000,000</option>
                                            <option value="2250000">$2,250,000</option>
                                            <option value="2500000">$2,500,000</option>
                                            <option value="2750000">$2,750,000</option>
                                            <option value="3000000">$3,000,000</option>
                                            <option value="3250000">$3,250,000</option>
                                            <option value="3500000">$3,500,000</option>
                                            <option value="3750000">$3,750,000</option>
                                            <option value="4000000">$4,000,000</option>
                                            <option value="4250000">$4,250,000</option>
                                            <option value="4500000">$4,500,000</option>
                                            <option value="4750000">$4,750,000</option>
                                            <option value="5000000">$5,000,000</option>
                                            <option value="6000000">$6,000,000</option>
                                            <option value="7000000">$7,000,000</option>
                                            <option value="8000000">$8,000,000</option>
                                            <option value="9000000">$9,000,000</option>
                                            <option value="10000000">$10,000,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMaxPrice" data-msg-required="This field is required."
                                                id="propertiesMaxPrice" required="">
                                            <option value="">Max Price</option>
                                            <option value="150000">$150,000</option>
                                            <option value="200000">$200,000</option>
                                            <option value="250000">$250,000</option>
                                            <option value="300000">$300,000</option>
                                            <option value="350000">$350,000</option>
                                            <option value="400000">$400,000</option>
                                            <option value="450000">$450,000</option>
                                            <option value="500000">$500,000</option>
                                            <option value="550000">$550,000</option>
                                            <option value="600000">$600,000</option>
                                            <option value="650000">$650,000</option>
                                            <option value="700000">$700,000</option>
                                            <option value="750000">$750,000</option>
                                            <option value="800000">$800,000</option>
                                            <option value="850000">$850,000</option>
                                            <option value="900000">$900,000</option>
                                            <option value="950000">$950,000</option>
                                            <option value="1000000">$1,000,000</option>
                                            <option value="1250000">$1,250,000</option>
                                            <option value="1500000">$1,500,000</option>
                                            <option value="1750000">$1,750,000</option>
                                            <option value="2000000">$2,000,000</option>
                                            <option value="2250000">$2,250,000</option>
                                            <option value="2500000">$2,500,000</option>
                                            <option value="2750000">$2,750,000</option>
                                            <option value="3000000">$3,000,000</option>
                                            <option value="3250000">$3,250,000</option>
                                            <option value="3500000">$3,500,000</option>
                                            <option value="3750000">$3,750,000</option>
                                            <option value="4000000">$4,000,000</option>
                                            <option value="4250000">$4,250,000</option>
                                            <option value="4500000">$4,500,000</option>
                                            <option value="4750000">$4,750,000</option>
                                            <option value="5000000">$5,000,000</option>
                                            <option value="6000000">$6,000,000</option>
                                            <option value="7000000">$7,000,000</option>
                                            <option value="8000000">$8,000,000</option>
                                            <option value="9000000">$9,000,000</option>
                                            <option value="10000000">$10,000,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="<?php echo trans_line('buscar'); ?>"
                                           class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row mb-lg">

                <ul class="properties-listing sort-destination p-none">
                    <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                        <div class="listing-item">
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
                                <span class="thumb-info thumb-info-lighten">
                                    <span class="thumb-info-wrapper m-none">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-1.jpg"
                                             class="img-responsive" alt="">
                                        <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                            <?php echo trans_line('en_venta'); ?>
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
                                                    <?php echo trans_line('cuartos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('banos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('m2'); ?>:
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
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-2.jpg"
                                                     class="img-responsive" alt="">
												<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
													<?php echo trans_line('en_venta'); ?>
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
															<?php echo trans_line('cuartos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															3
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('banos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															2
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('m2'); ?>:
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
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-3.jpg"
                                                     class="img-responsive" alt="">
												<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
													<?php echo trans_line('en_renta'); ?>
												</span>
											</span>
											<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
												$ 3000 / <?php echo trans_line('mes'); ?>
												<i class="fa fa-caret-right text-color-secondary pull-right"></i>
											</span>
											<span class="custom-thumb-info-title b-normal p-lg">
												<span class="thumb-info-inner text-md">Miami</span>
												<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('cuartos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															3
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('banos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															2
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('m2'); ?>:
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
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
                                <span class="thumb-info thumb-info-lighten">
                                    <span class="thumb-info-wrapper m-none">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-4.jpg"
                                             class="img-responsive" alt="">
                                        <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                            <?php echo trans_line('en_venta'); ?>
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
                                                    <?php echo trans_line('cuartos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('banos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('m2'); ?>:
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
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
                                <span class="thumb-info thumb-info-lighten">
                                    <span class="thumb-info-wrapper m-none">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-5.jpg"
                                             class="img-responsive" alt="">
                                        <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                            <?php echo trans_line('en_venta'); ?>
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
                                                    <?php echo trans_line('cuartos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('banos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('m2'); ?>:
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
                            <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/'; ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/listings/listing-6.jpg"
                                                     class="img-responsive" alt="">
												<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
													<?php echo trans_line('en_venta'); ?>
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
															<?php echo trans_line('cuartos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															3
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('banos'); ?>:
														</span>
														<span class="accomodation-value custom-color-1">
															2
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															<?php echo trans_line('m2'); ?>:
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
            </div>

            <div class="row mt-lg mb-xlg">
                <div class="col-md-12 center">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- FOOTER INICIO -->
        <?php echo $this->cargar_elementos_manager->carga_con_lang('footers/footers_web_1'); ?>
        <!-- FOOTER FIN -->
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

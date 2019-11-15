<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Demo </title>

    <!-- <meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Responsive HTML5 Template">
	<meta name="author" content="okler.net"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>template/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>template/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/css/theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/css/theme-elements.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/css/theme-blog.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/css/demos/demo-digital-agency.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/css/skins/skin-digital-agency.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/css/custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url() ?>template/vendor/modernizr/modernizr.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            text-decoration: none;
        }

        .float,
        .float:hover {
            text-decoration: none;
            color: white;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>


</head>

<body>

    <a href="https://wa.me/15551234567" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <div class="body">
        <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Porto" width="82" height="40" src="<?= base_url() ?>template/img/logo-default-slim-dark.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <!-- isi class dengan "active" jika aktif -->
                                                    <a class="nav-link" href="<?= site_url() ?>home">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?= site_url() ?>home/tentang">
                                                        Tentang Yayasan
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="demo-digital-agency-contact.html">
                                                        Visi & Misi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="demo-digital-agency-services.html">
                                                        AD/RT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?= site_url() ?>home/kegiatan">
                                                        Kegiatan
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="<?= site_url() ?>donasi">
                                                        <button class="btn btn-primary" style="background-color: #30C57A; border-color: #30C57A #30C57A #269c61; color: #FFF;">DONASI</button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="ml-2 order-1 order-lg-2">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
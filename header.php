<?php  
  
  ( isset($title) ) ? $title : $title = '';
  ( isset($description ) ) ? $description : $description = '';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Boostrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="css/slick.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Qasim CSS -->
    <link rel="stylesheet" href="css/qasim.css">

</head>

<body class="body">

    <div class="right-fixed-img vc_hidden-xs vc_hidden-sm">
        <a href="contact-us.php">
            <img src="images/tricasol-side-btn.png" class="lazyloaded" data-ll-status="loaded">
        </a>
    </div>

    <div id="wrapper">
        <header id="header" class="w-100 position-fixed">
            <div class="container-fluid position-relative">
                <div class="row ">
                    <div class="col-12">
                        <div
                            class="header-block d-flex justify-content-between align-items-center flex-column flex-lg-row-reverse position-relative">
                            <div class="main-header-block d-flex align-items-center w-100">
                                <div class="logo">
                                    <a class="navbar-brand d-block" href="index.php">
                                        <figure>
                                            <img class="img-fluid" src="images/tricasol_w.png" alt="site logo">
                                        </figure>
                                    </a>
                                </div>
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                                        data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="bar top"></span>
                                        <span class="bar middle"></span>
                                        <span class="bar bottom"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbar">
                                        <ul class="navbar-nav w-100 d-lg-flex justify-content-center">
                                            <li class="nav-item">
                                                <!-- HOME  -->
                                                <a class="nav-link" href="index.php" id="navbarDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Home
                                                </a>
                                            </li>
                                            <!-- HOSTING  -->
                                            <li class="nav-item drop-menu"><a class="nav-link text-capitalize"
                                                    href="#">hosting</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="shared-hosting.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Shared Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="managed-vps-hosting.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>VPS Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="dedicated-servers.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Dedicated Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="reseller-hosting.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Reseller Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab5" href="cloud-web-hosting.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Cloud Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab5" href="window-hosting.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Window Hosting</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="rdp-servers.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>RDP Hosting</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- DEVELOPMENT  -->
                                            <li class="nav-item drop-menu"><a class="nav-link text-capitalize"
                                                    href="#">Development</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="web-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Web Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="ecommerce-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>E-commerce Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="wordpress-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>WordPress Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="mobile-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Mobile Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="woocommerce-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>WooCommerce Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="custom-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Custom Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="application-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Application Development</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="plugin-development.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Plugin Development</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- DESIGNING  -->
                                            <li class="nav-item drop-menu"><a class="nav-link text-capitalize"
                                                    href="#">Designing</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="seo.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Logo Designing</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="web-designing.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Web Designing</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="#">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>E-commerce Designing</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="mobile-designing.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Mobile Designing</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab5" href="website-branding.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Website Branding</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab6" href="#">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Digital Printing</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- MARKETING  -->
                                            <li class="nav-item drop-menu"><a class="nav-link text-capitalize"
                                                    href="#">Marketing</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="seo.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>SEO</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="smm.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>SMM</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="sem.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>SEM</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="content-writing.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Content Writting</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- DOMAINS  -->
                                            <li class="nav-item drop-down"><a class="nav-link text-capitalize"
                                                    href="#">Domains</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="domain-registration.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Domain Registration</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="domain-transfer.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Domain Transfer</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="domain-renewal.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Domain Renewal</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="pknic-domain.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>PKNIC Domain</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- SECURITY  -->
                                            <li class="nav-item drop-down"><a class="nav-link text-capitalize"
                                                    href="#">Security</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="ssl-certificates.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>SSL Certificate</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="wordpress-security.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>WordPress Security</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="website-security.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Website Security</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- about  -->
                                            <li class="nav-item drop-down"><a class="nav-link text-capitalize"
                                                    href="#">About</a>
                                                <div class="sub_menu">
                                                    <div class="col">
                                                        <a class="hosting-tab1" href="blog.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Blog</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab2" href="about-us.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>About us</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab3" href="our-projects.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Our projects</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab4" href="privacy-policy.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Privacy Policy</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="hosting-tab5" href="terms-and-condition.php">
                                                            <img src="images/hosting-icon/data-center.png">
                                                            <h5>Term & Condition</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Contact  -->
                                            <!-- <li class="nav-item position-relative"><a class="nav-link text-capitalize"
                                                    href="contact-us.php">Contact</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- visual section -->
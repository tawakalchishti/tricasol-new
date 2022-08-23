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
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
    <div class="container position-relative">
      <div class="row ">
        <div class="col-12">
          <div class="header-block d-flex justify-content-between align-items-center flex-column flex-lg-row-reverse position-relative">
            <div class="main-header-block d-flex align-items-center w-100">
              <div class="logo">
                <a class="navbar-brand d-block" href="index.php">
                  <figure>
                    <img src="images/tricasol_w.png" alt="site logo">
                  </figure>
                </a>
              </div>
              <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar top"></span>
                    <span class="bar middle"></span>
                    <span class="bar bottom"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav w-100 d-lg-flex justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Home
                        </a>
                      </li>
                      <li class="nav-item drop-menu"><a class="nav-link text-capitalize" href="#">hosting</a>
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
                        </div>
                      </li>
                      <li class="nav-item position-relative"><a class="nav-link text-capitalize" href="#services">development</a></li>
                      <li class="nav-item position-relative"><a class="nav-link text-capitalize" href="#marketing">marketing</a></li>
                      <li class="nav-item position-relative"><a class="nav-link text-capitalize" href="about-us.php">about</a></li>

                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- visual section -->
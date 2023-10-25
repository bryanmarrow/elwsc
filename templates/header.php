<?php

session_start();

require "languages/lang_config.php";


// require $rootPath.'/db/sesionWeb.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($title); ?>
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($author); ?>">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title" content="<?php echo htmlspecialchars($ogtitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($ogdescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogimagen); ?>">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
  </head>
  
  <body>
   
  <div class="popup-search-box d-none d-lg-block"><button class="searchClose border-theme text-theme"><i
                class="fal fa-times"></i></button>
        <form action="#"><input type="text" class="border-theme" placeholder="What are you looking for?"> <button
                type="submit"><i class="fal fa-search"></i></button></form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="vs-widget-about">
                    <div class="about-logo"><a href="index.html"><img src="assets/img/logo.png" alt="Evona"></a></div>
                    <p class="about-text">Eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum ultrice
                        gravida isus commodo viverra.</p>
                    <div class="multi-social"><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                            href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                            href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                            href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
            </div>
            <div class="widget">
                <h4 class="widget_title">Popular Posts</h4>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-1.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a href="blog-details.html">You can now listen to the entire</a></h4>
                            <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr
                                    22, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-2.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a href="blog-details.html">How to in success business</a></h4>
                            <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr
                                    23, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-3.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a href="blog-details.html">Super business plan in 2022</a></h4>
                            <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr
                                    24, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="index.html"><img src="assets/img/logo/logo_elwsc.png" alt="Evona"></a></div>
            <div class="vs-mobile-menu">
                <?php require 'menu.php' ?>
            </div>
        </div>
    </div>
   
   

    
  <header class="vs-header header-layout3">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=522222501558&text=Hola%2C%20necesito%20mas%20informaci%C3%B3n.">
                                        <i class="fas fa-phone"></i>
                                        <?= index_contactoviawhatsapp ?> 
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>Language :</li>
                                <li>
                                    <form method='get' action='' id='form_lang'>
                                        <select name='lang' onchange='changeLang();'>
                                            <option value='es'
                                            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'es'){ echo "selected"; } ?>>Español
                                            </option>
                                            <option value='en'
                                            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>>English
                                            </option>
                                        </select>
                                    </form>
                                </li>
                                <li><a target="_blank" href="https://facebook.com/eurosonlatino"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/Eurosonlatino"><i class="fab fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://instagram.com/eurosonlatino"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container-fluid">
                    <div class="row gx-35 align-items-center">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="#"><img src="assets/img/logo/logo_elwsc.png" alt="Evona"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                                    <?php require 'menu.php' ?>
                                    </nav>
                                </div>
                                <div class="col d-block d-lg-none"><button type="button" class="vs-menu-toggle"><i
                                            class="far fa-bars"></i> Menu</button></div>
                                <div class="col-auto d-none d-lg-block">
                                    <div class="header-button d-none">
                                        <!-- <button type="button" class="searchBoxToggler simple-icon"><i class="far fa-search"></i></button> -->
                                        <a href="contact.html" class="vs-btn d-none d-xl-block"><?= index_apartado_fullpass ?></a> <button
                                            type="button" class="sideMenuToggler custom-icon"><span
                                                class="three-square"></span><span class="three-square"></span><span
                                                class="three-square"></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
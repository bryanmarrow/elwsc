<?php

session_start();

require $rootPath."languages/lang_config.php";


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
                                <li><a href="https://facebook.com/eurosonlatino"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/Eurosonlatino"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://instagram.com/eurosonlatino"><i class="fab fa-instagram"></i></a></li>
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
                                        <ul>
                                            <li>
                                                <a class="" href="<?= $rootPath ?>"><?=  index_inicio ?></a>
                                            </li>
                                            
                                            <li class="menu-item-has-children"><a href="#"><?=  index_campeonato ?></a>
                                                <ul class="sub-menu">
                                                    <?php  if(isset($_SESSION['lang'])){ ?>
                                                        <?php
                                                            if($_SESSION['lang']=='es'){
                                                                        
                                                        ?>
                                                            <li><a class="dropdown-item font-size-base" target="_blank" href="http://bit.ly/reglamento-elwsc2021"><?= index_reglamento ?></a></li>
                                                        
                                                        <?php

                                                            }  if($_SESSION['lang']=='en'){
                                                                        
                                                        ?>
                                                        
                                                            <li><a class="dropdown-item font-size-base" target="_blank" href="http://bit.ly/rules-elwsc2021">Rules</a></li>
                                                        <?php } ?>
                                                    <?php }else{ ?>  
                                                        <li><a class="dropdown-item font-size-base" target="_blank" href="http://bit.ly/reglamento-elwsc2021"><?= index_reglamento ?></a></li>
                                                    <?php } ?>  
                                                    <!-- <li><a href="event-details.html">Event Details</a></li> -->
                                                </ul>
                                            </li>
                                            
                                            <li><a href="#"><?= index_lineup ?></a></li>
                                            <li><a href="#"><?= index_conciertos ?></a></li>
                                            <li><a href="#">Hotel</a></li>
                                        </ul>
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
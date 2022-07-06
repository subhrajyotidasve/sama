<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sama</title>
	
    
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css">
    
    
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
      
    <!--responsive_css-->
    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet" type="text/css">
      
    <!--font-awesome-->
    <link href="<?php bloginfo('template_directory'); ?>/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    
    <!--owl-carousel-->
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css">

    <!--owl-carousel-->
    <link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet" type="text/css">

    <!--favicon-->
	<link rel="icon" type="images/favicon.png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
<?php wp_head(); ?>
  </head>
  <body>

    <div class="container-fluid">
        <div class="row header_area">
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo_area">
                        <a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="img"></a>
                    </div>
                    <div class="menu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="menu_area">
                        <div class="cls_sidemenu">X</div>
                         <?php 

                            $nav = array(
                            'menu' => 'Main Menu',
                            'container' => 'ul',
                            'container_class' => 'menu'                           

                            );                         

                            

                            ?>

                    <?php wp_nav_menu($nav) ?>
                        <!-- <ul class="menu">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="publications.html">Publications</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
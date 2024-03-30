<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c864af78f7.js" crossorigin="anonymous"></script>
    <title>Banff Website</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css');?>">
    <?php wp_head();?>
</head>
<body>
    <header>
    <?php
if ( is_active_sidebar( 'header-widget-area' ) ) :
    dynamic_sidebar( 'header-widget-area' );
endif;
?>
        <h1 class="Banff-head">Banff</h1>
        <?php wp_nav_menu(); ?>
    <div class="social-icons">
        <a href="https://www.facebook.com/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/?lang=en" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/" class="social-icon"><i class="fab fa-linkedin"></i></a>
    </div>
        <?php get_search_form(); ?>
    </header> 

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <?php wp_head(); ?>

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container navbar-custom">
    <div class="nav-logo">
    <?php 
    if(get_header_image()!= ""){
        ?>
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_header_image();?>" alt="<?=_e('NS News')?>" class="logo header-logo"></a>
        <?php
    }
    else{
      ?>
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a>
      <?php
    }
    ?>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(array('theme_location'=> 'primary', 'menu_class'=> 'navbar-nav me-auto mb-2 mb-lg-0')) ?>
      
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
     <meta name="robots" content="doindex, dofollow" /> 
    <?php } ?>
      <title>
       <?php
             if (!(is_404()) && (is_single()) || (is_page()) && !(is_page('Home'))  ) {
             bloginfo('name'); echo " | "; wp_title(''); 
         }
          elseif (is_404()) {
             echo 'Not Found - '; }
          elseif (is_page('Home') || is_home()) {
             bloginfo('name'); echo ' | '; bloginfo('description'); }
          else {
              bloginfo('name'); }
          if ($paged>1) {
             echo ' - page '. $paged; }
       ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="57x57" href="<? url(); ?>/images/touch-icon-iphone-114.png" />
    <!-- Retina iPhone --> 
    <link rel="apple-touch-icon" sizes="114x114" href="<? url(); ?>/images/touch-icon-iphone-114.png" />
    <!-- Standard iPad --> 
    <link rel="apple-touch-icon" sizes="72x72" href="<? url(); ?>/images/touch-icon-ipad-144.png" />
    <!-- Retina iPad --> 
    <link rel="apple-touch-icon" sizes="144x144" href="<? url(); ?>/images/touch-icon-ipad-144.png" /> 
    <link rel="shortcut icon" href="<?url();?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?url();?>/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php url(); ?>/localBar.min.css" />
    <link rel="stylesheet" href="<?php url(); ?>/jquery.mobile.structure-1.3.0.min.css" />
    <script src="<?php url(); ?>/jquery-1.8.3.min.js"></script>

    <script src="<?php url(); ?>/jquery.mobile-1.3.0.min.js"></script>
    <link rel="stylesheet" href="<?php url(); ?>/style.css" />
  </head>
<body <?php body_class(); ?>>   
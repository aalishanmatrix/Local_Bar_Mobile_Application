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
    <link rel="apple-touch-icon" sizes="57x57" href="<? url(); ?>/images/touch-icon-iphone-114.png" />
    <!-- Retina iPhone --> 
    <link rel="apple-touch-icon" sizes="114x114" href="<? url(); ?>/images/touch-icon-iphone-114.png" />
    <!-- Standard iPad --> 
    <link rel="apple-touch-icon" sizes="72x72" href="<? url(); ?>/images/touch-icon-ipad-144.png" />
    <!-- Retina iPad --> 
    <link rel="apple-touch-icon" sizes="144x144" href="<? url(); ?>/images/touch-icon-ipad-144.png" /> 

    <link rel="stylesheet" href="<?php url(); ?>/localBar.min.css" />
    <link rel="stylesheet" href="<?php url(); ?>/jquery.mobile.structure-1.3.0.min.css" /> 
    <script src="<?php url(); ?>/jquery-1.9.1.min.js"></script> 
    <script src="<?php url(); ?>/jquery.mobile-1.3.0.min.js"></script>

    <link rel="stylesheet" href="<?php url(); ?>/style.css" />
</head>
<body <?php body_class(); ?>>
    

  
    <div data-role="page" data-theme="b">
     
    <!-- panel -->
    <div data-role="panel" id="panel" data-position="left" data-display="push" data-theme="b">
     
        <div class="social">
                        <a href="#"><img src="<? url(); ?>/images/facebook.png"/></a>
                        <a href="#"><img src="<? url(); ?>/images/twitter.png"/></a>
                        <a href="#"><img src="<? url(); ?>/images/youtube.png"/></a> 
                        <a href="#"><img src="<? url(); ?>/images/google_plus.png"/></a>
              </div>
       <br/><br/> 
    <ul data-role="listview" data-inset="false" data-theme="c">
    <li data-icon="list-arrow">
        <a href="<? bloginfo('url'); ?>/todays-evening/" data-ajax="false">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png"> -->
            Today's Evening
        </a>
    </li>
    <li data-icon="list-arrow">
    <!-- <a href="<? bloginfo('url'); ?>/menu/"  data-transition="flip"> -->
    <a href="https://docs.google.com/gview?embedded=true&url=http://greenfiremarket.com/wp-content/uploads/2013/01/Menu.pdf">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png"> -->
      Menu
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/upcoming_events/" data-transition="flip">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/events.png"> -->
      Events
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/contact/"  data-ajax="false">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png"> -->
      Contact
    </a>
  </li>
</ul>
<br/><br/>      
        <center>
          
          <a id="close" href="#toolbar" data-rel="close" data-role="button" data-theme="c" data-icon="delete" data-inline="true">Close</a>
        </center>  
        
    </div><!-- /panel -->
        
    <div id="header" data-role="header">
        <div id="head_image_wrapper">
             <div id="head_image">
             </div>
        </div> 
        <a href="#panel" data-icon="menu" class="ui-btn-left" data-iconpos="notext" id="menu">Menu</a>
    <a href="tel:1234" data-icon="call" class="ui-btn-right" data-iconpos="notext" id="menu">Call</a>
    </div>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php url(); ?>/localBar.min.css" />
    <link rel="stylesheet" href="<?php url(); ?>/jquery.mobile.structure-1.3.0.min.css" /> 
    <script src="<?php url(); ?>/jquery-1.9.1.min.js"></script> 
    <script src="<?php url(); ?>/jquery.mobile-1.3.0.min.js"></script>

    <link rel="stylesheet" href="<?php url(); ?>/style.css" />
</head>
<body <?php body_class(); ?>>
	

  
	<div data-role="page" data-add-back-btn="true" data-theme="b">
     
    <div data-role="panel" id="panel" data-position="left" data-display="push" data-theme="b">

        <h3>Left Panel: Push</h3>
        <p>This panel is positioned on the left with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true">Close panel</a>
    </div><!-- /leftpanel2 -->
        
	<div id="header" data-role="header">
		<div id="head_image_wrapper">
             <div id="head_image">
             </div>
        </div> 
		<a href="#panel" data-icon="menu" class="ui-btn-right" data-iconpos="notext" id="menu">Menu</a>
	</div>
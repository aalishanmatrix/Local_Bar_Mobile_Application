
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title>
       <?php
             bloginfo('name'); echo " | "; wp_title(''); 
       ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php url(); ?>/localBar.min.css" />
    <link rel="stylesheet" href="<?php url(); ?>/jquery.mobile.structure-1.3.0.min.css" /> 
    
    <link rel="stylesheet" href="<?php url(); ?>/style.css" />
		<script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/demos/js/modernizr-2.0.6/modernizr.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script> 
		<script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/demos/js/jquery-1.7.1/jquery.min.js"></script>
		 <script src="<?php url(); ?>/jquery.mobile-1.3.0.min.js"></script>
		<script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/demos/js/jquery.ui-1.8.15/jquery.ui.autocomplete.min.js"></script>
		<script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/demos/js/demo.js"></script>
		<script type="text/javascript" src="<?php url(); ?>/jquery.ui.map.js"></script>
		<script type="text/javascript" src="<?php url(); ?>/jquery.ui.map.services.js"></script>
		<script type="text/javascript" src="<?php url(); ?>/jquery.ui.map.extensions.js"></script>
		<script type="text/javascript">
				
			var mobileDemo = { 'center': '57.7973333,12.0502107', 'zoom': 10 };
			
			$('#directions_map').live('pageinit', function() {
				demo.add('directions_map', function() {
					$('#map_canvas_1').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function() {
						var self = this;
						self.set('getCurrentPosition', function() {
							self.refresh();
							self.getCurrentPosition( function(position, status) {
								if ( status === 'OK' ) {
									var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
									self.get('map').panTo(latlng);
									self.search({ 'location': latlng }, function(results, status) {
										if ( status === 'OK' ) {
											$('#from').val(results[0].formatted_address);
										}
									});
								} else {
									alert('Unable to get current position');
								}
							});
						});
						$('#submit').click(function() {
							self.displayDirections({ 'origin': $('#from').val(), 'destination': 'Khulna, Bangladesh', 'travelMode': google.maps.DirectionsTravelMode.DRIVING }, { 'panel': document.getElementById('directions')}, function(response, status) {
								( status === 'OK' ) ? $('#results').show() : $('#results').hide();
							});
							return false;
						});
					}});
				}).load('directions_map');
			});
			
			$('#directions_map').live('pageshow', function() {
				demo.add('directions_map', $('#map_canvas_1').gmap('get', 'getCurrentPosition')).load('directions_map');
			});
					//$('#to').val()		
        </script>
</head>

<body <?php body_class(); ?>>
    

  
    <div data-role="page" data-theme="b" id="directions_map">
     
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
        <a href="<? bloginfo('url'); ?>/todays-evening/" data-transition="slide">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png"> -->
            Today's Evening
        </a>
    </li>
    <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/menu/"  data-transition="flip">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png"> -->
      Menu
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/events/" data-transition="slidedown">
      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/events.png"> -->
      Events
    </a>
  </li>
  <li data-icon="list-arrow">
    <a href="<? bloginfo('url'); ?>/contact/"  data-transition="pop">
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

	<div data-role="content">
				<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
					<div id="map_canvas_1" style="height:300px;"></div>
					<p>
						<label for="from">From</label>
						<input id="from" class="ui-bar-c" type="text" value="G&ouml;teborg, Sweden" />
					</p>
					<p>
						<label for="to">To</label>
						<br/>Local Bar - Khulna, Bangladesh
						<!-- <input id="to" class="ui-bar-c" type="text" value="Khulna, Bangladesh" /> -->
					</p>
					<a id="submit" href="#" data-role="button" data-icon="search">Get directions</a>
				</div>
				<div id="results" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" style="display:none;">
					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-top ui-btn-up-undefined">Results</div>
					<div id="directions"></div>
					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-bottom ui-btn-up-undefined"></div>
				</div>
	</div>

<?php get_footer(); ?>
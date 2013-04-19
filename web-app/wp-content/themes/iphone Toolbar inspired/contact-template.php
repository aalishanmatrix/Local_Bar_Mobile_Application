<?php get_header(); ?>
<div data-role="page" data-theme="b"  id="directions_map">
	<?php include("header_portion.php");?>

    <script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/demos/js/modernizr-2.0.6/modernizr.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script> 
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
    </script>
	<div data-role="content">

				<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
					<div id="map_canvas_1" style="height:300px;"></div>
					<p>
						<label for="from">Your Location</label>
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
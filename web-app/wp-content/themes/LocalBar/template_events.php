<?php

/*

Template Name: Event

*/

?>





<?php get_header(); ?>
<div data-role="content" id="content">
	<h1>Upcoming Events</h1>
	<div id="events">
		<div class="event_wrapper">
		     <div class="event_caption">Nirvana is Coming!</div>
		     <div class="event_date">31th April, 2013</div>
		     <div class="event_desc">This is a event description! This is the latest upcoming event will take place</div>
		</div>
		
		<div class="event_wrapper">
		     <div class="event_caption">Happy New Year, 2013!</div>
		     <div class="event_date">1th January, 2013</div>
		     <div class="event_desc">During the 1500s, a printer adapted Cicero's text to develop a page of type samples. Since then, the Latin-like text has been the printing industry's standard for fake, or dummy, text.<img src="<? url(); ?>/images/events.jpg">  </div>
		</div>      
	</div>	
</div>
<?php get_footer(); ?>
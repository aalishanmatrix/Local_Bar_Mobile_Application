<?php

/*

Template Name: inactive

*/

?>


<?php get_header(); ?>
<div data-role="page" data-theme="b" id="eventpage">
        
	   <?php include("header_portion.php");?>
<div data-role="content" id="content">
	<h1>Upcoming Events</h1>
	<div id="events">
		<?php
            $args = array('post_type' => 'event', 'posts_per_page' => 5);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); 
                $date = get_post_meta($post->ID, 'wpcf-date', true);
            ?>
            <div class="event_wrapper">
		        <div class="event_caption"><?php the_title(); ?></div>
		        <div class="event_date"><?=$date?></div>
		        <div class="event_desc"><?php the_content(); ?></div>
		    </div>
        <?php  endwhile;  ?>   
	</div>	
</div>
<?php get_footer(); ?>
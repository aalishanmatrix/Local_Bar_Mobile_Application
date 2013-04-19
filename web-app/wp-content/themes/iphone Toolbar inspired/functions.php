<?php
function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    add_filter( 'show_admin_bar', '__return_false' );

    function url() {
    	echo get_stylesheet_directory_uri();
    }
    if (function_exists('register_nav_menus')) {
        register_nav_menus(array(
            'main_nav' => 'Main Navigation Menu'
        ));
    }

    /*image slideshow*/
/* Register a Custom Post Type (Slide) */
add_action('init', 'slide_init');
function slide_init() {
	$labels = array(
		'name' => _x('Slides', 'post type general name'),
		'singular_name' => _x('Slide', 'post type singular name'),
		'add_new' => _x('Add New', 'slide'),
		'add_new_item' => __('Add New Slide'),
		'edit_item' => __('Edit Slide'),
		'new_item' => __('New Slide'),
		'view_item' => __('View Slide'),
		'search_items' => __('Search Slides'),
		'not_found' => __('No slides found'),
		'not_found_in_trash' => __('No slides found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'SlideShow'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	); 
	register_post_type('slide', $args);
}

/* Update Slide Messages */
add_filter('post_updated_messages', 'slide_updated_messages');
function slide_updated_messages($messages) {
	global $post, $post_ID;
	$messages['slide'] = array(
		0 => '',
		1 => sprintf(__('Slide updated.'), esc_url(get_permalink($post_ID))),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Slide updated.'),
		5 => isset($_GET['revision']) ? sprintf(__('Slide restored to revision from %s'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
		6 => sprintf(__('Slide published.'), esc_url(get_permalink($post_ID))),
		7 => __('Slide saved.'),
		8 => sprintf(__('Slide submitted.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
		9 => sprintf(__('Slide scheduled for: <strong>%1$s</strong>. '), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
		10 => sprintf(__('Slide draft updated.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
	);
	return $messages;
}

/* Update Slide Help */
add_action('contextual_help', 'slide_help_text', 10, 3);
function slide_help_text($contextual_help, $screen_id, $screen) {
	if ('slide' == $screen->id) {
		$contextual_help =
		'<p>' . __('Things to remember when adding a slide:') . '</p>' .
		'<ul>' .
		'<li>' . __('Give the slide a title. The title will be used as the slide\'s headline.') . '</li>' .
		'<li>' . __('Attach a Featured Image to give the slide its background.') . '</li>' .
		'<li>' . __('Enter text into the Visual or HTML area. The text will appear within each slide during transitions.') . '</li>' .
		'</ul>';
	}
	elseif ('edit-slide' == $screen->id) {
		$contextual_help = '<p>' . __('A list of all slides appears below. To edit a slide, click on the slide\'s title.') . '</p>';
	}
	return $contextual_help;
}
/*End of Slideshow*/

/*Enabling Featired Image*/
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

    /*image Event*/
/* Register a Custom Post Type (Event) */
add_action('init', 'Event_init');
function Event_init() {
	$labels = array(
		'name' => _x('Events', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'add_new' => _x('Add New', 'Event'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('View Event'),
		'search_items' => __('Search Events'),
		'not_found' => __('No Events found'),
		'not_found_in_trash' => __('No Events found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Event'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'_ui' => true, 
		'_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	); 
	register_post_type('Event', $args);
}

/* Update Event Messages */
add_filter('post_updated_messages', 'Event_updated_messages');
function Event_updated_messages($messages) {
	global $post, $post_ID;
	$messages['Event'] = array(
		0 => '',
		1 => sprintf(__('Event updated.'), esc_url(get_permalink($post_ID))),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Event updated.'),
		5 => isset($_GET['revision']) ? sprintf(__('Event restored to revision from %s'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
		6 => sprintf(__('Event published.'), esc_url(get_permalink($post_ID))),
		7 => __('Event saved.'),
		8 => sprintf(__('Event submitted.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
		9 => sprintf(__('Event scheduled for: <strong>%1$s</strong>. '), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
		10 => sprintf(__('Event draft updated.'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
	);
	return $messages;
}

/* Update Event Help */
add_action('contextual_help', 'Event_help_text', 10, 3);
function Event_help_text($contextual_help, $screen_id, $screen) {
	if ('Event' == $screen->id) {
		$contextual_help =
		'<p>' . __('Things to remember when adding a Event:') . '</p>' .
		'<ul>' .
		'<li>' . __('Give the Event a title. The title will be used as the Event\'s headline.') . '</li>' .
		'<li>' . __('Attach a Featured Image to give the Event its background.') . '</li>' .
		'<li>' . __('Enter text into the Visual or HTML area. The text will appear within each Event during transitions.') . '</li>' .
		'</ul>';
	}
	elseif ('edit-Event' == $screen->id) {
		$contextual_help = '<p>' . __('A list of all Events appears below. To edit a Event, click on the Event\'s title.') . '</p>';
	}
	return $contextual_help;
}
/*End of Event*/


?>    
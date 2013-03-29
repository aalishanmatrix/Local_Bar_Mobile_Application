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
?>    
<?php
/*
Plugin Name: Disable ACF unsafe HTML Filters
Description: A Wordpress plugin to disable the ACF unsafe html filter and remove the warning message.
Version: 1.0
Author: Joshua Solomon
*/

// Activate escape_html_optin filter
add_filter( 'acf/the_field/escape_html_optin', '__return_true' );

// Activate allow_unsafe_html filter
add_filter( 'acf/the_field/allow_unsafe_html', function() {
    return true;
}, 10, 2);

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );
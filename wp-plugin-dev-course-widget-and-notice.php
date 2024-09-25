<?php

/**
 * Plugin Name: First Plugin
 * Description: This plugin create widget and notice in the admin dashboard.
 * Author: Abdellah Sedda
 * Version: 1.0.0
 * Author URI: https://example.com/
 * Plugin URI: https://example.com/
 */

// Admin dashboard widget
add_action("wp_dashboard_setup", "wp_plugin_dev_course_dashboard_widget");

function wp_plugin_dev_course_dashboard_widget() {
    wp_add_dashboard_widget( "wp_plugin_dev_course_widget_id", "Admin Widget", "wp_plugin_dev_course_dashboard_widget_corps");
}

function wp_plugin_dev_course_dashboard_widget_corps() {
    echo "Body of widget admin";
}

// Admin Notice 
add_action("admin_notices", "wp_plugin_dev_course_admin_notice");

function wp_plugin_dev_course_admin_notice() {
    echo '<div class="notice notice-success is-dismissible"><p>Success Notice for admin</p></div>';
    echo '<div class="notice notice-error is-dismissible"><p>Error Notice for admin</p></div>';
    echo '<div class="notice notice-info is-dismissible"><p>Info Notice for admin</p></div>';
    echo '<div class="notice notice-warning is-dismissible"><p>Warning Notice for admin</p></div>';
}
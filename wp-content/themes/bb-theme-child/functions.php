<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// Change Pods MORE FIELDS Metabox Title to Custom

add_filter('pods_meta_default_box_title','ni_changethatname',10,5);

function ni_changethatname($title, $pod, $fields, $type, $name ) {

// assuming we are changing the meta box title on a pod named 'business' 
  $title = ($name=='project') ? __('project info', 'plugin_lang') : $title ;
  return $title;
}
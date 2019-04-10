<?php
// Setup styles
add_action( 'wp_enqueue_scripts', 'block_talk_enqueue_styles' );

function block_talk_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Register a new ACF Block: https://www.advancedcustomfields.com/resources/acf_register_block/

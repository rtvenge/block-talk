<?php
// Enqueue parent theme styles
add_action( 'wp_enqueue_scripts', 'block_talk_enqueue_styles' );

function block_talk_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_image_size('hero', 1440);

// Register a new ACF Block: https://www.advancedcustomfields.com/resources/acf_register_block/

add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    // register a testimonial block
    acf_register_block([
      'name'              => 'hero',
      'title'             => __('Hero'),
      'description'       => __('A custom Hero block.'),
      'supports'          => [
        'align' => ['wide', 'full'],
      ],
      'render_template'   => 'template-parts/block/content-hero.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'mode'              => 'preview',
      'keywords'          => ['hero', 'image'],
    ]);
  }
}

add_image_size('hero', 1440);

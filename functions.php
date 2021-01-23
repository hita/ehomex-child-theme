<?php
//* Custom code
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//This WordPress function safely adds style sheet files to a WordPress theme.
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

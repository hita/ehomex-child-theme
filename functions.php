<?php
//* Custom code

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//This WordPress function safely adds style sheet files to a WordPress theme.
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* If you are using custom WooCommerce template overrides in your theme you need to 
declare WooCommerce support using the add_theme_support function. WooCommerce template 
overrides are only enabled on themes that declare WooCommerce support. If you do not 
declare WooCommerce support in your theme, WooCommerce will assume the theme is not 
designed for WooCommerce compatibility and will use shortcode-based unsupported theme 
rendering to display the shop.*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}  

<?php
/**
 * Add WooCommerce support
 *
 *
 * @package natalia
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
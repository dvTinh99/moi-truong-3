<?php

function register_menu() {
	register_nav_menu('header-menu',__( 'Header menu' ));
	register_nav_menu('footer-menu',__( 'Footer menu' ));
	register_nav_menu('sidebar-menu',__( 'SideBar menu' ));
	register_nav_menu('left-sidebar',__( 'Left Sidebar menu' ));
	
	if (function_exists('register_sidebar')){
		register_sidebar(array(
		'name'=> 'Cột bên',
		'id' => 'sidebar',
		));
	}
}
add_action( 'init', 'register_menu' );

//import template woocommerce
function my_custom_wc_theme_support() {

    add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-lightbox' );

	add_theme_support( 'wc-product-gallery-slider' );

}

add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );


function percentSale($price, $price_sale){
    return number_format(100 - (($price_sale * 100 )/ $price), 1);
}

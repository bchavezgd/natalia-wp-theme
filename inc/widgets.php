<?php
/**
 * Declaring widgets
 *
 *
 * @package natalia
 */
function natalia_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'natalia' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Hero Slider', 'natalia' ),
        'id'            => 'hero',
        'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="item">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Hero Static', 'natalia' ),
        'id'            => 'statichero',
        'description'   => 'Static Hero widget. no slider functionallity',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'natalia' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'natalia_widgets_init' );
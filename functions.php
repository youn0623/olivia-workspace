<?php
function banff_website_setup() {
	add_theme_support( 'wp-block-styles' );
}

function enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css' ));

wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'),array('jquery'),'', true );
}

function display_google_map() {
    echo '<div class="map-container">';
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20010.129747919353!2d-115.58583121826803!3d51.17731604570212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5370ca45910c4afd%3A0xcaafaebedaac9463!2sBanff%2C%20AB!5e0!3m2!1sen!2sca!4v1710455533246!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    echo '</div>';
}

function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
function my_register_header_widget() {
    register_sidebar(
        array(
            'name'          => __( 'Header', 'mytheme' ),
            'id'            => 'header-widget-area',
            'description'   => __( 'Widget area to be displayed at the top of the header.', 'mytheme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'my_register_header_widget' );
add_action( 'widgets_init', 'my_register_sidebars' );
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
add_action( 'after_setup_theme', 'banff_website_setup' );




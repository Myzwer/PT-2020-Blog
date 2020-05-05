<?php
//*****************************************************
//******************** LINK CSS ***********************
//*****************************************************

// MAIN STYLE SHEET REQUIRED BY WORDPRESS
wp_enqueue_style( 'style', get_stylesheet_uri() );


// LOAD IN ALL STYLES COMPILED BY GULP
function load_styles() {
	wp_enqueue_style( 'main.min', get_template_directory_uri() . '/dist/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'load_styles');





//*****************************************************
//******************** LINK JS ************************
//*****************************************************

// LOAD IN JQUERY
wp_enqueue_script( 'jquery' );


// LOAD IN ALL SCRIPTS COMPILED BY JS
function scripts_loadin() {
wp_enqueue_script( 'devwp', get_template_directory_uri() . '/dist/js/devwp.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');



//*****************************************************
//********************* FONTS *************************
//*****************************************************

//Raleway Registration
wp_register_style( 'raleway_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700' );
wp_enqueue_style('raleway_font');

wp_register_style( 'open_sans_font', 'https://fonts.googleapis.com/css2?family=Open+Sans&display=swap' );
wp_enqueue_style('open_sans_font');


//*****************************************************
//*************** MENU REGISTRATIONS ******************
//*****************************************************

//*********** Header ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

//*********** Footer Col 3 ***********
function register_col_3() {
    register_nav_menu('footer-column-3', ( 'Footer Column 3' ));
}
add_action( 'init', 'register_col_3' );



//*****************************************************
//**************** CUSTOM TAXONOMIES ******************
//*****************************************************

/**
 * Register a custom post type called "Broadcast".
 *
 * @see get_post_type_labels() for label keys.
 */
function broadcast_init() {
    $labels = array(
        'name'                  => __( 'Broadcasts'),
        'singular_name'         => __( 'Broadcast'),
        'menu_name'             => __( 'Broadcasts'),
        'name_admin_bar'        => __( 'Broadcast'),
        'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Broadcast'),
        'new_item'              => __( 'New Broadcast'),
        'edit_item'             => __( 'Edit Broadcast'),
        'view_item'             => __( 'View Broadcast'),
        'all_items'             => __( 'All Broadcasts'),
        'search_items'          => __( 'Search Broadcasts'),
        'parent_item_colon'     => __( 'Parent Broadcasts:'),
        'not_found'             => __( 'No Broadcasts found.'),
        'not_found_in_trash'    => __( 'No Broadcasts found in Trash.'),
        'archives'              => __( 'Broadcast archives'),
        'insert_into_item'      => __( 'Insert into Broadcast'),
        'uploaded_to_this_item' => __( 'Uploaded to this Broadcast'),
        'filter_items_list'     => __( 'Filter Broadcast list'),
        'items_list_navigation' => __( 'Broadcast list navigation'),
        'items_list'            => __( 'Broadcast list'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'broadcast' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'dashicons-upload',
        'taxonomies'         => array( 'watch_category' )
    );

    register_post_type( 'broadcast', $args );


// This is the taxonomy
    register_taxonomy('format', 'broadcast',
        array(
            'labels' => array(
                'name' => __( 'Formats' ),
                'singular_name' => __( 'Format' ),
                'add_new_item' => __( 'Add New Format' ),
                'edit_item' => __( 'Edit Format' ),
                'new_item_name' => __( 'New Format Name' ),
                'view' => __( 'View Format' ),
                'view_item' => __( 'View Format' ),
                'search_items' => __( 'Search Formats' ),
                'not_found' => __( 'No Formats found' ),
                'not_found_in_trash' => __( 'No Formats found in Trash' ),
                'parent_item' => __( 'Parent Format' ),
            ),
            'hierarchical' => false,
            'rewrite'      => array( 'slug' => 'format' )
        )
    );
}

add_action( 'init', 'broadcast_init' );




// This is the taxonomy for the Sermon Videos / Other Video Categories.
register_taxonomy('watch_category', 'broadcast',
    array(
        'labels' => array(
            'name' => __( 'Watch Categories' ),
            'singular_name' => __( 'Watch Category' ),
            'add_new_item' => __( 'Add New Watch Category' ),
            'edit_item' => __( 'Edit Watch Category' ),
            'new_item_name' => __( 'New Watch Category' ),
            'view' => __( 'View Watch Categories' ),
            'view_item' => __( 'View Watch Categories' ),
            'search_items' => __( 'Search Watch Categories' ),
            'not_found' => __( 'No Watch Categories found' ),
            'not_found_in_trash' => __( 'No Watch Categories found in Trash' ),
            'parent_item' => __( 'Parent Watch Categories' ),
        ),
        'hierarchical' => true,
        'rewrite'      => array( 'slug' => 'watch_categories' )
    )
);

add_action( 'init', 'broadcast_init' );

?>
<?php

function add_styles()
{
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style('menu-style', get_template_directory_uri() . '/css/menu.css');
 

}

add_action('wp_enqueue_scripts', 'add_styles');

function init_site_menus()
{
    register_nav_menus(
        array(
            'headerMenu' => 'Header-Menu',
            'footerMenu' => 'Footer-Menu',
        )

    );

}

function debug($data)
{
    $output = "<script>console.log( 'From PHP: " . $data . "' );</script>";
    echo $output;
}

//the wordpress init hook, like a js event
add_action('init', 'init_site_menus');


add_theme_support( 'post-thumbnails' );


function add_employees() {
    // wp_create_category("2020items", 0);

    $labels = array(
        'name' => 'Employees',
        'singular_name' => 'New Employee',
        'add_new' => 'Add New',
    );
    // https: //developer.wordpress.org/reference/functions/register_post_type/
    // https: //www.ibenic.com/custom-wordpress-rewrite-rule-combine-taxonomy-post-type/


    # rebuild permalinks once at least
    $args = array('labels' => $labels,
        'hierarchical' => true,
        'publicly_queryable' => true,
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'rewrite' => array(
            'with_front'=> false,
        ),
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'supports' => array('page', 'page-attributes', 'title', 'editor', 'thumbnail', 'excerpt','page-templates'));

    register_post_type('employees', $args);
}

add_action('init', 'add_employees');

function add_products() {

    $labels = array(
        'name' => 'Products',
        'singular_name' => 'New Product',
        'add_new' => 'Add New',
    );

    # rebuild permalinks once at least
    $args = array('labels' => $labels,
        'hierarchical' => true,
        'publicly_queryable' => true,
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'rewrite' => array(
            'with_front'=> false,
        ),
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'supports' => array('page', 'page-attributes', 'title', 'editor', 'thumbnail', 'excerpt','page-templates'));

    register_post_type('products', $args);
}

add_action('init', 'add_products');


function add_products_taxonomy() {
    register_taxonomy('section', array( 'products'), array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x('Sections', 'taxonomy general name'),
            'singular_name' => _x('Section', 'taxonomy singular name'),
            'search_items' => __('Search Sections'),
            'all_items' => __('All Sections'),
            'parent_item' => __('Parent Location'),
            'parent_item_colon' => __('Parent Location:'),
            'edit_item' => __('Edit Section'),
            'update_item' => __('Update Section'),
            'add_new_item' => __('Add New Section'),
            'new_item_name' => __('New Section Name'),
            'menu_name' => __('Sections'),
        ),
        'show_ui'=>true,
        'show_admin_column'=>true,
        'query_var'=>true,
        'show_tagcloud' => true,
        'rewrite' => array(
            'slug' => 'product',
            'with_front'=> false,
        ),
    ));
// 'rewrite'=> array( 'slug' => 'jobs/%job_status%', 'with_front' => false ),
}
add_action('init', 'add_products_taxonomy', 0);

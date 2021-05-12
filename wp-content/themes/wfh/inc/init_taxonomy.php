<?php

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
        // 'rewrite' => array(
        //     'slug' => 'product',
        //     'with_front'=> false,
        // ),
    ));
// 'rewrite'=> array( 'slug' => 'jobs/%job_status%', 'with_front' => false ),
}
add_action('init', 'add_products_taxonomy', 0);

?>
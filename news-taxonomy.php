<?php 
//news taxonomy goes here
function starts360_register_taxonomy_news() {
     $labels = array(
         'name'              => _x( 'News Taxonomy', 'taxonomy general name' ),
         'singular_name'     => _x( 'NewsTxo', 'taxonomy singular name' ),
         'search_items'      => __( 'Search NewsTxonomy' ),
         'all_items'         => __( 'All NewsTxonomy' ),
         'parent_item'       => __( 'Parent NewsTxonomy' ),
         'parent_item_colon' => __( 'Parent NewsTxonomy:' ),
         'edit_item'         => __( 'Edit NewsTxonomy' ),
         'update_item'       => __( 'Update NewsTxonomy' ),
         'add_new_item'      => __( 'Add New NewsTxonomy' ),
         'new_item_name'     => __( 'New NewsTxonomy Name' ),
         'menu_name'         => __( 'News Txonomy' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'news-taxonomy' ],
     );
     register_taxonomy( 'NewsTxo', [ 'news-section' ], $args );//Cpt name goes here
}
add_action( 'init', 'starts360_register_taxonomy_news' );

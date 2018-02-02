<?php

//create post types


function create_my_post_types() {

    //add portfolio
    $port_args = array(
      'public' => true,
      'label'  => 'Notebooks',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'notebook', $port_args );

    
}

add_action( 'init', 'create_my_post_types' );



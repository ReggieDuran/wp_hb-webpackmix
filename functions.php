<?php
    
    // FEATURED IMAGE
    add_theme_support('post-thumbnails');
    
    // MAIN MENU
    function register_my_menu() {
        register_nav_menu( 'primary', __( 'Main Menu', 'theme-slug' ) );
        register_nav_menu( 'secondary', __( 'Footer Menu', 'theme-slug' ) );
    }

    add_action( 'after_setup_theme', 'register_my_menu' );

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));
	}
    

    add_post_type_support( 'page', 'excerpt' );
    add_theme_support( 'title-tag' );
    function rudr_add_new_tags_metabox(){
        $id = 'rudrtagsdiv-post_tag'; // it should be unique
        $heading = 'Tags'; // meta box heading
        $callback = 'rudr_metabox_content'; // the name of the callback function
        $post_type = 'post';
        $position = 'side';
        $pri = 'default'; // priority, 'default' is good for us
        add_meta_box($id, $heading, $callback, $post_type, $position, $pri );
    }
    add_action( 'admin_menu', 'rudr_add_new_tags_metabox');


   
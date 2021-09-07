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
    


   
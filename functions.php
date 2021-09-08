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

    // PAGINATION
    function pagination($pages = '', $range = 4) {  
        $showitems = ($range * 2)+1;  
     
        global $paged;
        if(empty($paged)) $paged = 1;
     
        if($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages) {
                $pages = 1;
            }
        }   
     
        if(1 != $pages) {
            echo "<div class=\"pagination\">";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
            if($paged > 1 ) { 
                echo "<a href='".get_pagenum_link($paged - 1)."' class='button prev'>Prev</a>";
            } else {
                echo "<a href='".get_pagenum_link($paged - 1)."' class='disabled button prev'></a>";
            }

     
            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    echo ($paged == $i)? "<span class=\"current bullet\">".($i)."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive bullet\">".($i)."</a>";
                }
            }

            if ($paged < $pages ){  
                echo "<a href=\"".get_pagenum_link($paged + 1)."\" class='button next'>Next</a>";  
            } else {
                echo "<a href=\"".get_pagenum_link($paged + 1)."\" class='disabled button next'></a>"; 
            }
            if ($paged < $pages1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
            echo "</div>\n";
         }
    }
    


   
<?php 

    define('contact_widget', trailingslashit(get_template_directory(__FILE__)));
    require_once (contact_widget . 'inc/class.contact_widget.php');

    function fimetech_menu() {
        $location = array(
            'primary' => "Desktop Primary Sidebar",
            'footer'  => "Footer Menu Items"
        );
        register_nav_menus($location);
    }

    add_action('init', 'fimetech_menu');

    function contact_register_widget() {
        register_widget('contact_widget');
    }

    add_action( 'widgets_init', 'contact_register_widget' );


    function fimetech_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        add_theme_support('excerpt');
    }

    add_action('after_setup_theme', 'fimetech_theme_support');
    

    function fimetech_register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('fimetech-style', get_template_directory_uri() .  '/style.css', array(), $version, 'all');
        wp_enqueue_style('fimetech-font-regular', get_template_directory_uri() .  '/assets/fonts/SVN-Gilroy\ Regular.otf', array(), $version, 'all');
        wp_enqueue_style('fimetech-font-heavy', get_template_directory_uri() .  '/assets/fonts/SVN-Gilroy\ Heavy.otf', array(), $version, 'all');
        wp_enqueue_style('fimetech-font-semibold', get_template_directory_uri() .  '/assets/fonts/SVN-Gilroy\ SemiBold.otf', array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'fimetech_register_styles');

    function fimetech_register_scripts() {
        wp_enqueue_scripts('fimetech-font-bold', get_template_directory_uri() .  '/assets/fonts/SVN-Gilroy\ Bold.otf', array(), $version, true);

        
    }

    add_filter('show_admin_bar','__return_true');

    add_action('wp_enqueue_scripts', 'fimetech_register_styles');

    function fimetech_widgets_custom() {
        register_sidebar(
            array(
                'before_icon'    => '<div class="contact-item"><img src="',
                'after_icon'     => '" />',
                'before_title'   => '<div class="item-right"><p class="name">',
                'after_title'    => '</p>',
                'before_content' => '<p class="content">',
                'after_content'  => '</p></div></div>',  
                'name'           => 'Contact',
                'id'             => 'contact',
                'description'    => 'Contact Widget Area'
            )
        );
    }

    add_action('widgets_init','fimetech_widgets_custom');

    function fimetech_add_metabox() {
        $arr_post_type = array('post', 'page', 'product');
        
        add_meta_box('fimetech_meta_box_1', 'Description:', 'fimetech_metabox_callback', $arr_post_type, 'normal', 'low');
    }

    add_action('add_meta_boxes', 'fimetech_add_metabox');

    function fimetech_metabox_callback($post) {
        $valueDescription = get_post_meta($post->ID, 'fimetech_field_desc', true);
        ?>
            <div class="fimetech-group-item">
                <textarea style="width:100%" name="fimetech_field_desc" placeholder="Enter your description" ><?php echo $valueDescription; ?></textarea>
            </div>
        <?php
    }

    add_action( 'save_post', 'fimetech_save_postdata' );

    function fimetech_save_postdata($post_id) {
        if ( array_key_exists( 'fimetech_field_desc', $_POST ) ) {
            update_post_meta(
                $post_id,
                'fimetech_field_desc',
                $_POST['fimetech_field_desc']
            );
        }
    }
    
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(
            array(
            'page_title'    => 'Website Settings',
            'menu_title'    => 'Website Settings',
            'menu_slug'     => 'website-settings',
            'capability'    => 'edit_posts'
            )
        );
    }

?>
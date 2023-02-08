<?php
    function wpbootstrap_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css' );

        wp_register_script('jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.js', false, '3.5.1', true);

        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', false, '1.16.1', true);

        wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), true);
    }

    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

    function abc_tutoring_company_files() {

        // To use style.css:
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
        
        // Use fontawesome:
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        // Add google fonts:
        wp_enqueue_style( 'custom-google-fonts', 'http://fonts.googleapis.com/css?family=Questrial:300,400,700,900|Poppins:300,400,700|Poiret+One:300,400,700,900|Oxygen:300,400,700,900', false);
    }

    add_action('wp_enqueue_scripts', 'abc_tutoring_company_files');

    function pageBanner($args = NULL) {
        if (!isset($args['title'])) {
            $args['title'] = get_the_title();
        }
        if (!isset($args['subtitle'])) {
            $args['subtitle'] = '';
        }
        if (!isset($args['photo'])) {
            $args['photo'] = 'images/screenshot.png'; 
        } 

        ?>
        <header class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center jumbotron-banner" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 0.35), rgba(255, 255, 255, 0.35)), url(<?php echo get_theme_file_uri($args['photo']) ?>)">
            <div class="jumbotron-search">
                <?php get_search_form(); ?> 
            </div>
            <div class="container-fluid">
                <div class="row mx-auto d-flex justify-content-center">
                    <div class="col-12 mx-auto d-flex justify-content-center">
                        <h1 class="jumbotron-title"><?php echo $args['title'] ?></h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-sm-8 mb-xl-0">
                        <div class="d-flex justify-content-center">
                            <p class="text-center m-3 jumbotron-subtitle"><?php echo $args['subtitle']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
    <?php }

// This has been moved to mu-plugins:
    // function tutoring_post_types(){
    // register_post_type('tutoring', array(
    //     'show_in_rest' => true, //You can add this if you are adding excerpt to the supports option below. This show_in_rest will let us see the custom post type of 'event' that we are adding in the wp-admin screen with the modern block editor (when editing a post) instead of the older editor layout. -- rest api makes raw api data avialable for JS to fetch, so we need it enabled for custom post types. (Note that for this to work, you must add 'editor' below, or else you will go back to the standard editor.)
    //     'supports' => array('title', 'editor', 'excerpt', 'custom-fields'), //If you want the new post type to support custom excerpts in the wp-admin - post type setup, you have to add this. It's optional.(By default new post types support title and editor. It's up to us to decide if we want the rest.) -- Note for wp-admin - if you don't see excerpt, click screen options while editing the post, and select the Excert checkbox.
    //     // custom-fields is optional. It's if you need extra fields to be added for that post type, such as an event date for the event post type.

    //     'rewrite' => array('slug' => 'tutoring-services'),
    //     'has_archive' => true,
    //     'public' => true, 
    //     'menu_icon' => 'dashicons-calendar', 
    //     'labels' => array(
    //     'name' => "Tutoring Services", 
    //     'add_new_item' => "Add New Tutoring Service",
    //     'edit_item' => 'Edit Tutoring Service',
    //     'all_items' => "All Tutoring Services",
    //     'singular_name' => 'Tutoring Service'
    //     ) 
    // ));

    // // Test Prep
    // register_post_type('testing', array(
    //     'show_in_rest' => true, //You can add this if you are adding excerpt to the supports option below. This show_in_rest will let us see the custom post type of 'event' that we are adding in the wp-admin screen with the modern block editor (when editing a post) instead of the older editor layout. -- rest api makes raw api data avialable for JS to fetch, so we need it enabled for custom post types. (Note that for this to work, you must add 'editor' below, or else you will go back to the standard editor.)
    //     'supports' => array('title', 'editor', 'excerpt', 'custom-fields'), //If you want the new post type to support custom excerpts in the wp-admin - post type setup, you have to add this. It's optional.(By default new post types support title and editor. It's up to us to decide if we want the rest.) -- Note for wp-admin - if you don't see excerpt, click screen options while editing the post, and select the Excert checkbox.
    //     // custom-fields is optional. It's if you need extra fields to be added for that post type, such as an event date for the event post type.
    //     'rewrite' => array('slug' => 'test-prep-services'),
    //     'has_archive' => true,
    //     'public' => true, 
    //     'menu_icon' => 'dashicons-calendar', 
    //     'labels' => array(
    //     'name' => "Test Prep Services", 
    //     'add_new_item' => "Add New Test Prep Service",
    //     'edit_item' => 'Edit Test Prep Service',
    //     'all_items' => "All Test Prep Services",
    //     'singular_name' => 'Test Prep Service'
    //     ) 
    // ));
    // }

    // add_action('init', 'tutoring_post_types');

    //Enable theme support for featured images
    add_theme_support('post-thumbnails');

    // Register sidebar:
    function abc_tutoring_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}

add_action( 'widgets_init', 'abc_tutoring_widgets_init' );
?>
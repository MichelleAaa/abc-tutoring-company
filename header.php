<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?php esc_html_e( 'ABC Tutoring Company', 'abc-tutoring' ); ?></title>
    <!-- wp_head calls the css file -->
    <?php wp_head(); ?> 
</head>
<!-- body_class() adds aclass attribute on the body tag and cutomizes the tags based on the page.  -->
<body <?php body_class(); ?>>

<nav class="container-fluid">
    <div class='sticky-top'>
        <div class="row sticky-nav p-auto d-flex justify-content-center" id="sticky-nav">
            <div class="col-12 d-flex justify-content-end align-items-center">
                <div class="navbar navbar-expand-lg navbar-light pt-0">
                    <a class="navbar-brand align-self-start nav-co-title" href="<?php echo esc_url(site_url()); ?>"><?php esc_html_e( 'ABC Tutoring Company', 'abc-tutoring' ); ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'fancy-lab' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a 
                                <?php echo get_post_type() == 'tutoring' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                href="<?php echo esc_url(site_url('/tutoring-services')); ?>"><?php esc_html_e( 'Tutoring Services', 'abc-tutoring' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a 
                                <?php echo get_post_type() == 'testing' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                href="<?php echo esc_url(site_url('/test-prep-services')); ?>"><?php esc_html_e( 'Test Prep Services', 'abc-tutoring' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a 
                                <?php echo get_post_type() == 'post' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                href="<?php echo esc_url(site_url('/blog')); ?>"><?php esc_html_e( 'Blog', 'abc-tutoring' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a 
                                <?php echo is_page('about-us') ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                href="<?php echo esc_url(site_url('/about-us')); ?>"><?php esc_html_e( 'About Us', 'abc-tutoring' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a 
                                <?php echo is_page('contact-us') ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                href="<?php echo esc_url(site_url('/contact-us')); ?>"><?php esc_html_e( 'Contact Us', 'abc-tutoring' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
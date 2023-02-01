<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- wp_head calls the css file -->
    <?php wp_head(); ?> 
  </head>
  <!-- body_class() will add a class attribute on the body tag and will give it attributes based on what screen the user is visiting, since we are putting this in the header. That  includes things like the page-id-(number here), etc. --You can use these classnames in your CSS or JS -->
  <body <?php body_class(); ?>>

  <nav class="container-fluid">
        <div class='sticky-top'>
            <div class="row sticky-nav p-auto d-flex justify-content-center" id="sticky-nav">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <div class="navbar navbar-expand-lg navbar-light pt-0">
                        <a class="navbar-brand align-self-start nav-co-title" href="<?php echo site_url(); ?>">
                                <!-- <img
                                src="#" alt="ABC Tutoring Company Logo" height="50" width="50"/> -->
                                ABC Tutoring Company
                              </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo site_url('/tutoring-services'); ?>" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tutoring Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                        <a class="dropdown-item" href="<?php echo site_url('/tutoring-services'); ?>">City Tour</a>
                                        <div class="dropdown-divider d-none"></div>
                                        <a class="dropdown-item" href="seasidetour.html">Seaside Tour</a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a 
                                    <?php echo get_post_type() == 'tutoring' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                    href="<?php echo site_url('/tutoring-services'); ?>">Tutoring Services</a>
                                </li>
                                <li class="nav-item">
                                    <a 
                                    <?php echo get_post_type() == 'testing' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                    href="<?php echo site_url('/test-prep-services'); ?>">Test Prep Services</a>
                                </li>
                                <li class="nav-item">
                                    <a 
                                    <?php echo get_post_type() == 'post' ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                    href="<?php echo site_url('/blog'); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a 
                                    <?php echo is_page('about-us') ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                    href="<?php echo site_url('/about-us'); ?>">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a 
                                    <?php echo is_page('contact-us') ? 'class="nav-link active"' : 'class="nav-link"' ?>
                                    href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
                                </li>
                                <!-- <li class="nav-item">
                                  <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 d-flex justify-content-center align-items-center">

        <!-- This opens the search field. Note that if the user has JS installed, it's going to open the overlay by adding a class as set up in the JS. If JS is not installed, then when this is clicked it will act as a link instead, and take the person to the JS-Free non_Live search page -->

        <!-- <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a> -->

            <!-- Dynamic menu, with setup in wp-admin & changes to functions.php-->
            <!-- <?php 
            // Parameter is the code name in functions.php, the first parameter of register_nav_menu(), which is 'headerMenuLocation'
              wp_nav_menu(array('theme_location' => 'headerMenuLocation'));
            ?> -->
        </div>
        </div>
      </div>
    </header>


    <!-- Note that we don't close the html or body tags, becuase they will be closed in footer.php -->
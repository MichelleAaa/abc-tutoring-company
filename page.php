<?php
    get_header();
    pageBanner(array(
        'title' => get_the_title(),
        'subtitle' => '',
        'photo' => 'images/screenshot.png'
    ));
?>

    <div class="container-fluid">
        <!-- <div class="row mb-3">
            <div class="col-11">
                <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Blog Home</a> 
            </div>
        </div> -->
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <?php the_content(); ?> 
                    <hr>
                </div>
            </div>
    <?php }  ?>
    
    </div>

    <?php get_footer();
?>
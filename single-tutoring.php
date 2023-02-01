<?php
    get_header();
    pageBanner(array(
        'title' => get_the_title(),
        'subtitle' => '',
        'photo' => 'images/screenshot.png'
    ));
?>

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-11">
                <a class="post-link" href="<?php echo site_url('/tutoring-services'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Our Services Overview</a> 
            </div>
        </div>
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <!-- <h2><?php the_title(); ?></h2> -->
                    <?php the_content(); ?> 
                    <hr>
                </div>
            </div>
    <?php }  ?>
    
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
                <?php echo paginate_links(); ?>
            </div>
        </div>
    </div>

    <?php get_footer();
?>
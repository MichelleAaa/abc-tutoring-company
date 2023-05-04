<?php
    get_header();
    pageBanner(array(
        'title' => esc_html(get_the_title()),
        'subtitle' => esc_html( '' ),
        'photo' => 'images/screenshot.png'
    ));
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-9 col-xl-10">
            <div class="row mb-3">
                <div class="col-11 col-lg-10">
                    <a class="post-link back-link" href="<?php echo esc_url(site_url('/blog')); ?>"><span><?php esc_html_e( 'Back to Blog Home', 'abc-tutoring' ); ?></span></a> 
                </div>
            </div>
            <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-11 col-lg-10">
                        <?php the_content(); ?> 
                        <hr>
                    </div>
                </div>
            <?php }  ?>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <p>By <span class="blog-author"><?php the_author_posts_link(); ?></span> <?php esc_html_e( ' on ', 'abc-tutoring' ); ?> <?php the_time('F j, Y'); ?></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xl-2 d-none d-md-block">
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
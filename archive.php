<?php
    get_header(); 
    pageBanner(array(
        // 'title' => 'Blog Archive',
        // 'subtitle' => 'Full Listing of Blog Posts',
        'title' => get_the_archive_title(),
        'photo' => 'images/pencils-uncovered-cropped.jpg'
    ));
?>

<div class="container-fluid">
    <div class="row">
        <section class="col-12 col-md-9 col-xl-10">
        <?php 
        while(have_posts()) {
            the_post(); ?>
            <article class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="mb-2"><?php echo wp_trim_words(get_the_content(), 55) . "..."; ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-link"><?php esc_html_e( 'Read More', 'abc-tutoring' ); ?></a>
                    <hr>
                </div>
            </article>
            <?php }  ?>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </section>    
        <div class="col-md-3 col-xl-2 d-none d-md-block">
                <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
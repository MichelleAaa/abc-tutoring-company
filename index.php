<?php
// Note: In wp-admin this has been set as the page for the blog (/blog) and front-page.php is being used for the home page.
    get_header(); 
    pageBanner(array(
        'title' => 'Blog',
        'subtitle' => 'Check out our latest blog posts',
        'photo' => 'images/screenshot.png'
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
                        <p>Posted by <span class="blog-author"><?php the_author_posts_link(); ?></span> on <?php the_time('F j, Y'); ?></p>
                        <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="mb-2"><?php echo wp_trim_words(get_the_content(), 55) . "..."; ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-link">Read More</a>
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
</div>

<?php get_footer(); ?>
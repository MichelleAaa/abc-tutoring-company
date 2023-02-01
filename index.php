<?php
// Note that in wp-admin this has been set as the page for the blog (/blog) and front-page.php is being used for the home page.
    get_header(); 
    pageBanner(array(
        'title' => 'Blog',
        'subtitle' => 'Check out our latest blog posts',
        'photo' => 'images/screenshot.png'
    ));
?>

<div class="container-fluid">
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?> ...<a href="<?php the_permalink(); ?>">Read More</a>
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
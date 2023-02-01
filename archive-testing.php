<?php
    get_header(); 
    pageBanner(array(
        'title' => 'Test Prep Services Overview',
        'subtitle' => 'Prep for the SAT, ACT, and More',
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
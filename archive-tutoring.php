<?php
    get_header(); 
    pageBanner(array(
        'title' => 'Tutoring Services Overview',
        'subtitle' => 'K-12 Tutoring Services in A Variety of Subjects',
        'photo' => 'images/pencils-uncovered-cropped.jpg'
    ));
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-9 col-xl-10">
            <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-11 col-lg-10">
                        <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?> ...<a href="<?php the_permalink(); ?>" class="read-link">Read More</a>
                        <hr>
                    </div>
                </div>
        <?php }  ?>
        
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

    <?php get_footer();
?>
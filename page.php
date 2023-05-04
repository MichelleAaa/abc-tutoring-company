<?php
    get_header();
    pageBanner(array(
        'title' => esc_html(get_the_title()),
        'subtitle' => esc_html(''),
        'photo' => 'images/pencils-uncovered-cropped.jpg'
    ));
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-9 col-xl-10">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-lg-10">
                <?php 
                    while(have_posts()) {
                        the_post(); ?>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-11">
                                <?php the_content(); ?> 
                                <hr>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xl-2 d-none d-md-block">
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
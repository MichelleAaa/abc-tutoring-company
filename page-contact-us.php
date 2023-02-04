<?php
    get_header();
    pageBanner(array(
        'title' => get_the_title(),
        'subtitle' => '',
        'photo' => 'images/screenshot.png'
    ));
?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-11 col-lg-10 col-xl-9">
                <div class="row d-flex justify-content-start align-items-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <?php the_content(); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer();
?>
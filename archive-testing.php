<?php
    get_header(); 
    pageBanner(array(
        'title' => 'Test Prep Services Overview',
        'subtitle' => 'Prep for the SAT, ACT, and More',
        'photo' => 'images/pencils-uncovered-cropped.jpg'
    ));
?>

<div class="container-fluid">
    <div class="row">
        <section class="col-12 col-md-9 col-xl-10">
            <div class="row d-flex justify-content-center align-items-center archive-item-container">
                <div class="col-11 mt-3 mb-5">
                    <h2 class="text-center services-title">We Provide Tutoring Services for the Following Test Prep Subjects:</h2>
                </div>
            <?php 
            while(have_posts()) {
                the_post(); ?>
                <article class="col-11 col-lg-4 col-xl-3 mx-3 mx-lg-0  my-3 d-flex justify-content-center">
                    <div class="card m-1">
                        <div class="card-body">
                            <h3 class="post-item-title post-item-title--small text-nowrap text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="d-flex flex-column justify-content-center" style="height:80%;">
                                <p class="mb-2 card-text"><?php echo wp_trim_words(get_the_content(), 18) . "..."; ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-link">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php }  ?>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <h3 class="text-center services-title m-5">Tutoring is Available Online & In-Person</h3>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-9 col-lg-4 pb-4 pb-lg-0">
                            <img src="<?php echo (site_url() . '/wp-content/uploads/2023/02/exam-2-1-scaled.jpg'); ?>" alt="Studying Image" class="services-img"/>
                        </div>
                        <div class="col-11 col-lg-6">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                        </div>
                    </div>
                </div>
            </div>
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
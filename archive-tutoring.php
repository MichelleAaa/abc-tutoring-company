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
        <section class="col-12 col-md-9 col-xl-10">
            <div class="row d-flex justify-content-center align-items-center archive-item-container">
                <div class="col-11 mt-3 mb-5">
                    <h2 class="text-center services-title">We Provide Tutoring Services for the Following K-12 Subjects:</h2>
                </div>
            <?php 
            while(have_posts()) {
                the_post(); ?>
                <article class="col-11 col-lg-4 col-xl-3 mx-3 mx-lg-0  my-3 d-flex justify-content-center">
                    <div class="card m-1">
                        <div class="card-body">
                            <h3 class="post-item-title post-item-title--small text-nowrap text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="mb-2 card-text"><?php echo wp_trim_words(get_the_content(), 18) . "..."; ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-link">Continue Reading</a>
                        </div>
                    </div>
                </article>
            <?php }  ?>
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
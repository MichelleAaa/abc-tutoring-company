<?php
    get_header(); 
    pageBanner(array(
        'title' => 'ABC Tutoring Company',
        'subtitle' => 'K-12 Tutoring and Test Prep Services',
        'photo' => 'images/screenshot.png'
    ));
?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-9 col-xl-10">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-11 col-lg-10">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="row d-flex justify-content-center m-3">
                <div class="col-11 col-sm-5 mb-4 mb-sm-0">
                    <h2 class="heading--small heading--services text-center">Tutoring Services</h2>
                    <?php 
                        $tutoringPosts = new WP_Query(array(
                        'post_type' => 'tutoring'
                        )); ?>    
                    <ul class="list-group">
                    <?php 
                        while($tutoringPosts->have_posts()){
                            $tutoringPosts->the_post(); ?>
                            <li class="list-group-item text-center">
                                <a class="services-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="col-11 col-sm-5">
                    <h2 class="heading--small heading--services text-center">Test Prep Services</h2>
                    <?php 
                        $testingPosts = new WP_Query(array(
                        'post_type' => 'testing'
                        )); ?>  
                    <ul class="list-group">
                    <?php   
                        while($testingPosts->have_posts()){
                            $testingPosts->the_post(); ?>
                            <li class="list-group-item text-center">
                                <a class="services-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 mb-3">
                <div class="col-11 col-lg-10">
                    <h2 class="heading--small text-center">Check Out Our Recent Blog Posts</h2>
                </div>
            </div>
            <?php 
                $blogPosts = new WP_Query(array(
                    'numberposts' => 4,
                    'post_type' => 'post'
                )); 
                $postsArray = [];
                while($blogPosts->have_posts()){
                    $blogPosts->the_post(); 
                    $postsArray[] = array('the_permalink' => get_the_permalink(), 'the_title' => get_the_title(), 'featured_image' => get_the_post_thumbnail_url());
                }
            ?>
            <section class="row d-none d-md-flex justify-content-center">
                <div class="col-11 col-lg-10 col-xl-8">
                    <div class="row">
                        <article class="col-6">
                            <div class="img-grid-container">
                                <a href="<?php echo $postsArray[0]['the_permalink'] ?>"><img src="<?php echo $postsArray[0]['featured_image'] ?>" alt="Blog post featured image  1" class="img-grid img-grid-1"/>
                                <div class="topleft"><?php echo $postsArray[0]['the_title'] ?></div></a>
                            </div>
                        </article>
                        <div class="col-6">
                            <div class="row">
                                <article class="col-6">
                                    <div class="img-grid-container">
                                        <a href="<?php echo $postsArray[1]['the_permalink'] ?>"><img src="<?php echo $postsArray[1]['featured_image'] ?>" alt="Blog post featured image 2" class="img-grid img-grid-2"/>
                                        <div class="topleft"><?php echo $postsArray[1]['the_title'] ?></div></a>
                                    </div>
                                </article>
                                <article class="col-6">
                                    <div class="img-grid-container">
                                        <a href="<?php echo $postsArray[2]['the_permalink'] ?>"><img src="<?php echo $postsArray[2]['featured_image'] ?>" alt="Blog post featured image 3" class="img-grid img-grid-2"/>
                                        <div class="topleft"><?php echo $postsArray[2]['the_title'] ?></div></a>
                                    </div>
                                </article>
                            </div>
                            <div class="row">
                                <article class="col-12 img-wrapper">
                                    <div class="img-grid-container">
                                        <a href="<?php echo $postsArray[3]['the_permalink'] ?>"><img src="<?php echo $postsArray[3]['featured_image'] ?>" alt="Blog post featured image 4" class="img-grid img-grid-3"/>
                                        <div class="topleft"><?php echo $postsArray[3]['the_title'] ?></div></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row d-flex justify-content-center d-md-none">
                <?php
                    for($count = 0; $count < 4; $count++){ ?>
                        <article class="col-10 col-sm-5 m-2 m-sm-3">
                            <div class="img-grid-container">
                                <a href="<?php echo $postsArray[$count]['the_permalink'] ?>"><img src="<?php echo $postsArray[$count]['featured_image'] ?>" alt="Blog post featured image" class="img-grid img-grid-small"/>
                                <div class="topleft"><?php echo $postsArray[$count]['the_title'] ?></div></a>
                            </div>
                        </article>
                <?php }          
                ?>
            </section>
        </div>
        <div class="col-md-3 col-xl-2 d-none d-md-block">
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
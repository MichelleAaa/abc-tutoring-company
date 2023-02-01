<?php
    get_header(); 
        pageBanner(array(
            'title' => 'ABC Tutoring Company',
            'subtitle' => 'K-12 Tutoring and Test Prep Services',
            'photo' => 'images/screenshot.png'
        ));
?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-9">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row d-flex justify-content-center m-3">
            <div class="col-5">
                <h2 class="heading--small text-center">Tutoring Services</h2>
                <?php 
                $tutoringPosts = new WP_Query(array(
                // "posts_per_page" => 2, 
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
            <div class="col-5">
                <h2 class="heading--small text-center">Test Prep Services</h2>
                <?php 
                $testingPosts = new WP_Query(array(
                // "posts_per_page" => 2, 
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
    </div>
<?php 

    get_footer();
?>
<?php
    get_header(); 
    pageBanner(array(
        'title' => esc_html__( 'Search Results', 'abc-tutoring' ),
        'subtitle' => esc_html__( 'You searched for &ldquo; ', 'abc-tutoring' ) . esc_html(get_search_query()) .  esc_html( '&rdquo;' ),
        'photo' => 'images/screenshot.png'
    )); 
?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $searchQuery = new WP_Query(array(
        'post_type' => array('post', 'testing', 'tutoring', 'page'),
        'posts_per_page' => 10,  
        'paged' => $paged, 
        'post_status' => 'publish',
        's' => esc_html(get_search_query())
    )); ?>

<div class="container-fluid">
    <div class="row">
        <section class="col-12 col-md-9 col-xl-10">
            <?php 
            // Each blog post's ID is added to the postIds array, and then checked below in the if(!in_array(get_the_ID(), $postIds)) statement so duplicate posts are not output if the keyword is both in the title and content.
            $postIds = array();
            if($searchQuery->have_posts()){
                while($searchQuery->have_posts()) {
                    $searchQuery->the_post(); 
                    
                    if(!in_array(get_the_ID(), $postIds)) {
                    ?>           
                        <article class="row d-flex justify-content-center align-items-center">
                            <div class="col-11 col-lg-10">
                                <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="mb-2"><?php echo wp_trim_words(get_the_content(), 55) . "..."; ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-link"><?php esc_html_e( 'Read More', 'abc-tutoring' ); ?></a>
                                <hr>
                            </div>
                        </article>
                        <?php 
                        $postIds[] = get_the_ID(); 
                    }
                } 
            } else { ?> 
                <div class="row d-flex justify-content-center align-items-center my-5">
                    <div class="col-11 col-lg-10">
                        <h2 class="post-item-title headline--small text-center"><?php esc_html_e( 'Sorry, no results match that search.', 'abc-tutoring' ); ?></h2>
                    </div>
                </div>
            <?php }
                echo paginate_links(array(
                    'total' => $searchQuery->max_num_pages
                ));
                wp_reset_postdata();
            ?>
        </section>
        <div class="col-md-3 col-xl-2 d-none d-md-block">
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
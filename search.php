<?php
    get_header(); 
    pageBanner(array(
        'title' => 'Search Results',
        'subtitle' => 'You searched for &ldquo;' . esc_html(get_search_query()) .  '&rdquo;',
        'photo' => 'images/screenshot.png'
    )); 
?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $searchQuery = new WP_Query(array(
        'post_type' => array('post', 'testing', 'tutoring', 'page'), 
        'paged' => $paged, 
        's' => esc_html(get_search_query()),
        'posts_per_page' => 10, 
    ));

    if($searchQuery->have_posts()){
    while($searchQuery->have_posts()) {
    $searchQuery->the_post(); ?>

    <div class="container container--narrow page-section">
        <?php
        if(have_posts()){// If the search has results:
            while(have_posts()) {
            the_post(); ?>
                <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?> ...<a href="<?php the_permalink(); ?>">Read More</a>
                    <hr>
                </div>
            </div>
            <?php }
        }
        } 
    } else { 
            echo '<h2 class="headline headline--small-plus">No results match that search.</h2>';
        }

        echo paginate_links(array(
            'total' => $searchQuery->max_num_pages,
            'current' => max( 1, get_query_var('paged') ), ));
        // the_posts_pagination( 'mid_size=3' );
        wp_reset_postdata();
        ?>
        
        <?php 
        // // This is used to create pagination links -- note that in wp-admin we can change the number of blog posts that show per page. by default though it will not have page links to see more:
        // echo paginate_links();

        ?>
    </div>

    <?php get_footer();

?>

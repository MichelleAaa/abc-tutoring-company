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
    )); ?>

<div class="container container--narrow page-section">
    <div class="row">
        <div class="col-12 col-md-9 col-xl-10">
            <?php 
            if($searchQuery->have_posts()){
            while($searchQuery->have_posts()) {
            $searchQuery->the_post(); 
            if(have_posts()){// If the search has results:
                while(have_posts()) {
                the_post(); ?>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-11">
                            <h2 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?> ...<a href="<?php the_permalink(); ?>">Read More</a>
                            <hr>
                        </div>
                    </div>
                <?php }
            }
                } 
            } else { ?> 
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-11 col-lg-10">
                        <h2 class="post-item-title headline headline--small-plus">No results match that search.</h2>;
                    </div>
                <?php }
                echo paginate_links(array(
                    'total' => $searchQuery->max_num_pages,
                    'current' => max( 1, get_query_var('paged') ), ));
                wp_reset_postdata();
                ?>
        </div>
        <div class="col-md-3 col-xl-2 d-none d-md-block">
            <?php get_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>
    <?php get_footer();
?>
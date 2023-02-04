<div id="sidebar-primary" class="sidebar sidebar-primary">
	<?php dynamic_sidebar( 'primary' ); ?>
	<h3>Contact Us Today!</h3>
	<p><i class="fa fa-solid fa-phone"></i> (123) 456-7890</p>
	<p><i class="fa fa-light fa-fax"></i> (098) 876-5432</p>
	<p><a href="mailto:abctutoringcompany@gmail.com"> Send Us an Email!</a></p>
	<h3 class="heading--small">Tutoring Services:</h3>
	<?php 
	$tutoringPosts = new WP_Query(array(
	'post_type' => 'tutoring'
	)); ?>    
	<ul>
	<?php 
	while($tutoringPosts->have_posts()){
	$tutoringPosts->the_post(); ?>
	<li class="">
		<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
	<?php } ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<h3 class="text-nowrap">Test Prep Services:</h3>
	<?php 
	$testingPosts = new WP_Query(array(
	'post_type' => 'testing'
	)); ?>  
	<ul>
	<?php   
	while($testingPosts->have_posts()){
	$testingPosts->the_post(); ?>
	<li class="">
		<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
	<?php } ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<h3 class="mt-3">Testimonial:</h3>
	<p class="sidebar-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p class="pt-1"> -Jack Bennett</p>
<!-- <br>
	<p class="sidebar-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p> -Darleen Hunter</p> -->
</div>
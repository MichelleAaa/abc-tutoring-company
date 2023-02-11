<div id="sidebar-primary" class="sidebar-primary">
	<?php dynamic_sidebar( 'primary' ); ?>
	<h3>Contact Us Today!</h3>
	<p><i class="fa fa-solid fa-phone"></i> <a href="tel:11234567890" class="link-item">(123) 456-7890</a></p>
	<p><i class="fa fa-light fa-fax"></i> (098) 876-5432</p>
	<p><a href="mailto:abctutoringco@gmail.com"> Send Us an Email!</a></p>
	<h3 class="heading--small pt-1">Tutoring Services:</h3>
	<?php 
		$tutoringPosts = new WP_Query(array(
		'post_type' => 'tutoring'
		)); ?>    
	<ul>
		<?php 
			while($tutoringPosts->have_posts()){
				$tutoringPosts->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
		<?php } ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<h3 class="heading--small">Test Prep Services:</h3>
	<?php 
		$testingPosts = new WP_Query(array(
		'post_type' => 'testing'
		)); ?>  
	<ul>
	<?php   
		while($testingPosts->have_posts()){
			$testingPosts->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		<?php } ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<h3 class="mt-3">Testimonial:</h3>
	<p class="sidebar-testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p class="pt-1"> - Jack Bennett</p>
</div>
<?php
/*
Template Name: overons
*/
?>
<div class="container">	
<section class="overons">
	<?php get_template_part('partials/header','img'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p>	<?php 	the_content(); ?></p>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, hier is niets te vinden.' ); ?></p>
		<?php endif; ?>
</section>
</div>
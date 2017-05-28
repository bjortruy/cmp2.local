<div class="container">	
<section class="overons">
	<?php get_template_part('partials/header','img'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p>	<?php 	the_content(); ?></p>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, hier is niets te vinden.' ); ?></p>
		<?php endif; ?>
		<div class="flex-container">	
		<div class="contact-form flex-item" style="display: inline-block;">
		<?php echo do_shortcode('[contact-form-7 id="28" title="Contact"]') ?>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.2650272791393!2d4.302010816090301!3d50.80772817952618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c5d5342c0039%3A0x95f0ccc985c10eaa!2sHumaniteitslaan+292%2C+1190+Vorst!5e0!3m2!1snl!2sbe!4v1495564507242" width="300" height="563" frameborder="0" style="border:0; width:100%; min-width:300px; max-width:500px; min-height: 563px;" allowfullscreen class="flex-item"></iframe>
		</div>
</section>
</div>
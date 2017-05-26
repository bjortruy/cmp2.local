<?php get_header();?>

 ?>
	<div class="container">
	<?php get_template_part('partials/header','img'); ?>
		<section class="single-post-section ">
			<div class="single-post-post flex-container">
				<div class="single-post-image flex-item">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="single-post-text flex-item">
					<h2><?php the_title(); ?></h2>
					<p><?php echo get_page(get_the_ID())->post_content; ?></p>
				</div>
				
			</div>
			<a href="../whatsnew" class='btn-terug'>Terug</a>
			<div class="single_reactions-container">
				<?php comments_template(); ?>
			</div>
		</section>
	</div>

<? get_footer();?>
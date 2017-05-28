<?php
/*
Template Name: Blog
*/
?>

	<div class='container'>
	<?php get_template_part('partials/header','img'); ?>
		<section class="blog flex-containter">
			<?php 
			     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			    query_posts('posts_per_page=5&paged=' . $paged);

			    if(have_posts())
			     {
			        while(have_posts())
			        {
			        	the_post();
			?>
					<article class="whatsnew_article flex-item flex-container">
					<div class="post_image flex-item"><?php the_post_thumbnail('thumbnail'); ?></div>
					<div class="post_text flex-item flex-item-grow">
						<h3 class="post_title"><?php the_title(); ?></h3>
						<?php 
							$content = get_the_content();
							$content_kort = implode(' ',array_slice(explode(' ',$content),0, 30));
						?>
						<p class="post_content"><?php echo $content_kort." ..."; ?></p>
					<div class="post_action flex-item ">
						<?php comments_number('0','1','%'); ?>
						<img src="<?php echo bloginfo('template_url').'/img/blog/comments.png'; ?>" alt="comment" alt="text-ballon" width="10px">
						<?php global $post; ?>
						<?php $post_slug = $post->post_name; ?>
						<a href="<?php the_permalink();?>">Lees meer</a>
					</div>
				</div>
				</article>
			<?php }}else{echo "Geen content beschikbaar.";} ?>
			<div class="flex_row">
            <div class="flex_item">
                <div class="nav-next flex_item"><?php previous_posts_link( 'Nieuwe posts' ); ?></div>
                
            </div>
            <div class="flex_item">
                <div class="nav-previous flex_item"><?php next_posts_link( 'Oudere posts' ); ?></div>
                
            </div>
		</section>
	</div>

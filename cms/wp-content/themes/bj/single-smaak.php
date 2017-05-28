<!-- pagina toont alle  -->
<?php get_header(); ?>
<div class="container">
	<?php get_template_part('partials/header','img'); ?>
	<section class="smaak">
		<div class="flex-container">
			<div class="smaak-foto flex-item smaak-block">
				<?php the_post_thumbnail(array(225,300));  ?>		
			</div>
			<div class="smaak-info flex-item">

				<h2 class="smaak-titel"><?php the_title(); ?></h2>
				<strong class="smaak-beschrijvingkort"> 
					<?php echo get_post_meta(get_the_ID(),'_smaakbeschrijving', true);?>		
				</strong>
				<p class="smaak-beschrijvinglang">
					<?php echo get_post_meta(get_the_ID(),'_smaakbeschrijvinglang', true);?>
				</p>
			</div>
		</div>
		<div class="flex-container">
			
			<div class="smaak-ingredienten flex-item">
				<p>
					<?php echo get_post_meta(get_the_ID(),'_ingredienten', true);?>
				</p>
			</div>
			<aside class="smaak-interaction flex-item">
				<div class="smaak-rating">
				<p>Deze smaak geproefd? Geef je punten!</p>
				<p><?php if(function_exists('the_ratings')) { the_ratings(); } ?></p>
				</div>
			<p>Deel deze smaak met je vrienden!</p>
			<div class="row">
			<a href="http://twitter.com/share?url=http://www.benjerry.com" target="_blank" class="col">
<i class="fa fa-twitter  fa-2x"></i></a>
				<a href="http://www.facebook.com/sharer.php?u=http://www.benjerry.com" target="_blank" class="col"><i class="fa fa-facebook  fa-2x"></i></a>
				<a href="https://plus.google.com/share?url=http://benjerry.com" class="col" target="_blank"><i class="fa fa-google-plus  fa-2x"></i></a>
			</div>
			</aside>


		</div>
		<a href="../" class='btn-terug'>Terug</a>
	</section>
</div>

<?php get_footer(); ?>
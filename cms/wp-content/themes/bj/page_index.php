<?php 
/*
Template Name: Home
*/
 ?>
 <!-- HERO IMAGE -->
	<div class="hero-background" style="background-image: url(<?php header_image();?>); background-size: <?php echo get_custom_header()->width; echo get_custom_header()->height; ?>;
    background-position: center;
    background-repeat: no-repeat;">>
		
	</div>
	<!-- END HERO IMAGE -->
	<div class="container">
		<section class="hero">
		<div class="row ghost-row">
			<a class="ghost" href="#">
				Lees meer <i class="fa fa-info"></i>
			</a>
		</div>
		</section>
		<!-- PROMOTION INFO-->
		<section class="promotion">
			<div class="flex-container">
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Gemaakt met amandel melk</h3>
						<p>Waarom Amandelmelk? Na het experimenteren met allerlei verschillende formules, hebben onze Flavour Gurus besloten dat amandelmelk het beste "lege canvas" voor de heerlijke brownies, karamel, noten en chocolade kreeg die we hebben verkregen. En het is zo rijk en romig dat je in een pint moet graven, je moet jezelf altijd herinneren dat het niet-zuivel is.</p>
					</div>
				</div>
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Gecertificeerde Veganist</h3>
						<p>Veganistvrienden, of u al drie decennia of drie dagen gewacht bent voor een gecertificeerde veganistische non-melkedecadentie, het is tijd om u te verheugen! We hebben samengewerkt met Vegan Actie om te certificeren dat onze non-zuivel geen dierlijke producten van welke aard ook ook omvat, inclusief eieren, zuivel of honing. Wij bewonderen u voor uw inzet en hopen dat u van de prachtige vegan chunks &amp; swirls houdt.</p>
					</div>
				</div>
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Join the club</h3>
						<p>25% van de Belgische bevolking is lactose intollerant. Deze hebben dus nooit van onze producten kunnen proeven. Vandaar dat we het uiterst noodzakelijk vonden om daar verandering in te brengen. Wij bij ben en Jerry's hebben een product ontwikkeld dat een volledig lactose vrij is. Deze is dus ook geschikt voor veganisten. Diervriendelijk, Lactosevrij en Super Lekker!</p>
					</div>
				</div>
			</div>

			

			<aside class="flex-container">
				<div class="flex-item flex-item-grow flex-item-same">
					<div class="wedstrijd flex-container">
					<div class="flex-item ">
						<h3>Win een jaar lang gratis ijs!</h3>
						
							<p>Hoeveel potten 'Vegan Delight' zal er in de eerste maand verkocht worden in Belgie?</p>
							<?php echo do_shortcode('[contact-form-7 id="40" title="Wedstrijd"]') ?>
					</div>
					<img src="<?php echo bloginfo('template_url').'/img/index/cup.png'; ?>" alt="Vegan Delight cup" class="flex-item">
					</div>
				</div>

				<div class="flex-item flex-item-same">
					<div class="twitter">
						<a class="twitter-timeline" href="https://twitter.com/benandjerrys"
  data-height="380">>Ben &amp; Jerry's</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</aside>

		</section>
		<!-- END PROMOTION INFO -->
	</div>
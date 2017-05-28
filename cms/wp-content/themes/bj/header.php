<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ben &amp; Jerry's NonOffical Website</title>

</head>
<body>
	<!-- HEADER -->
	<header>
		<div class="header-container">
			<!-- custom logo toevoegen -->
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
				        echo '<img src="'. esc_url( $logo[0] ) .'" class="header-logo">';
				} else {
				        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}
			?>
			<!-- wordpress menu toevoegen -->
			<i class="fa fa-bars fa-2x hamburger"></i>
			<div class="nav-menu-mobile">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu','menu_class'=>'header-nav') ); ?>
			</div>
			<div class="nav-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu','menu_class'=>'header-nav') ); ?>
			</div>
		</div>
		<?php wp_head(); ?>
	</header>
	<!-- END HEADER-->
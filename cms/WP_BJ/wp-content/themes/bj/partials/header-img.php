<?php 
/*
Template Name: header-shared
*/
$random = rand(1,2);
 ?>
<div class="header-shared">
		<img src="<?php echo bloginfo('template_url').'/img/headers/'.$random.'.jpg'; ?>" alt="header2" class="header-shared-img">
</div>
<h2 class="page-title"><?php 	echo wp_title("",true,true); ?></h2>
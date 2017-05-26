 <?php get_header(); ?>
<?php 
	global $wp_query;
	if(is_front_page()){
		get_template_part('page_index');
	}else if($wp_query->query['pagename']=='whatsnew'){
		get_template_part('page_blog');
	}else if($wp_query->query['pagename']=='contact'){
		get_template_part('page_contact');
	}else if($wp_query->query['pagename']=='overons'){
		get_template_part('page_overons');
	}else{
		get_template_part('page_404.php');
	}
?>
 <?php get_footer(); ?>
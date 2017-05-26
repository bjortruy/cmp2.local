<?php
/** includen van scripts en styles**/
function add_theme_scripts(){
	wp_enqueue_style('style',get_stylesheet_uri());

	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.css',false,'1.1','all');

	/*
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/bootstrap/css/bootstrap-theme.css',false,'1.1','all');
	*/

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.css',false,'1.1','all');

	//scripts
	wp_enqueue_script( 'detectmobilebrowser', get_template_directory_uri().'/js/detectmobilebrowser.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-1.11.1.min', get_template_directory_uri().'/js/jquery-1.11.1.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri().'/js/jquery.easing.1.3.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'open-close-mobile-nav', get_template_directory_uri().'/js/open-close-mobile-nav.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/**end includen van scripts en styles **/


/** toevoegen van menus **/ 
 function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );

//** end toevoegen van menus **/

//** toevoegen custom logo **/
function bj_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'bj_logo_setup' );
/** end toevoegen custom logo */
//** toevoegen custom header **/
function bj_homeheader_setup(){
		if(function_exists('the_custom_header')){
			the_custom_header();
		}
	add_theme_support('custom-header',array(
		'flex-height' => true,
		'flex-width'=> true,
	));
}


add_action('after_setup_theme','bj_homeheader_setup');


//** end custom header **/
/** toevoegen custom header2 **/
function bj_header2_setup(){
	if(function_exists('the_custom_header')){
		the_custom_header();
	}
}

//*end custom header 2**/



/** toevoegen custom post type smaak toevoegen **/
function add_custom_posttype_smaak(){
	$args = array(
		'label'=>'Smaken',
		'description' => 'Smaak toevoegen',
		'public' => true,
		'menu_option' => 6,
		'supports' => array(
			'title',
			'thumbnail',
			),
		'menu_icon' => 'dashicons-store',
		'has_archive'=>true
		);
	register_post_type('smaak',$args);
}
add_action('init','add_custom_posttype_smaak');
add_theme_support( 'post-thumbnails' );
/** custom post type smaak toevoegen**/

/**metabox toevoegen met korte beschrijving van de smaak **/

function add_smaakbeschrijving_metabox(){
	add_meta_box(
		'smaakbeschrijving_metabox',//id
		'Korte smaakbeschrijving',//title
		'content_smaakbeschrijving_metabox',//callback
		'smaak',//page
		'normal', //context
		'high'//priority
		);
}

add_action('add_meta_boxes','add_smaakbeschrijving_metabox');

function content_smaakbeschrijving_metabox($post){
	$smaakbeschrijving = get_post_meta($post->ID, '_smaakbeschrijving',true);
	echo "<label for='sbtxt'><strong>Geef korte smaakbeschrijving:</strong></label></br>";
	echo "<textarea rows='5' cols='80' name='sbtxt' id='sbtxt'>{$smaakbeschrijving}</textarea>";
}

function save_smaakbeschrijving_metabox($post_id){
	$smaakbeschrijving = $_POST["sbtxt"];
	update_post_meta($post_id,'_smaakbeschrijving',$smaakbeschrijving);
}

if(isset($_POST['sbtxt'])){
	add_action('save_post','save_smaakbeschrijving_metabox');
}

/** end metabox korte beschrijving */

/**metabox toevoegen met uitgebreide beschrijving van de smaak **/

function add_smaakbeschrijvinglang_metabox(){
	add_meta_box(
		'smaakbeschrijvinglang_metabox',//id
		'Lange smaakbeschrijving',//title
		'content_smaakbeschrijvinglang_metabox',//callback
		'smaak',//page
		'normal', //context
		'high'//priority
		);
}

add_action('add_meta_boxes','add_smaakbeschrijvinglang_metabox');

function content_smaakbeschrijvinglang_metabox($post){
	$smaakbeschrijvinglang = get_post_meta($post->ID, '_smaakbeschrijvinglang',true);
	echo "<label for='sbtxt'><strong>Geef lange smaakbeschrijving:</strong></label></br>";
	echo "<textarea rows='5' cols='80' name='sbltxt' id='sbtxt'>{$smaakbeschrijvinglang}</textarea>";
}

function save_smaakbeschrijvinglang_metabox($post_id){
	$smaakbeschrijvinglang = $_POST["sbltxt"];
	update_post_meta($post_id,'_smaakbeschrijvinglang',$smaakbeschrijvinglang);
}

if(isset($_POST['sbltxt'])){
	add_action('save_post','save_smaakbeschrijvinglang_metabox');
}

/** end metabox korte beschrijving */

//** metabox ingredienten **/
function add_ingredienten_metabox(){
	add_meta_box(
		'ingredienten_metabox',//id
		'Ingrediënten',//title
		'content_ingredienten_metabox',//callback
		'smaak',//page
		'normal', //context
		'high'//priority
		);
}

add_action('add_meta_boxes','add_ingredienten_metabox');

function content_ingredienten_metabox($post){
	$ingredienten = get_post_meta($post->ID, '_ingredienten',true);
	echo "<label for='sbtxt'><strong>Geef ingrediënten:</strong></label></br>";
	echo "<textarea rows='5' cols='80' name='ingtxt' id='sbtxt'>{$ingredienten}</textarea>";
}

function save_ingredienten_metabox($post_id){
	$ingredienten = $_POST["ingtxt"];
	update_post_meta($post_id,'_ingredienten',$ingredienten);
}

if(isset($_POST['ingtxt'])){
	add_action('save_post','save_ingredienten_metabox');
}

//* end metabox ingredienten **/


/** is_subpage **/
function is_child($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
               return true;
	} else { 
               return false; 
	}
}

/** end is_subpage**/

/** custom wp-login**/
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logos/Ben__Jerrys.png);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
/** end custom wp-login*/
?>
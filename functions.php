<?php
		
	// FUNCIONES	
	function iniciarTema(){
		// Activar Imágenes Destacadas	
		add_theme_support( 'post-thumbnails' );
		add_image_size('blog_preview', 700, 400, true); 
		add_image_size('blog', 1200, 600, true); 
		add_image_size('slider_mobile', 600, 800, true); 
		
		add_theme_support( 'title-tag' );
		
        register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
        
	}

	// Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
	add_action( 'after_setup_theme', 'iniciarTema' );
	
	
/*
	remove_filter('get_the_excerpt', 'wp_trim_excerpt');
	add_filter('get_the_excerpt', 'custom_trim_excerpt');
	
	function custom_trim_excerpt($text) { // Fakes an excerpt if needed
		global $post;
		if ( '' == $text ) {
			$text = get_the_content('');
			$text = apply_filters('the_content', $text);
			$text = str_replace(']]>', ']]>', $text);
			$text = strip_tags($text);
			$excerpt_length = 70;
			$words = explode(' ', $text, $excerpt_length + 1);
			if (count($words) > $excerpt_length) {
				array_pop($words);
				array_push($words, '...');
				$text = implode(' ', $words);
			}
		}
		return $text;
	}
*/
	
	
	
/******************************************************************************/
/* INCLUIR SCRIPTS */

	function incluirScripts(){

		// Incluir CSS
		wp_enqueue_style( 'MaterialIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'screen'  );
		wp_enqueue_style( 'materialize', get_template_directory_uri() . '/assets/css/materialize.css', array(), '1.0', 'screen' );
		wp_enqueue_style( 'swal', get_template_directory_uri() . '/assets/css/sweet-alert.css', array(), '2.4', 'screen' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.2', 'screen' );
		wp_enqueue_style( 'scroll', get_template_directory_uri() . '/assets/css/scroll.css', array(), '1.0', 'screen' );
		
		wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0', 'screen' );
		wp_enqueue_style( 'owlTheme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0', 'screen' );
		
		wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/assets/fonts/font-awesome-4.6.3/css/font-awesome.css', array(), '1.0', 'screen' );
		wp_enqueue_style( 'fontMontserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1.0', 'screen' );
		wp_enqueue_style( 'fontRaleway', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700|Raleway:100,200,300,400,500,600,700,800,900', array(), '1.0', 'screen' );

		// Incluir JS
		
		wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'materialize_js', get_template_directory_uri() . '/assets/js/materialize.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'jquery.easing_js', get_template_directory_uri() . '/assets/js/jquery.easing.js', array('jquery'), '', true );
		wp_enqueue_script( 'scroll_js', get_template_directory_uri() . '/assets/js/scroll.js', array('jquery'), '', true );
		wp_enqueue_script( 'form_js', get_template_directory_uri() . '/assets/js/jquery.form.js', array('jquery'), '3.51.0', true );
		wp_enqueue_script( 'swal_js', get_template_directory_uri() . '/assets/js/sweet-alert.min.js', array('jquery'), '1.6.5', true );
		wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'init_js', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), '1.0', true );

	}
	add_action('wp_enqueue_scripts', 'incluirScripts');
	
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://code.jquery.com/jquery-1.10.2.min.js"), false, '1.11.3', true);
		wp_enqueue_script('jquery');
	}
	
/******************************************************************************/

if (class_exists('MultiPostThumbnails')) {
/*
	new MultiPostThumbnails(array(
		'label' => 'Imagen Slider',
		'id' => 'imagen-slider',
		'post_type' => 'evento'
	 ) );
*/	 
	 new MultiPostThumbnails(array(
		'label' => 'Cortos Relacionados',
		'id' => 'cortos-relacionados',
		'post_type' => 'programa'
	 ) );

	 
	 new MultiPostThumbnails(array(
		'label' => 'Header Programa',
		'id' => 'header-programa',
		'post_type' => 'programa'
	 ) );
 }


function muestra_galeria($post_id = false, $exclude = true, $cantidad = -1) {
		global $post;
		if (!$post_id){
			$post_id = $post->ID;
		}
		$args = array( 'post_type' => 'attachment', 'numberposts' => $cantidad, 'post_status' => null, 'post_parent' => $post_id, 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC'); 
		if ($exclude){
			$args = array_merge( $args, array( 'post__not_in' => array( get_post_thumbnail_id(), $imagen_chica, 'imagen-slider' ) ) );
		}
		$attachments = get_posts($args);
		return $attachments;
	}

function SpanishDate($FechaStamp)
{  $FechaStamp = 	strtotime($FechaStamp);
   $ano = date('Y',$FechaStamp);
   $mes = date('n',$FechaStamp);
   $dia = date('d',$FechaStamp);
   $diasemana = date('w',$FechaStamp);
   $diassemanaN= array("Domingo","Lunes","Martes","Miércoles",
                  "Jueves","Viernes","Sábado");
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   return $diassemanaN[$diasemana].", $dia de ". $mesesN[$mes] ." de $ano";
}  
function SpanishDate2($FechaStamp)
{  $FechaStamp = 	strtotime($FechaStamp);
   $ano = date('Y',$FechaStamp);
   $mes = date('n',$FechaStamp);
   $dia = date('d',$FechaStamp);
   $diasemana = date('w',$FechaStamp);
   $diassemanaN= array("Domingo","Lunes","Martes","Miércoles",
                  "Jueves","Viernes","Sábado");
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   return $diassemanaN[$diasemana]."  $dia";
}  
function SpanishDate3($FechaStamp)
{  $FechaStamp = 	strtotime($FechaStamp);
   $ano = date('Y',$FechaStamp);
   $mes = date('n',$FechaStamp);
   $dia = date('d',$FechaStamp);
   $diasemana = date('w',$FechaStamp);
   $diassemanaN= array("Domingo","Lunes","Martes","Miércoles",
                  "Jueves","Viernes","Sábado");
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   return $dia ." de ". $mesesN[$mes] ." $ano";
}  
function SpanishMonth($FechaStamp)
{  
   $mes = $FechaStamp;
   $mesesN=array(1=>"Ene","Feb","Mar","Abr","May","Jun","Jul",
             "Ago","Sep","Oct","Nov","Dic");
             
   return $mesesN[$mes];
} 
function SpanishMonth2($FechaStamp)
{  
   $mes = $FechaStamp;
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
             
   return $mesesN[$mes];
}    



function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

function corrige_url($urlStr){
	$parsed = parse_url($urlStr);
	if (empty($parsed['scheme'])) {
	    $urlStr = 'http://' . ltrim($urlStr, '/');
	}
	return $urlStr;
}



add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));





function themeprefix_show_cpt_archives( $query ) {
 if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
 $query->set( 'post_type', array(
 'post', 'nav_menu_item', 'programa'
 ));
 return $query;
 }
}
add_filter( 'pre_get_posts', 'themeprefix_show_cpt_archives' );

	
add_action( 'pre_get_posts', function($q) { 
	if( !is_admin() && $q->is_main_query() && !$q->is_tax() ) { 
		$q->set ('post_type', array( 'post', 'programa' ) ); 
	} 
});

?>

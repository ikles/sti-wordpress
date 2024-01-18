<?php
add_theme_support('post-thumbnails');

/**
* добавляем меню
**/
function register_my_menus() {
	register_nav_menus(
		array(
			'top-mnu' => __( 'Top Menu 1' ),
			'top-mnu2' => __( 'Top Menu 2' ),
			'b-mnu1' => __( 'Footer Menu 1' ),
			'b-mnu2' => __( 'Footer Menu 2' )      
		)
	);
}
add_action( 'init', 'register_my_menus' );

//Вывод в шаблоне:
//<?php wp_nav_menu(array( 'theme_location' => 'top-mnu', 'menu_class' => 'link-list cls2' ));


register_sidebar(array(
	'name' => 'Телефон',
	'id' => 'phone',
	'description' => '',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));


function p_a($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


function wfmtest_custom_init() {
	register_post_type('solutions', array(
		'labels'             => array(
			'name'               => 'Услуги и решения', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'all_items'          => 'Все услуги и решения',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          => 'Услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги и решения'
		),
		'public' => true,
		'supports' => array(
			'title', 'editor', 'thumbnail','custom-fields'
		),
		'menu_position' => 20
	));

	register_post_type('directions', array(
		'labels'             => array(
			'name'               => 'Направления', // Основное название типа записи
			'singular_name'      => 'Направление', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое',
			'all_items'          => 'Все Направления',
			'add_new_item'       => 'Добавить новое направление',
			'edit_item'          => 'Редактировать направление',
			'new_item'           => 'Новое направлене',
			'view_item'          => 'Посмотреть направление',
			'search_items'       => 'Найти направление',
			'not_found'          => 'направлений не найдено',
			'not_found_in_trash' => 'В корзине направлений не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Направления'
		),
		'public' => true,
		'supports' => array(
			'title', 'editor', 'thumbnail','custom-fields'
		),
		'menu_position' => 21
	));

	register_post_type('industries', array(
		'labels'             => array(
			'name'               => 'Отрасли', // Основное название типа записи
			'singular_name'      => 'Отрасль', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'all_items'          => 'Все Отрасли',
			'add_new_item'       => 'Добавить новую отрасль',
			'edit_item'          => 'Редактировать отрасль',
			'new_item'           => 'Новая отрасль',
			'view_item'          => 'Посмотреть отрасль',
			'search_items'       => 'Найти отрасль',
			'not_found'          => 'отраслей не найдено',
			'not_found_in_trash' => 'В корзине отраслей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отрасли'
		),
		'public' => true,
		'supports' => array(
			'title', 'editor', 'thumbnail','custom-fields'
		),
		'menu_position' => 22
	));
	
}

add_action( 'init', 'wfmtest_custom_init' );





add_theme_support('woocommerce');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/*add_filter('loop_shop_per_page', create_function('$cols', 'return 3;'));

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
	return 3;
}
}*/

add_theme_support( 'wc-product-gallery-lightbox' ); //для включения лайтбокса
add_theme_support( 'wc-product-gallery-slider' ); //для включения слайдера



add_action( 'product_cat_edit_form_fields', 'wpm_taxonomy_edit_meta_field', 10, 2 );

function wpm_taxonomy_edit_meta_field($term) {

	$t_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$t_id" );
	$content = $term_meta['custom_term_meta'] ? wp_kses_post( $term_meta['custom_term_meta'] ) : '';
	$settings = array( 'textarea_name' => 'term_meta[custom_term_meta]' );
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="term_meta[custom_term_meta]">Описание под товарами</label></th>
		<td>
			<?php wp_editor( $content, 'product_cat_details', $settings ); ?>

		</td>
	</tr>
	<?php
}

add_action( 'edited_product_cat', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_product_cat', 'save_taxonomy_custom_meta', 10, 2 );

function save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = wp_kses_post( stripslashes($_POST['term_meta'][$key]) );
			}
		}

		update_option( "taxonomy_$t_id", $term_meta );
	}
}

//add_action( 'woocommerce_after_shop_loop', 'wpm_product_cat_archive_add_meta' );



add_filter('widget_text', 'do_shortcode');
add_filter('wfm_class', 'do_shortcode');

//add_filter('loop_shop_per_page', create_function('$cols', 'return 20;'));

//переопределени стандартной функции

function woocommerce_content() {
	if ( is_singular( 'product' ) ) {
		while ( have_posts() ) : the_post();
			wc_get_template_part( 'content', 'single-product' );
		endwhile;
	} else { ?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<!--div class="page-title"><?php woocommerce_page_title(); ?></div-->
		<?php endif; ?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
		<?php if ( have_posts() ) : ?>
			<?php do_action('woocommerce_before_shop_loop'); ?>
			<?php woocommerce_product_loop_start(); ?>
			<?php woocommerce_product_subcategories(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php woocommerce_product_loop_end(); ?>
			<?php do_action('woocommerce_after_shop_loop'); ?>
		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
		<?php wc_get_template( 'loop/no-products-found.php' ); ?>
	<?php endif;
}
}

wp_dequeue_script ( 'prettyPhoto'); 
wp_dequeue_script ( 'prettyPhoto-Init');

/*хлебные крошки*/

/*
function the_breadcrumb() {
	if (!is_front_page()) {

		echo '<a href="/portfolio/">Портфолио</a><span>/</span> ';      

/*
echo '<a href="';
echo get_option('home');
echo '">Портфолио';
echo "</a> » ";
*/
/*
if (is_category() || is_single()) {
	the_category(' ');
	echo '<span>/ </span>';
	if (is_single()) {
		echo "";
		the_title();
	}
} elseif (is_page()) {
	echo the_title();
}
      }
      else {
      	echo 'Портфолио';
      }
    }
*/




    remove_shortcode('gallery');


    function new_gallery_shortcode( $attr ) {
    	$post = get_post();

    	static $instance = 0;
    	$instance++;

    	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
    		if ( empty( $attr['orderby'] ) ) {
    			$attr['orderby'] = 'post__in';
    		}
    		$attr['include'] = $attr['ids'];
    	}

	/**
	 * Filters the default gallery shortcode output.
	 *
	 * If the filtered output isn't empty, it will be used instead of generating
	 * the default gallery template.
	 *
	 * @since 2.5.0
	 * @since 4.2.0 The `$instance` parameter was added.
	 *
	 * @see gallery_shortcode()
	 *
	 * @param string $output   The gallery output. Default empty.
	 * @param array  $attr     Attributes of the gallery shortcode.
	 * @param int    $instance Unique numeric ID of this gallery shortcode instance.
	 */
	$output = apply_filters( 'post_gallery', '', $attr, $instance );
	if ( $output != '' ) {
		return $output;
	}

	$html5 = current_theme_supports( 'html5', 'gallery' );
	$atts = shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id' => $post ? $post->ID : 0,
		'itemtag'    => $html5 ? 'figure'     : 'li',
		'icontag'    => $html5 ? 'div': 'span',
		'captiontag' => $html5 ? 'figcaption' : 'dd',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'gallery' );

	$id = intval( $atts['id'] );

	if ( ! empty( $atts['include'] ) ) {
		$_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( ! empty( $atts['exclude'] ) ) {
		$attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	} else {
		$attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
		}
		return $output;
	}

	$itemtag = tag_escape( $atts['itemtag'] );
	$captiontag = tag_escape( $atts['captiontag'] );
	$icontag = tag_escape( $atts['icontag'] );
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) ) {
		$itemtag = 'dl';
	}
	if ( ! isset( $valid_tags[ $captiontag ] ) ) {
		$captiontag = 'dd';
	}
	if ( ! isset( $valid_tags[ $icontag ] ) ) {
		$icontag = 'span';
	}

	$columns = intval( $atts['columns'] );
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = '';

	/**
	 * Filters whether to print default gallery styles.
	 *
	 * @since 3.1.0
	 *
	 * @param bool $print Whether to print default gallery styles.
	 *    Defaults to false if the theme supports HTML5 galleries.
	 *    Otherwise, defaults to true.
	 */
	if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
		$gallery_style = "
		<style type='text/css'>
			#{$selector} {
		margin: auto;
	}
			#{$selector} .gallery-item {
	float: {$float};
	margin-top: 10px;
	text-align: center;
	width: {$itemwidth}%;
}
			#{$selector} img {
border: none;
}
			#{$selector} .gallery-caption {
margin-left: 0;
}
/* see gallery_shortcode() in wp-includes/media.php */
</style>\n\t\t";
}

$size_class = sanitize_html_class( $atts['size'] );
$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'><ul>";

	/**
	 * Filters the default gallery shortcode CSS styles.
	 *
	 * @since 2.5.0
	 *
	 * @param string $gallery_style Default CSS styles and opening HTML div container
	 *      for the gallery shortcode output.
	 */
	$output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
		if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
			$image_output = wp_get_attachment_link( $id, $atts['size'], false, false, false, $attr );
		} elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
			$image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
		} else {
			$image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
		}
		$image_meta  = wp_get_attachment_metadata( $id );

		$orientation = '';
		if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
			$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
		}
		$output .= "<{$itemtag} class='pr-item'>";
		$output .= "
		<{$icontag} class='gallery-icon {$orientation}'>
		$image_output
		</{$icontag}>";
		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "
			<{$captiontag} class='wp-caption-text gallery-caption' id='$selector-$id'>
			" . wptexturize($attachment->post_excerpt) . "
			</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
		if ( ! $html5 && $columns > 0 && ++$i % $columns == 0 ) {
			$output .= '';
		}
	}

	if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
		$output .= "
		";
	}

	$output .= "
	</ul></div><span class='jt'></span>\n";

	return $output;
}

add_shortcode('gallery', 'new_gallery_shortcode');


//удаление похожих товаров из карточки
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


//удаление из cf7 элементов форматирования
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	return $content;
});

/**
   * Для термина  - product_cat
   */
add_filter( 'request', 'change_requerst_vars_for_product_cat' );
add_filter( 'term_link', 'term_link_filter', 10, 3 );

  /**
   * Для типа постов - product
   */
  add_filter( 'post_type_link', 'wpp_remove_slug', 10, 3 );
  add_action( 'pre_get_posts', 'wpp_change_request' );

  function change_requerst_vars_for_product_cat($vars) {

  	global $wpdb;
  	if ( ! empty( $vars[ 'pagename' ] ) || ! empty( $vars[ 'category_name' ] ) || ! empty( $vars[ 'name' ] ) || ! empty( $vars[ 'attachment' ] ) ) {
  		$slug   = ! empty( $vars[ 'pagename' ] ) ? $vars[ 'pagename' ] : ( ! empty( $vars[ 'name' ] ) ? $vars[ 'name' ] : ( ! empty( $vars[ 'category_name' ] ) ? $vars[ 'category_name' ] : $vars[ 'attachment' ] ) );
  		$exists = $wpdb->get_var( $wpdb->prepare( "SELECT t.term_id FROM $wpdb->terms t LEFT JOIN $wpdb->term_taxonomy tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'product_cat' AND t.slug = %s", array( $slug ) ) );
  		if ( $exists ) {
  			$old_vars = $vars;
  			$vars     = array( 'product_cat' => $slug );
  			if ( ! empty( $old_vars[ 'paged' ] ) || ! empty( $old_vars[ 'page' ] ) ) {
  				$vars[ 'paged' ] = ! empty( $old_vars[ 'paged' ] ) ? $old_vars[ 'paged' ] : $old_vars[ 'page' ];
  			}
  			if ( ! empty( $old_vars[ 'orderby' ] ) ) {
  				$vars[ 'orderby' ] = $old_vars[ 'orderby' ];
  			}
  			if ( ! empty( $old_vars[ 'order' ] ) ) {
  				$vars[ 'order' ] = $old_vars[ 'order' ];
  			}
  		}
  	}

  	return $vars;

  }


  function term_link_filter( $url, $term, $taxonomy ) {

  	$url = str_replace( "/product-category/", "/", $url );
  	return $url;

  }

  function wpp_remove_slug( $post_link, $post, $name ) {

  	if ( 'product' != $post->post_type || 'publish' != $post->post_status ) {
  		return $post_link;
  	}
  	$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

  	return $post_link;

  }

  function wpp_change_request( $query ) {

  	if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query[ 'page' ] ) ) {
  		return;
  	}
  	if ( ! empty( $query->query[ 'name' ] ) ) {
  		$query->set( 'post_type', array( 'post', 'product', 'page' ) );
  	}

  }

// Наименование выше миниатюры (на cтранице вывода товаров категории)
  remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
  add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_title', 5 );

//количество товаров в категории 9 штук
  //add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );






  remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
  add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
/**
 * WooCommerce Loop Product Thumbs
 **/
if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
	function woocommerce_template_loop_product_thumbnail() {
		echo woocommerce_get_product_thumbnail();
	} 
}
/**
 * WooCommerce Product Thumbnail
 **/
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
	
	function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
		global $post, $woocommerce, $product;

		$output = '<div class="it-img">';
		if ( has_post_thumbnail() ) {

			$output .= get_the_post_thumbnail( $post->ID, $size ); 

		} else {
			
			$output .= '<img src="'. woocommerce_placeholder_img_src() .'" alt="Placeholder" width="' . $placeholder_width . '" height="' . $placeholder_height . '" />';
			
		}


		if ($product->get_attribute('hit')) {
			$output .= '<div class="it-hit">';
			$output .= $product->get_attribute('hit');
			$output .= '</div>';
		}

		if ($product->get_attribute('sale20')) {
			$output .= '<div class="it-20">';
			$output .= $product->get_attribute('sale20');
			$output .= '</div>';
		}

		$output .= '</div>';

		return $output;
	}
}

// Отключаем табы на странице товара
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

  //unset( $tabs['description'] ); // Убираем вкладку "Описание"
  //unset( $tabs['reviews'] ); // Убираем вкладку "Отзывы"
  unset( $tabs['additional_information'] ); // Убираем вкладку "Свойства"



  return $tabs;
}

function woocommerce_header_add_to_cart_fragment( $fragments ) { 
	ob_start(); 
	?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Перейти в корзину' ); ?>">  
		<span class="cart-ico"> <i class="fa fa-shopping-cart"></i></span>  
		<span class="cart-txt">товаров: <strong><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></strong><br> на сумму: <strong><?php echo WC()->cart->get_cart_total(); ?></strong></span>
	</a>
	<?php 
	$fragments['a.cart-contents'] = ob_get_clean(); 
	return $fragments;
}

//Вывод кратких данных из корзины
if ( ! function_exists( 'cart_link' ) ) {
	function cart_link() { 
	?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Перейти в корзину' ); ?>">


		<span class="count-in-cart"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span>
		<div class="r-bl">
			<p>В корзине</p>
			<span class="price-c"><?php echo WC()->cart->get_cart_total(); ?></span>
		</div>
		<!--span class="cart-txt">товаров: <strong><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></strong><br> на сумму: <strong><?php echo WC()->cart->get_cart_total(); ?></strong></span-->
	</a>
	<?php 
}
}


//отключение обновления плагина
/*
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['woocommerce-products-carousel-all-in-one/woocommerce-products-carousel-all-in-one.php'] );
	return $value;
}
*/
/*
remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте
remove_filter( 'the_excerpt', 'wpautop' ); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter('comment_text', 'wpautop'); // Отключаем автоформатирование в комментариях
*/

//количество вывода отзывов 5

function woocommerce_product_review_list_args_mod($args){
	$args['per_page'] = 5;
	return $args;
}
add_filter( 'woocommerce_product_review_list_args', 'woocommerce_product_review_list_args_mod' );


//чтобы php код работал внутри виджетов

function mayak_widget_php($widget_content) {
	if (strpos($widget_content, '<' . '?') !== false) {
		ob_start();
		eval('?' . '>' . $widget_content);
		$widget_content = ob_get_contents();
		ob_end_clean();
	}
	return $widget_content;
}
add_filter('widget_text', 'mayak_widget_php', 99);

/**
 * Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
 * чтобы она не тормозила, когда долго не заходил и зашел...
 * Все проверки будут происходить незаметно через крон или при заходе на страницу: "Консоль > Обновления".
 *
 * @see https://wp-kama.ru/filecode/wp-includes/update.php
 * @author Kama (https://wp-kama.ru)
 * @version 1.0
 */
if( is_admin() ){
  // отключим проверку обновлений при любом заходе в админку...
	remove_action( 'admin_init', '_maybe_update_core' );
	remove_action( 'admin_init', '_maybe_update_plugins' );
	remove_action( 'admin_init', '_maybe_update_themes' );

  // отключим проверку обновлений при заходе на специальную страницу в админке...
	remove_action( 'load-plugins.php', 'wp_update_plugins' );
	remove_action( 'load-themes.php', 'wp_update_themes' );

  // оставим принудительную проверку при заходе на страницу обновлений...
  //remove_action( 'load-update-core.php', 'wp_update_plugins' );
  //remove_action( 'load-update-core.php', 'wp_update_themes' );

  // внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
  //remove_action( 'load-update.php', 'wp_update_plugins' );
  //remove_action( 'load-update.php', 'wp_update_themes' );

  // событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
  //remove_action( 'wp_version_check', 'wp_version_check' );
  //remove_action( 'wp_update_plugins', 'wp_update_plugins' );
  //remove_action( 'wp_update_themes', 'wp_update_themes' );

  /**
   * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
   * эта проверка происходит раз в неделю...
   * @see https://wp-kama.ru/function/wp_check_browser_version
   */
  add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}


/* --------------------------------------------------------------------------
 * Отключаем Emojii
 * -------------------------------------------------------------------------- */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
/* --------------------------------------------------------------------------- */


function the_breadcrumb() {
	if (!is_front_page()) {
		echo '<a href="';
		echo get_option('home');
		echo '">Main';
		echo '</a> <i><span class="bread-arr"></span></i> ';
		if (is_category() || is_single()) {
      //the_category();
			if (is_category()) { 
				single_cat_title();
        //the_category();
			}
			if (is_single()) {
				the_category();
				echo '<i> <span class="bread-arr"></span> </i>';
				if (get_field('status')) {
					echo get_field('status');
				}        
				else {
					the_title();
				}

			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
	else {
		echo '<span class="bread-span">Main</span>';
	}
}


function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  $q = new WP_Query($args);
  if( $q->have_posts() ):
  	while($q->have_posts()): $q->the_post();    
  		echo '<div class="news-item"><div class="contain"><div class="blog-item-w">';
  		echo '<div class="news-r blog-r"><div class="join-txt-3 news-txt-3">';
  		$category = get_the_category(); 
  		$n_ID = $category[0]->cat_ID;
//p_a($category);
  		echo '<a href="';
  		echo get_category_link($n_ID);
  		echo '">';
  		echo $category[0]->name;
  		echo '</a>';

  		echo '</div><div class="join-txt-2">';
  		echo the_title();
  		echo '</div><div class="news-desc">';
  		echo get_field('short_description');
  		echo '</div> <div class="news-butt-wrap">';
  		echo '<a href="';
  		echo the_permalink();
  		echo '" class="butt-o">Read more</a></div></div><!--news-r-->';
  		echo '<div class="news-l blog-l">';
  		echo '<img src="';
  		echo the_post_thumbnail_url('news-img');
  		echo '" alt="news-img"></div>';
  		echo '</div></div></div>';

  	endwhile; 
  endif;
  wp_reset_postdata();
  die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

//define( 'WP_DEBUG', true );

function searchExcludePages($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}

	return $query;
}

add_filter('pre_get_posts','searchExcludePages');


function mytheme_comment( $comment, $args, $depth ) {  
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
	?>

	<<?php echo $tag, $classes; ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) { ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
	} ?>

	<div class="comment-author vcard">
		<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'] );
		}
		printf(
			__( '<cite class="fn">%s</cite> <span class="says">says:</span>' ),
			get_comment_author_link()
		);
		?>
	</div>

	<?php if ( $comment->comment_approved == '0' ) { ?>
		<em class="comment-awaiting-moderation">
			<?php _e( 'Your comment is awaiting moderation.' ); ?>
		</em><br/>
	<?php } ?>

	<div class="comment-meta commentmetadata">
		<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
			printf(
				__( '%1$s at %2$s' ),
				get_comment_date(),
				get_comment_time()
			); ?>
		</a>

		<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
	</div>

	<?php comment_text(); ?>

	<div class="reply">
		<?php
		comment_reply_link(
			array_merge(
				$args,
				array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				)
			)
		); ?>
	</div>

	<?php if ( 'div' != $args['style'] ) { ?>
	</div>
<?php }
}
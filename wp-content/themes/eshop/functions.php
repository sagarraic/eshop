<?php
/**
* eshop functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package eshop
*/
if ( ! function_exists( 'eshop_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function eshop_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on eshop, use a find and replace
		* to change 'eshop' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'eshop', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );
		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'eshop' ),
		) );
		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'eshop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eshop_setup' );
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function eshop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'eshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'eshop_content_width', 0 );
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function eshop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eshop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eshop_widgets_init' );
/**
* Enqueue scripts and styles.
*/
function eshop_scripts() {
	
	// Custom CSS for ESHOP
		
	wp_enqueue_style( 'eshop-css-icon ', get_template_directory_uri() . '/images/icons/favicon.png', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-fonts', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-themify-icons', get_template_directory_uri() . '/fonts/themify/themify-icons.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-Linears-icons', get_template_directory_uri() . '/fonts/Linearicons-Free-v1.0.0/icon-font.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-elegant-font', get_template_directory_uri() . '/fonts/elegant-font/html-css/style.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-animate', get_template_directory_uri() . '/vendor/animate/animate.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-hamburgers', get_template_directory_uri() . '/vendor/css-hamburgers/hamburgers.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-animsition', get_template_directory_uri() . '/vendor/animsition/css/animsition.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-select2', get_template_directory_uri() . '/vendor/select2/select2.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-daterangepicker', get_template_directory_uri() . '/vendor/daterangepicker/daterangepicker.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-slick', get_template_directory_uri() . '/vendor/slick/slick.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-lightbox2', get_template_directory_uri() . '/vendor/lightbox2/css/lightbox.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-util', get_template_directory_uri() . '/css/util.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-main', get_template_directory_uri() . '/css/main.css', false, '1.0.0', 'all' );
	
	// Custom JavaScript for ESHOP website
	wp_enqueue_script('eshop-jquery-js', get_template_directory_uri() . '/vendor/jquery/jquery-3.2.1.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-animsition', get_template_directory_uri() . '/vendor/animsition/js/animsition.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-popper', get_template_directory_uri() . '/vendor/bootstrap/js/popper.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-jquerybootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-select2', get_template_directory_uri() . '/vendor/select2/select2.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-slick', get_template_directory_uri() . '/vendor/slick/slick.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-slick-custom', get_template_directory_uri() . '/js/slick-custom.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-countdowntime', get_template_directory_uri() . '/vendor/countdowntime/countdowntime.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-lightbox', get_template_directory_uri() . '/vendor/lightbox2/js/lightbox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-sweetalert', get_template_directory_uri() . '/vendor/sweetalert/sweetalert.min.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('eshop-js-nouislider', get_template_directory_uri() . '/vendor/noui/nouislider.min.js', array('jquery'), '1.0.0', true);
	
	wp_enqueue_script('eshop-js-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
	
	wp_enqueue_script('eshop-js-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes', array('jquery'), '1.0.0', true);

	wp_enqueue_script('eshop-js-map-custom', get_template_directory_uri() . '/js/map-custom.js', array('jquery'), '1.0.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eshop_scripts' );
/**
* Implement the Custom Header feature.
*/
require get_template_directory() . '/inc/custom-header.php';
/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';
/**
* Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';
/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';
/**
* Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
* Load WooCommerce compatibility file.
*/
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
// remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
// These are actions you can unhook/remove!
add_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );
add_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );

function woocommerce_quantity_input($data = null) {
	global $product;
	if (!$data) {
	$defaults = array(
	'input_name'   => 'quantity',
	'input_value'   => '1',
	'max_value'     => apply_filters( 'woocommerce_quantity_input_max', '', $product ),
	'min_value'     => apply_filters( 'woocommerce_quantity_input_min', '', $product ),
	'step'         => apply_filters( 'woocommerce_quantity_input_step', '1', $product ),
	'style'         => apply_filters( 'woocommerce_quantity_style', 'float:left;', $product )
	);
	} else {
	$defaults = array(
	'input_name'   => $data['input_name'],
	'input_value'   => $data['input_value'],
	'step'         => apply_filters( 'cw_woocommerce_quantity_input_step', '1', $product ),
	'max_value'     => apply_filters( 'cw_woocommerce_quantity_input_max', '', $product ),
	'min_value'     => apply_filters( 'cw_woocommerce_quantity_input_min', '', $product ),
	'style'         => apply_filters( 'cw_woocommerce_quantity_style', 'float:left;', $product )
	);
	}
	if ( ! empty( $defaults['min_value'] ) )
	$min = $defaults['min_value'];
	else $min = 1;
	if ( ! empty( $defaults['max_value'] ) )
	$max = $defaults['max_value'];
	else $max = 15;
	if ( ! empty( $defaults['step'] ) )
	$step = $defaults['step'];
	else $step = 1;
	$options = '';
	for ( $count = $min; $count <= $max; $count = $count+$step ) {
	$selected = $count === $defaults['input_value'] ? ' selected' : '';
	$options .= '<option value="' . $count . '"'.$selected.'>' . $count . '</option>';
	}
	echo '<div class="cw_quantity_select" style="' . $defaults['style'] . '"><select name="' . esc_attr( $defaults['input_name'] ) . '" title="' . _x( 'Qty', 'Product Description', 'woocommerce' ) . '" class="cw_qty">' . $options . '</select></div>';
}

// Custom cart Count Function
add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
function refresh_cart_count( $fragments ){
    ob_start();
    ?>
    <span class="header-icons-noti" id="cart-count"><?php
    $cart_count = WC()->cart->get_cart_contents_count();
    echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
    ?></span>
    <?php
     $fragments['#cart-count'] = ob_get_clean();

    return $fragments;
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $products ) {
  // Return the number of products you wanna show per page.
  $products = 6;
  return $products;
}

// Custom Menu
function add_your_menu() {
  add_menu_page( 'Home Page', 'Homepage', 'manage_options', 'custom-menu.php', 'your_menu_function', 'dashicons-chart-pie', 5);
}
add_action('admin_menu', 'add_your_menu');


/**
 * Custom Post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

// Limitation on excerpt
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 40 );

// Custom Comments
function mytheme_comment($comment, $args, $depth) {
	// echo "<pre>"; print_r($depth);
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'div';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( $depth > 1 ? 'comment-reply' : 'comment-body' ); ?> id="comment-<?php comment_ID() ?>" style="<?php if($depth>2) { $padding=($depth-1)*10; echo 'padding-left:'.$padding.'% !important';} ?>">
    	<?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, '70', $default, $alt, array( 'class' => array( 'comment-avatar' ) ) ); 
            }
        ?>
        <div class="comment-content s-text8">
        	<?php printf( __( '<span class="comment-author">%s</span>' ), get_comment_author_link() ); ?>
        	<span>
    		<?php
            /* translators: 1: date, 2: time */
            printf( 
                __('%1$s at %2$s'), 
                get_comment_date(),  
                get_comment_time() 
            ); ?>
            </span>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
	        <?php 
	        if ( $comment->comment_approved == '0' ) { ?>
	            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
	        } ?>
	        <p>
        		<?php comment_text(); ?>
	        </p>
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
		        ); 
            ?>
        </div>
    </<?php echo $tag; ?>>
    <?php echo $depth > 1 ? '<hr>' : '' ?>
        <?php 
}


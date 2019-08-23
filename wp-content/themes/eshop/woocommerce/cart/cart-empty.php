<?php
/**
* Empty cart page
*
* This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.5.0
*/
defined( 'ABSPATH' ) || exit;
/*
* @hooked wc_empty_cart_message - 10
*/
do_action( 'woocommerce_cart_is_empty' );
if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-9 p-b-75">
			<div class="item-blog-txt p-t-33">
				<h4 class="p-b-11">
					There is no any product on the list
				</h4>
				<p class="return-to-shop">
					<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
						<?php esc_html_e( 'Return to shop page', 'woocommerce' ); ?>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
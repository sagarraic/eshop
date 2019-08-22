<?php
/**
* Cart totals
*
* This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
						* @see 	    https://docs.woocommerce.com/document/template-structure/
						* @package 	WooCommerce/Templates
* @version     2.3.6
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
	<?php do_action( 'woocommerce_before_cart_totals' ); ?>
	<h5 class="m-text20 p-b-24"><?php _e( 'Cart totals', 'woocommerce' ); ?></h5>
	<table cellspacing="0" class="shop_table shop_table_responsive">
		
		<div class="flex-w flex-sb-m p-b-12">
			<tr class="cart-subtotal">
				<th>
					<span class="s-text18 w-size19 w-full-sm"><?php _e( 'Subtotal', 'woocommerce' ); ?></span>
				</th>
				<td data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
					<span class="s-text18 w-size19 w-full-sm"><?php wc_cart_totals_subtotal_html(); ?></span>
				</td>
			</tr>
			<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th>
					<span class="m-text21 w-size20 w-full-sm"><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
				</th>
				<td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>">
					<span class="m-text21 w-size20 w-full-sm"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
				</td>
			</tr>
			<?php endforeach; ?>
		</div>
		
		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
		<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
		<?php wc_cart_totals_shipping_html(); ?>
		<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
		<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
		
		<tr class="shipping">
			<th><?php _e( 'Shipping', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
		</tr>
		<?php endif; ?>
		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
		<tr class="fee">
			<th><?php echo esc_html( $fee->name ); ?></th>
			<td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
		</tr>
		<?php endforeach; ?>
		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) :
			$taxable_address = WC()->customer->get_taxable_address();
			$estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
					? sprintf( ' <small>' . __( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
					: '';
		if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
		<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
		<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
			<th><?php echo esc_html( $tax->label ) . $estimated_text; ?></th>
			<td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
		</tr>
		<?php endforeach; ?>
		<?php else : ?>
		<tr class="tax-total">
			<th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></th>
			<td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
		</tr>
		<?php endif; ?>
		<?php endif; ?>
		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
		<div class="flex-w flex-sb-m p-t-26 p-b-30">
			<tr class="order-total">
				<th><span class="m-text22 w-size19 w-full-sm"><?php _e( 'Total', 'woocommerce' ); ?></span></th>
				<td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><span class="m-text21 w-size20 w-full-sm"><?php wc_cart_totals_order_total_html(); ?></span></td>
			</tr>
		</div>
		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
	</table>
	<br>
	<div class="size15 trans-0-4 wc-proceed-to-checkout">
		<div class="size15 trans-0-4">
			<a href="<?php echo get_site_url(); ?>/checkout" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
			Proceed to checkout</a>
		</div>
		<?php do_action( 'woocommerce_after_cart_totals' ); ?>
	</div>
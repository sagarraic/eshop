<?php
/**
* The template for displaying product content in the single-product.php template
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.6.0
*/
defined( 'ABSPATH' ) || exit;
global $product;
$attachment_ids = $product->get_gallery_image_ids();
// echo "<pre>"; print_r($attachment_ids);
	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );
	if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
	} ?>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<div class="container bgwhite p-t-35 p-b-80">
			<div class="flex-w flex-sb">
				<div class="w-size13 p-t-30 respon5">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="slick3">
							<?php
							if (!empty($attachment_ids)) { 
							foreach( $attachment_ids as $attachment_id ) { 
							    $image_link = wp_get_attachment_url( $attachment_id );
							?>
							<div class="item-slick3" data-thumb="<?php echo $image_link; ?>">
								<div class="wrap-pic-w">
									<img src="<?php echo $image_link; ?>">
								</div>
							</div>
							<?php } }
							else{ ?>
							<div class="item-slick3" data-thumb="<?php echo get_the_post_thumbnail_url(); ?>">
								<div class="wrap-pic-w">
									<img src="<?php echo get_the_post_thumbnail_url();?>">
								</div>
							</div>
							<?php
							} ?>
							
						</div>
					</div>
				</div>
				<div class="w-size14 p-t-30 respon5">
					<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $product->name; ?>
					</h4>
					<span class="m-text17">
						Rs. <?php echo $product->price; ?>
					</span>
					<!--  -->
					<div class="p-t-33 p-b-60">
						<div class="flex-m flex-w p-b-10">
							<div class="s-text15 w-size15 t-center">
								Size
							</div>
							<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
								<select class="selection-2" name="size">
									<option>Choose an option</option>
									<option>Size S</option>
									<option>Size M</option>
									<option>Size L</option>
									<option>Size XL</option>
								</select>
							</div>
						</div>
						<div class="flex-m flex-w">
							<div class="s-text15 w-size15 t-center">
								Color
							</div>
							<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
								<select class="selection-2" name="color">
									<option>Choose an option</option>
									<option>Gray</option>
									<option>Red</option>
									<option>Black</option>
									<option>Blue</option>
								</select>
							</div>
						</div>
						<div class="flex-r-m flex-w p-t-10">
							<div class="w-size16 flex-m flex-w">
								<?php woocommerce_template_single_add_to_cart(); ?>
							</div>
						</div>
					</div>
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					// do_action( 'woocommerce_before_single_product_summary' );
					?>
					<div class="p-b-45">
						<span class="s-text8 m-r-35">SKU: Empty</span>
						<span class="s-text8">Categories: <?php
							$categories = get_the_terms( $product->ID, 'product_cat' );
							if ( ! empty( $categories ) ) {
							if ( ! is_wp_error( $categories ) ) {
							$n = count($categories);
							foreach( $categories as $i => $cat ) { ?>
							<a href="<?php echo get_term_link( $cat ); ?>"><?php echo esc_html( $cat->name ); if (($i+1) != $n) echo ', '; ?></a>
							<?php }
							}
							}
							else {
							echo "N/A";
							}
						?></span>
					</div>
					<!--  -->
					<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
						<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
						</h5>
						<div class="dropdown-content dis-none p-t-15 p-b-23">
							<p class="s-text8">
								<?php echo $product->description; ?>
							</p>
						</div>
					</div>
					<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
						<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
						</h5>
						<div class="dropdown-content dis-none p-t-15 p-b-23">
							<p class="s-text8">
								Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
							</p>
						</div>
					</div>
					<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
						<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
						</h5>
						<div class="dropdown-content dis-none p-t-15 p-b-23">
							<p class="s-text8">
								Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="summary entry-summary">
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			// do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		// do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div>
	<?php do_action( 'woocommerce_after_single_product' ); ?>
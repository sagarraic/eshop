<?php get_header(); ?>
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php
				$sliderArgs = array(
					'post_type' => 'slider'
				);
				$sliderLoop = new WP_Query( $sliderArgs );
				if ( $sliderLoop->have_posts() ){
					while ( $sliderLoop->have_posts() ){
						$sliderLoop->the_post();
						$image = get_field( 'image' );
						$align = get_field( 'text_structure' );
						$title = get_field( 'title' );
						$body = get_field( 'body' );
						$show_button = get_field( 'show_button' );
						$button_text = get_field( 'button_text' );
						$button_link = get_field( 'button_link' );
			?>
			<?php if ($align == 'Center') { ?>
			<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo $image['url']; ?>">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="text-align: center;">
						<?php echo $title; ?>
					</span>
					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp" style="text-align: center;">
					<?php echo $body; ?>
					</h2>
					<!-- Button -->
					<?php if ($show_button) { ?>
					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<a href="<?php echo $button_link; ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							<?php echo $button_text; ?>
						</a>
					</div>
					<?php } ?>
				</div>
				<?php } else if ($align == 'Left') { ?>
				<div class="item-slick1 item2-slick1" style="background-image: url(<?php echo $image['url']; ?> ">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							<?php echo $title; ?>
						</span>
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
						<?php echo $body; ?>
						</h2>
						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="<?php echo $button_link; ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								<?php echo $button_text; ?>
							</a>
						</div>
					</div>
				</div>
				<?php } else if ($align == 'Right') { ?>
				<div class="item-slick1 item3-slick1" style="background-image: url(<?php echo $image['url']; ?> ">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							<?php echo $title; ?>
							
						</span>
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
						<?php echo $body; ?>
						</h2>
						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="<?php echo $button_link; ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								<?php echo $button_text; ?>
							</a>
						</div>
					</div>
				</div>
				<?php } } }
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>



<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<?php
					$sliderArgs = array(
						'post_type' => 'banner'
					);
					$sliderLoop = new WP_Query( $sliderArgs );
					if ( $sliderLoop->have_posts() ){
						while ( $sliderLoop->have_posts() ){
				$sliderLoop->the_post(); ?>
				<?php
					$url = get_field( 'link' );
					$category = get_field( 'category' );
				?>
				<?php if ($category=='Watches'){ ?>
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?php echo esc_url( $category_link ); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
				<?php } ?>
				<!-- block1 -->
				<?php if ($category=='Sunglasses'){ ?>
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?php echo $url; ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
				<?php } ?>
				<?php
					}
				}
				wp_reset_query();
				?>
			</div>
			
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<?php
					$sliderArgs = array(
						'post_type' => 'banner'
					);
					$sliderLoop = new WP_Query( $sliderArgs );
					if ( $sliderLoop->have_posts() ){
						while ( $sliderLoop->have_posts() ){
				$sliderLoop->the_post(); ?>
				<?php
					$url = get_field( 'link' );
					$category = get_field( 'category' );
				?>
				<?php if ($category=='Bags'){ ?>
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?php echo esc_url( $category_link ); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
				<?php } ?>
				<!-- block1 -->
				<?php if ($category=='Bikes'){ ?>
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?php echo $url; ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
				<?php } ?>
				<?php
					}
				}
				wp_reset_query();
				?>
			</div>
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<?php
					$sliderArgs = array(
						'post_type' => 'banner'
					);
					$sliderLoop = new WP_Query( $sliderArgs );
					if ( $sliderLoop->have_posts() ){
						while ( $sliderLoop->have_posts() ){
				$sliderLoop->the_post(); ?>
				<?php
					$url = get_field( 'link' );
					$category = get_field( 'category' );
				?>
				<?php if ($category=='Dresses'){ ?>
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?php echo esc_url( $category_link ); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
				<?php } ?>
				
				<?php
					}
				}
				wp_reset_query();
				?>
				<!-- block2 -->
				<div class="block2 wrap-pic-w pos-relative m-b-30">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/bg-01.jpg" alt="IMG">
					<div class="block2-content sizefull ab-t-l flex-col-c-m">
						<h4 class="m-text4 t-center w-size3 p-b-8">
						Sign up & get 20% off
						</h4>
						<p class="t-center w-size4">
							Be the frist to know about the latest fashion news and get exclu-sive offers
						</p>
						<div class="w-size2 p-t-25">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
			Featured Products
			</h3>
		</div>
		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php
					$args = array(
					'post_type' => 'product',
					'posts_per_page' => 12,
					'tax_query' => array(
					array(
					'taxonomy' => 'product_visibility',
					'field'    => 'name',
					'terms'    => 'featured',
					),
					),
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					wc_get_template_part( 'content', 'product' );
					endwhile;
					} else {
					echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
				
			</div>
		</div>
	</div>
</section>
<!-- parallex -->
<section class="banner2 bg5 p-t-55 p-b-55">
	<div class="container">
		<div class="row">
			<?php
			$sliderArgs = array(
			'post_type' => 'parallex',
			'limit' => 1
			);
			$sliderLoop = new WP_Query( $sliderArgs );
			if ( $sliderLoop->have_posts() ){
				while ( $sliderLoop->have_posts() ){
				$sliderLoop->the_post();
					$button_link = get_field( 'button_link' );
					$button_title = get_field( 'button_title' );
			?>
			<?php if($button_title!='Cocooil'){ ?>
			<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
				<div class="hov-img-zoom pos-relative">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="IMG-BANNER">
					<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
						<span class="m-text9 p-t-45 fs-20-sm">
							<?php the_title() ?>
						</span>
						<h3 class="l-text1 fs-35-sm">
						Lookbook
						</h3>
						<a href="<?php echo $button_link; ?>" class="s-text4 hov2 p-t-20 ">
							<?php echo $button_title; ?>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if($button_title =='Cocooil'){ ?>
			<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
				<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG-BANNER">
					<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
						<div class="t-center">
							<a href="product-detail.html" class="dis-block s-text3 p-b-5">
								<?php the_title(); ?>
								
							</a>
							<span class="block2-oldprice m-text7 p-r-5">
								$29.50
							</span>
							<span class="block2-newprice m-text8">
								$15.90
							</span>
						</div>
						<div class="flex-c-m p-t-44 p-t-30-xl">
							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 days">
									69
								</span>
								<span class="s-text5">
									days
								</span>
							</div>
							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 hours">
									04
								</span>
								<span class="s-text5">
									hrs
								</span>
							</div>
							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 minutes">
									32
								</span>
								<span class="s-text5">
									mins
								</span>
							</div>
							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 seconds">
									05
								</span>
								<span class="s-text5">
									secs
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php } } wp_reset_query(); ?>
		</div>
	</div>
</section>
<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
			Our Blog
			</h3>
		</div>
		
		<div class="row">
			<?php
				$sliderArgs = array(
				'post_type' => 'blog',
				'limit' => 1
				);
				$sliderLoop = new WP_Query( $sliderArgs );
				if ( $sliderLoop->have_posts() ){
				while ( $sliderLoop->have_posts() ){
				$sliderLoop->the_post();
					$author = get_field( 'author' );
					$image = get_field( 'image' );
			?>
			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="<?php echo $image['url']; ?>" alt="IMG-BLOG">
					</a>
					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
						<a href="blog-detail.html" class="m-text11">
							<?php the_title(); ?>
						</a>
						</h4>
						<span class="s-text6">By</span> <span class="s-text7"><?php echo $author ?></span>
						<span class="s-text6">on</span> <span class="s-text7">July 22, 2019</span>
						<p class="s-text8 p-t-16">
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
			<?php
			} }
			wp_reset_query();
			?>
		</div>
	</div>
</section>
<!-- Instagram -->
<section class="instagram p-t-20">
	<div class="sec-title p-b-52 p-l-15 p-r-15">
		<h3 class="m-text5 t-center">
		@ follow us on Instagram
		</h3>
	</div>
	<div class="flex-w">
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-03.jpg" alt="IMG-INSTAGRAM">
			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>
				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
					</p>
					<span class="s-text9">
						Photo by @nancyward
					</span>
				</div>
			</a>
		</div>
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-07.jpg" alt="IMG-INSTAGRAM">
			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>
				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
					</p>
					<span class="s-text9">
						Photo by @nancyward
					</span>
				</div>
			</a>
		</div>
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-09.jpg" alt="IMG-INSTAGRAM">
			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>
				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
					</p>
					<span class="s-text9">
						Photo by @nancyward
					</span>
				</div>
			</a>
		</div>
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-13.jpg" alt="IMG-INSTAGRAM">
			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>
				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
					</p>
					<span class="s-text9">
						Photo by @nancyward
					</span>
				</div>
			</a>
		</div>
		<!-- Block4 -->
		<div class="block4 wrap-pic-w">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gallery-15.jpg" alt="IMG-INSTAGRAM">
			<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
				<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
					<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
					<span class="p-t-2">39</span>
				</span>
				<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
					<p class="s-text10 m-b-15 h-size1 of-hidden">
						Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
					</p>
					<span class="s-text9">
						Photo by @nancyward
					</span>
				</div>
			</a>
		</div>
	</div>
</section>
<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
	<div class="flex-w p-l-15 p-r-15">
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
			Free Delivery Worldwide
			</h4>
			<a href="#" class="s-text11 t-center">
				Click here for more info
			</a>
		</div>
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
			<h4 class="m-text12 t-center">
			30 Days Return
			</h4>
			<span class="s-text11 t-center">
				Simply return it within 30 days for an exchange.
			</span>
		</div>
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
			Store Opening
			</h4>
			<span class="s-text11 t-center">
				Shop open from Monday to Sunday
			</span>
		</div>
	</div>
</section>
<?php get_footer(); ?>
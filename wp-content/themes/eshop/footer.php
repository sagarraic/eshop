<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
			GET IN TOUCH
			</h4>
			<div>
				<p class="s-text7 w-size27">
					“We Help, You Grow"
					Our vision to make entrepreneurs, businesses, and small firms grow with an integration of varieties of application and platforms.
				</p>
				<p class="s-text7 w-size27">
					Feel Free to contact us at
				</p>
				<p class="s-text7 w-size27">
					Dhobighat, Lalitpur, Nepal
				</p>
				<p class="s-text7 w-size27">
					Call 982-3573261 
				</p>
				<div class="flex-m p-t-30">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
			</div>
		</div>
		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
			Categories
			</h4>
			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Men
					</a>
				</li>
				<li class="p-b-9">
					<a href="<?php echo get_site_url(); ?>/test" class="s-text7">
						Women
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Dresses
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Sunglasses
					</a>
				</li>
			</ul>
		</div>
		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
			Links
			</h4>
			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Search
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						About Us
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Contact Us
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>
			</ul>
		</div>
		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
			Help
			</h4>
			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Track Order
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Shipping
					</a>
				</li>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						FAQs
					</a>
				</li>
			</ul>
		</div>
		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
			Newsletter
			</h4>
			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="youremail@example.com">
					<span class="effect1-line"></span>
				</div>
				<div class="w-size2 p-t-20">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
					Subscribe
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="t-center p-l-15 p-r-15">
		<a href="#">
			<img class="h-size2" src="<?php echo get_template_directory_uri(); ?>/images/icons/paypal.png" alt="IMG-PAYPAL">
		</a>
		<a href="#">
			<img class="h-size2" src="<?php echo get_template_directory_uri(); ?>/images/icons/visa.png" alt="IMG-VISA">
		</a>
		<div class="t-center s-text8 p-t-20">
			Copyright © 2019 All rights reserved. | This template is made by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://alpastechonology.com" target="_blank">Alpas Technology Pvt. Lmd.</a>
		</div>
	</div>
</footer>
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>
<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>
<?php wp_footer(); ?>
<script type="text/javascript">
	$(".selection-1").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect2')
	});
</script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});
	$('.block2-btn-addwishlist').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>

</body>
</html>
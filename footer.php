			

			<!-- Leave Message -->
			<div id="footer"></div>
			<section class="write-message-footer section py-5 bg-default mx-5">
				<h2 class="w-100 text-center oh-desktop rubik-font pb-4" style="font-size: 40px; font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp" style="visibility: hidden; animation-name: none;">ОСТАВИТЬ СООБЩЕНИЕ</span></h2>
				<div class="container">
					<input id="name" type="hidden" value="<?php echo the_title(); ?>">
					<?php echo do_shortcode('[contact-form-7 id="55" title="Форма обратной связи"]'); ?>
				</div>
				
			</section>

			<!-- Page Footer-->
			<footer class="section footer-classic context-dark footer-classic-2">
				<div class="footer-classic-content py-5">
					<div class="container py-3">
						<div class="row row-50 row-lg-0 no-gutters">

							<div class="col-sm-6 col-lg-6 wow fadeInRight" style="font-weight: normal; font-size: 14px;" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
								<p class="mb-4">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-map.svg" alt="">
									<span class="ml-2">г.Санкт-Петербург, ул. Краснопутиловская 67.</span>
								</p>
								<p class="mb-4">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">
									<a style="color: inherit;" class="ml-2" href="mailto:info@duga24.ru">info@duga24.ru</a>
								</p>
								<p class="mb-4">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.svg" alt="">
									<a style="color: inherit;" href="tel:+7 (812) 426-11-36" class="ml-2">+7 (812) 426-11-36 <br></a>
									<a style="color: inherit;margin-left: 26.5px" href="tel:+7 (911) 150-55-55">+7 (911) 150-55-55</a>
								</p>
								<p class="mb-5">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-vk.svg" alt="">
									<a style="color: inherit;" href="//vk.com/duga24" target="_blank" class="ml-2">duga24</a>
								</p>
								<p class="mt-5">
									<span class="ml-0">© 2019 ИП Курицын О.В. Все права защищены.</span>
								</p>
							</div>

							<div class="col-lg-6">
								<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A242f381ad36972e108a5e249cfdccfbeb99bee62371338591e2ed458e28fa9a6&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
							</div>

						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- Global Mailform Output-->
		<div class="snackbars" id="form-output-global"></div>
		<!-- Javascript-->
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/core.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

		<script>
			$('#order_button').click(function(){
				var name = $('#name').val();
				$('#serv').val(name);
			});
		</script>

		<script>
			  	$('.slider-single').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  arrows: false,
				  fade: true,
				  prevArrow: '<button type="button" class="slick-prev slick-arrow" style=""></button>',
				  nextArrow: '<button type="button" class="slick-next slick-arrow" style=""></button>',
				  asNavFor: '.slider-single-nav',
				  focusOnSelect: true
				});
				$('.slider-single').find('.slick-slide').on("click", function(){
					$('.slider-single').slick("slickNext");
				});
				$('.slider-single-nav').slick({
				  slidesToShow: 4,
				  slidesToScroll: 1,
				  asNavFor: '.slider-single',
				  focusOnSelect: true
				});
			</script>
		

		<?php wp_footer(); ?>
</body>

</html>
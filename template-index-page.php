<?php 

/*
Template name: Главная страница
Template Post Type: page
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

 <?php get_header(); ?>
 
			<!-- Swiper-->
			<section class="section swiper-container swiper-slider swiper-slider-2 swiper-container-horizontal swiper-container-fade" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
				<div class="swiper-wrapper text-sm-left" style="transition-duration: 0ms;">

				<?php $iteratorForSlides = 0; ?>
				<?php $services = new WP_Query(array('post_type'=>'services')); ?>
				<?php if ( $services->have_posts() ) :  while ( $services->have_posts() ) : $services->the_post(); ?>

				<?php $servicesImageForMainPage = CFS()->get('servicesImageForMainPage'); ?>

					<div class="swiper-slide context-dark" data-slide-bg="<?php echo $servicesImageForMainPage; ?>" style="background-color: rgba(3, 23, 41, 0.5); background-image: url(&quot;<?php echo $servicesImageForMainPage; ?>&quot;); background-blend-mode: overlay; background-size: cover; width: 1203px; transform: translate3d(-1203px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="<?php echo $iteratorForSlides; ?>">
						<div class="swiper-slide-caption section-md">
							<div class="container">
								<div class="row">
									<div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
										<h3 class="oh swiper-title" style="font-weight: 500;"><span class="rubik-font d-inline-block not-animated" data-caption-animate="slideInUp" data-caption-delay="0"><?php echo the_title(); ?></span></h3>
										<a style="border-radius: 10px;" class="rubik-font button button-lg button-primary button-winona button-shadow-2 not-animated" href="<?php echo the_permalink(); ?>" data-caption-animate="fadeInUp" data-caption-delay="300">
											<div class="content-original">Читать далее</div>
											<div class="content-dubbed">Читать далее</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

			<?php $iteratorForSlides++; ?>
			<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_query(); ?>

				<!-- Swiper Pagination-->
				<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" data-bullet-custom="true"><span class="swiper-pagination-bullet swiper-pagination-bullet-active">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span><span class="swiper-pagination-bullet">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span><span class="swiper-pagination-bullet">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span></div>
				<!-- Swiper Navigation-->
				<div class="swiper-button-prev">
					<div class="preview">
						<div class="preview__img" style="background-color: rgba(3, 23, 41, 0.5); background-blend-mode: overlay;"></div>
					</div>
					<div class="swiper-button-arrow"></div>
				</div>
				<div class="swiper-button-next">
					<div class="swiper-button-arrow"></div>
					<div class="preview">
						<div class="preview__img" style="background-color: rgba(3, 23, 41, 0.5); background-blend-mode: overlay;"></div>
					</div>
				</div>
			</section>

			<!-- Offers -->
			<section class="section section-md bg-light-blue-100 context-dark text-md-left section-relative">
				<div class="container">
					<div class="text-center pb-4">
						<h3 class="oh-desktop" style="font-weight: 500;"><span class="d-inline-block wow slideInDown rubik-font" style="visibility: hidden; animation-name: none;">Преимущества</span></h3>
					</div>	
					<div class="row row-40 row-lg-50 row-xl-60">
						<div class="col-sm-6 col-lg-4">
							<article class="box-icon-classic">
								<div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
									<div class="unit-left pt-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-wallet.svg" alt="">
									</div>
									<div class="unit-body">
										<h5 class="box-icon-classic-title rubik-font">Доступная стоимость металлоконструкций</h5>
										<p class="box-icon-classic-text text-white">
											Мы выполняем весь цикл<br>
											работ на своих мощностях<br>
											и без привлечения сторонних<br>
											организаций.
										</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-6 col-lg-4">
							<article class="box-icon-classic">
								<div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
									<div class="unit-left pt-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-wrench.svg" alt="">
									</div>
									<div class="unit-body">
										<h5 class="box-icon-classic-title rubik-font">Изготовление любого изделия на заказ</h5>
										<p class="box-icon-classic-text text-white">
											Мы можем изготовить как<br>
											типовое изделие, так и<br>
											разработать индивидуальный<br>
											проект с нуля или доработать<br>
											имеющийся.
										</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-6 col-lg-4">
							<article class="box-icon-classic">
								<div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
									<div class="unit-left pt-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-time.svg" alt="">
									</div>
									<div class="unit-body">
										<h5 class="box-icon-classic-title rubik-font">Соблюдение сроков изготовления</h5>
										<p class="box-icon-classic-text text-white">
											Мы ответственно относимся<br>
											к соблюдению сроков<br>
											исполнения заказов, поэтому<br>
											наряду с контролем качества<br>
											уделяем особое внимание<br>
											планированию.
										</p>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

			<!-- Projects -->
			<section class="section section-xl bg-default text-center">
				<div class="container">
					<h3 class="oh-desktop pb-3" style="font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp rubik-font" style="visibility: hidden; animation-name: none;">Проекты</span></h3>
				</div>
				<div class="container-fluid container-inset-0">
					<div class="row row-30 row-desktop-8 gutters-8 hoverdir">
						<?php $iteratorForProjects = 0; ?>
						<?php $projects = new WP_Query(array('post_type'=>'projects')); ?>
						<?php if ( $projects->have_posts() ) :  while ( $projects->have_posts() ) : $projects->the_post(); ?>
							<div class="col-sm-6 col-lg-4 col-xxl-3">
								<div class="oh-desktop">
									<article class="thumbnail thumbnail-modern wow <?php echo ($iteratorForProjects%2 == 0 ? 'slideInUp' : 'slideInDown') ?> hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption" style="visibility: hidden; animation-name: none;">
										<a class="thumbnail-modern-figure" href="<?php echo the_permalink(); ?>" >
											<img src="<?php echo CFS()->get('projectsMainImage'); ?>" alt="" style="width: 100%; height: 355px; object-fit: cover;">
										</a>
										<div class="thumbnail-modern-caption">
											<h5 class="thumbnail-modern-title"><a href="project-page.html"><?php echo the_title(); ?></a></h5>
										</div>
									</article>
								</div>
							</div>
						<?php $iteratorForProjects++; ?>
						<?php endwhile ?>
						<?php endif ?>
						<?php wp_reset_query(); ?>
					</div>
					<div class="text-center pt-5 mt-4 wow slideInUp">
						<a style="border-radius: 10px;" class="rubik-font button button-lg button-primary button-winona" href="/projects" data-caption-animate="fadeInUp" data-caption-delay="300">
							<div class="content-original">ВСЕ ПРОЕКТЫ</div>
							<div class="content-dubbed">ВСЕ ПРОЕКТЫ</div>
						</a>
					</div>
				</div>
			</section>

			<!-- Goods -->
			<section class="section section-lg bg-default" style="background-color: #F5F4F4;">
				<div class="container">
					<h3 class="oh-desktop pb-3 rubik-font" style="font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp" style="visibility: hidden; animation-name: none;">Популярные товары</span></h3>
					<div class="row row-40">
						<div class="owl-carousel owl-style-3 dots-style-2 owl-loaded owl-drag" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-autoplay="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" style="">
							<div class="owl-stage-outer">
								<div class="owl-stage" style="transform: translate3d(-2800px, 0px, 0px); transition: all 0.25s ease 0s; width: 4800px;">
									<?php $goods = new WP_Query(array('post_type'=>'goods')); ?>
									<?php if ( $goods->have_posts() ) :  while ( $goods->have_posts() ) : $goods->the_post(); ?>
										<div class="owl-item" style="width: 370px; margin-right: 30px;">
											<article class="services-classic"><a class="services-classic-figure" href="<?php echo the_permalink(); ?>"><img src="<?php echo CFS()->get('goodsImage'); ?>" alt="" style="height: 274px; width: 100%; object-fit: cover;"></a>
												<div class="services-classic-caption">
													<div class="unit">
														<div class="unit-left">
															<span style="font-weight: bold; font-size: 19px; color: #000;"><?php echo CFS()->get('goodsPrice'); ?> ₽</span>
														</div>
														<div class="unit-body">
															<p class="services-classic-title" style="color: #000; font-size: 16px;"><?php echo the_title(); ?></p>
															<p class="services-classic-text mt-0">Артикул: <?php echo CFS()->get('goodsArticle'); ?></p>
														</div>
													</div>
												</div>
											</article>
										</div>
									<?php endwhile ?>
									<?php endif ?>
									<?php wp_reset_query(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Video -->
			<section class="section section-lg bg-default">
				<div class="container">
					<h3 class="oh-desktop pb-5 rubik-font" style="font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp" style="visibility: hidden; animation-name: none;">Видео</span></h3>
					<?php echo CFS()->get('mainPageVideo'); ?>
				</div>
			</section>

			<!-- Feedback -->
			<h3 class="oh-desktop pt-5 rubik-font text-white" style="font-weight: 500; background-color: #3D668B;"><span class="d-inline-block wow slideInUp" style="visibility: hidden; animation-name: none;">Отзывы</span></h3>
			<section class="section swiper-container swiper-slider swiper-slider-2 swiper-container-horizontal swiper-container-fade" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade" style="background-color: #3D668B; min-height: 15vh; padding-bottom: 22px;">
				
				<div class="swiper-wrapper text-sm-left" style="transition-duration: 0ms;">
					<?php $mainPageFeedbacks = CFS()->get('mainPageFeedbacks'); ?>
					<?php foreach ($mainPageFeedbacks as $mainPageFeedback): ?>
						<div class="swiper-slide context-dark" style="background-size: cover; width: 1203px; transform: translate3d(-1203px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="<?php echo $iteratorForSlides; ?>">
							<div class="swiper-slide-caption section-md">
								<div class="container">
									<div class="row">
										<div class="col-sm-1 col-md-2 col-lg-3"></div>
										<div class="col-sm-10 col-md-8 col-lg-6">
											<em class="oh swiper-title" style="font-weight: 300;"><span class="d-inline-block not-animated" data-caption-animate="" data-caption-delay="0">
												<p style="font-weight: lighter;"><?php echo $mainPageFeedback['mainPageFeedbackText'] ?></p>
												<p class="mt-3" style="font-size: 18px; font-weight: normal; font-style: normal;"><?php echo $mainPageFeedback['mainPageFeedbackName'] ?></p>
												<p class="mt-0" style="font-size: 12px; font-style: normal; font-weight: normal; color: #FCBE00;"><?php echo $mainPageFeedback['mainPageFeedbackCompany'] ?></p>
											</span></em>
										</div>
										<div class="col-sm-1 col-md-2 col-lg-3"></div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<!-- Swiper Pagination-->
					<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" data-bullet-custom="true"><span class="swiper-pagination-bullet swiper-pagination-bullet-active">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span><span class="swiper-pagination-bullet">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span><span class="swiper-pagination-bullet">  <svg width="100%" height="100%" viewBox="0 0 24 24">    <circle class="swiper-bullet-line" cx="12" cy="12" r="10"></circle>    <circle class="swiper-bullet-line-2" cx="12" cy="12" r="10"></circle>  </svg></span></div>
					<!-- Swiper Navigation-->
					<div class="swiper-button-prev">
						<div class="preview">
							<div class="preview__img" style="background-color: rgba(3, 23, 41, 0.5); background-blend-mode: overlay;"></div>
						</div>
						<div class="swiper-button-arrow"></div>
					</div>
					<div class="swiper-button-next">
						<div class="swiper-button-arrow"></div>
						<div class="preview">
							<div class="preview__img" style="background-color: rgba(3, 23, 41, 0.5); background-blend-mode: overlay;"></div>
						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
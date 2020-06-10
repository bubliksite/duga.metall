<?php 

/*
Template name: Товары
Template Post Type: page
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

<?php get_header(); ?>
 
<section class="bg-gray-7">
	<div class="breadcrumbs-custom box-transform-wrap context-dark">
		<div class="container">
			<h3 class="breadcrumbs-custom-title rubik-font" style="font-weight: 500;"><?php the_title(); ?></h3>
			<div class="breadcrumbs-custom-decor"></div>
		</div>
		<div class="box-transform" style="background-image: url(//duga.bublik.site/wp-content/themes/duga.metall/images/pattern-metal-pipes-grid-35543.jpg);"></div>
	</div>
	<div class="container">
		<ul class="breadcrumbs-custom-path">
			<li><a href="/">Главная</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</div>
</section>
<section class="section section-lg bg-default">
				<div class="container">
					<div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
						
						<div class="col-lg-7 col-xl-8">
							<!-- Tab panes-->
							<div class="tab-content tab-content-1">
								<div class="tab-pane fade active show" id="all_goods">
									<div class="row">
									<?php $goods = new WP_Query(array('post_type'=>'goods')); ?>
									<?php if ( $goods->have_posts() ) :  while ( $goods->have_posts() ) : $goods->the_post(); ?>
										<article class="services-classic col-lg-6 col-md-4 mb-3" style="margin-left: 0; margin-right: 0; max-width: 100%;">
											<a class="services-classic-figure" href="<?php echo the_permalink(); ?>" style="height: 274px;">
												<img src="<?php echo CFS()->get('goodsImage'); ?>" alt="" style="object-fit: cover; height: 274px; width: 100%;">
											</a>
												<div class="services-classic-caption" style="padding-top: 10px;">
													<div class="unit">
														<div class="unit-left">
															<span style="font-weight: bold; font-size: 16px; color: #000;"><?php echo CFS()->get('goodsPrice'); ?> ₽</span>
														</div>
														<div class="unit-body" style="width: 100%;">
															<p class="services-classic-title" style="min-height: 50px; color: #000; font-size: 16px; max-width: 100%;"><?php echo the_title(); ?></p>
															<p class="services-classic-text mt-0 mb-3" style="color: #000; font-size: 12px; max-width: 100%;">Артикул: <?php echo CFS()->get('goodsArticle'); ?></p>
															<a class="button button-sm button-primary button-winona mt-0" style="width: 100%; border-radius: 10px;" href="<?php echo the_permalink(); ?>">Заказать</a>
														</div>
													</div>
												</div>
											</article>
									<?php endwhile ?>
									<?php endif ?>
									<?php wp_reset_query(); ?>
									</div>
								</div>

								<?php $categories = get_terms('goodscategory', 'orderby=id&hide_empty=0'); ?>
								<?php foreach ($categories as $category): ?>

								<div class="tab-pane fade" id="<?php echo $category->slug; ?>">
									<div class="row">
									<?php $slug = $category->slug; ?>
									<?php $goods = new WP_Query(array('post_type'=>'goods', 'goodscategory'=>$slug)); ?>
									<?php if ( $goods->have_posts() ) :  while ( $goods->have_posts() ) : $goods->the_post(); ?>
										
										<article class="services-classic col-lg-6 col-md-4 mb-3" style="margin-left: 0; margin-right: 0; max-width: 100%;">
											<a class="services-classic-figure" href="<?php echo the_permalink(); ?>" style="max-height: 274px;">
												<img src="<?php echo CFS()->get('goodsImage'); ?>" alt="" style="object-fit: cover; height: 274px; width: 100%;">
											</a>
												<div class="services-classic-caption" style="padding-top: 10px;">
													<div class="unit">
														<div class="unit-left">
															<span style="font-weight: bold; font-size: 16px; color: #000;"><?php echo CFS()->get('goodsPrice'); ?> ₽</span>
														</div>
														<div class="unit-body" style="width: 100%;">
															<p class="services-classic-title" style="min-height: 50px; color: #000; font-size: 16px; max-width: 100%;"><?php echo the_title(); ?></p>
															<p class="services-classic-text mt-0" style="color: #000; font-size: 12px; max-width: 100%;">Артикул: <?php echo CFS()->get('goodsArticle'); ?></p>
															<a class="button button-sm button-primary button-winona mt-0" style="width: 100%; border-radius: 10px;" href="<?php echo the_permalink(); ?>">Заказать</a>
														</div>
													</div>
												</div>
											</article>
									<?php endwhile ?>
									<?php endif ?>
									<?php wp_reset_query(); ?>
									</div>
								</div>

								<?php endforeach ?>
								
							</div>
						</div>
						<div class="col-lg-5 col-xl-4">
							<ul class="nav list-category list-category-down-md-inline-block" style="color: #787878;">
								<li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
									<a class="active" href="#all_goods" data-toggle="tab">Все товары</a>
								</li>

								<?php $categories = get_terms('goodscategory', 'orderby=id&hide_empty=0'); ?>
								<?php foreach ($categories as $category): ?>

									<li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
										<a href="#<?php echo $category->slug; ?>" data-toggle="tab" class=""><?php echo $category->name; ?></a>
									</li>

								<?php endforeach ?>

							</ul>
						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
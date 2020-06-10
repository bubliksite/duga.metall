<?php 

/*
Template name: Услуги
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
			<div class="box-transform" style="background-image: url(//duga.bublik.site/wp-content/themes/duga.metall/images/bg-typography.jpg);"></div>
		</div>
		<div class="container">
			<ul class="breadcrumbs-custom-path">
				<li><a href="/">Главная</a></li>
				<li class="active"><?php the_title(); ?></li>
			</ul>
		</div>
	</section>
	<section class="section section-lg bg-default py-2 mt-5">
		<div class="container">
			<div class="row">
				<?php $iteratorForServices = 1; ?>
				<?php $services = new WP_Query(array('post_type'=>'services')); ?>
				<?php if ( $services->have_posts() ) :  while ( $services->have_posts() ) : $services->the_post(); ?>
					<article class="col-lg-4 col-md-6 col-sm-12 services-creative mb-3 px-0">
						<a href="<?php echo the_permalink(); ?>" class="services-creative-figure stretched-link">
							<img src="<?php echo CFS()->get('services_image'); ?>" alt="" width="370" height="230">
						</a>
						<div class="services-creative-caption">
							<h5 class="services-creative-title rubik-font">
								<a href="<?php echo the_permalink(); ?>" style="white-space: break-spaces;"><?php the_title(); ?></a>
							</h5>	
							<p class="services-creative-text"><?php echo CFS()->get('services_description'); ?></p><span class="services-creative-counter box-ordered-item"><?php echo($iteratorForServices < 10 ? '0'. $iteratorForServices : $iteratorForServices); ?></span>
						</div>
					</article>
					<?php $iteratorForServices++; ?>
				<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
<?php 

/*
Template name: Проекты
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
			<div class="box-transform" style="background-image: url(//duga.bublik.site/wp-content/themes/duga.metall/images/man-in-yellow-safety-vest-climbing-on-ladder-159358.jpg);"></div>
		</div>
		<div class="container">
			<ul class="breadcrumbs-custom-path">
				<li><a href="/">Главная</a></li>
				<li class="active"><?php the_title(); ?></li>
			</ul>
		</div>
	</section>
	<section class="section section-lg bg-default py-2 mt-5">
		<div class="container-fluid">
			<div class="row row-30 row-desktop-8 gutters-8 hoverdir">
				<?php $iteratorForProjects = 0; ?>
				<?php $projects = new WP_Query(array('post_type'=>'projects')); ?>
				<?php if ( $projects->have_posts() ) :  while ( $projects->have_posts() ) : $projects->the_post(); ?>
					<div class="col-sm-6 col-lg-4 col-xxl-3">
						<div class="oh-desktop">
							<article class="thumbnail thumbnail-modern wow <?php echo ($iteratorForProjects%2 == 0 ? 'slideInUp' : 'slideInDown') ?> hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption" style="visibility: hidden; animation-name: none;">
								<a class="thumbnail-modern-figure" href="<?php echo the_permalink(); ?>" >
									<img src="<?php echo CFS()->get('projectsMainImage'); ?>" alt="" style="height: 355px; width: 100%; object-fit: cover;">
								</a>
								<div class="thumbnail-modern-caption">
									<h5 class="thumbnail-modern-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
								</div>
							</article>
						</div>
					</div>
				<?php $iteratorForProjects++; ?>
				<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
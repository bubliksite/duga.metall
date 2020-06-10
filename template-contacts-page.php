<?php 

/*
Template name: Контакты
Template Post Type: page
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

 <style>
 	.write-message-footer {
 		display: none;
 	}
 </style>

<?php get_header(); ?>

<section class="bg-gray-7">
	<div class="breadcrumbs-custom box-transform-wrap context-dark">
		<div class="container">
			<h3 class="breadcrumbs-custom-title rubik-font" style="font-weight: 500;"><?php the_title(); ?></h3>
			<div class="breadcrumbs-custom-decor"></div>
		</div>
		<div class="box-transform" style="background-image: url(//duga.bublik.site/wp-content/themes/duga.metall/images/contact-bg.jpg);"></div>
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
		<div class="row">
			<div class="col-lg-7">
				<h2 class="w-100 oh-desktop pb-2 text-left" style="font-size: 40px; font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp rubik-font" style="visibility: hidden; animation-name: none;">ОСТАВИТЬ СООБЩЕНИЕ</span></h2>
				<div class="">
					<?php echo do_shortcode('[contact-form-7 id="55" title="Форма обратной связи"]'); ?>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4 text-left">
				<h2 class="w-100 oh-desktop rubik-font pb-2 text-left" style="font-size: 40px; font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp" style="visibility: hidden; animation-name: none;">&nbsp;</span></h2>
				<p class="rubik-font mb-3 mt-4" style="font-weight: bold; font-size: 14px; color: #343434;">Реквизиты</p>
				<p style="font-size: 11px; color: #000; letter-spacing: 0;"><?php echo CFS()->get('contacts_rekvizit') ?></p>
				<p class="rubik-font mb-3 mt-5" style="font-weight: bold; font-size: 14px; color: #343434;">Контакты</p>
				<p style="font-size: 11px; color: #000; letter-spacing: 0;"><?php echo CFS()->get('contacts_contact') ?></p>
			</div>
		</div>	
	</div>
</section>

<?php get_footer(); ?>
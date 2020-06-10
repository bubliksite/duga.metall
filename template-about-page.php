<?php 

/*
Template name: О компании
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
			<div class="col-lg-6 text-left oh-desktop">
				<?php echo CFS()->get('columnFirst'); ?>
				<!-- <h2 class="w-100 oh-desktop pb-2 text-left" style="font-size: 36px; font-weight: 500; color: #23415E;"><span class="d-inline-block wow slideInUp rubik-font" style="visibility: hidden; animation-name: none;">Изготовление металлоконструкций любой сложности</span></h2>
				<p class="font-weight-bold text-uppercase pt-3" style="color: #23415E; font-size: 18px;">Компания DUGA производит металлоконструкции любых форм и&nbsp;видов.</p>
				<p class="py-3" style="color: #343434; text-align: justify !important;">
					Наша компания уже&nbsp;несколько лет создает металлические каркасы, модернизирует готовые элементы, производит любые комплектующие под&nbsp;заказ в&nbsp;соответствии со&nbsp;всеми нормативными документами. Мы являемся предприятием со&nbsp;своим собственным производством, где&nbsp;есть все&nbsp;необходимое оборудование для&nbsp;изготовления металлоконструкций любой сложности – как&nbsp;по&nbsp;типовым проектам, так&nbsp;и&nbsp;по&nbsp;индивидуальным заказам.
				</p>
				<p class="font-weight-bold text-uppercase pt-3" style="color: #23415E; font-size: 18px;">Обратившись в&nbsp;компанию DUGA, вы&nbsp;получаете по&nbsp;выгодным ценам высокое качество металлоконструкций, изготовленных точно в&nbsp;срок.</p> -->
			</div>
			<div class="col-lg-6 text-left oh-desktop">
				<?php echo CFS()->get('columnSecond'); ?>
				<!-- <p class="font-weight-bold text-uppercase pt-3" style="color: #23415E; font-size: 18px;">Мы производим</p>
				<ul>
					<li class="mt-5"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/icon-list.svg" alt="">металлические каркасы подсобных сооружений;</li>
					<li class="mt-5"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/icon-list.svg" alt="">металлоконструкции каркасов зданий;</li>
					<li class="mt-5"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/icon-list.svg" alt="">металлоконструкции спортивно-зрелищных сооружений;</li>
					<li class="mt-5"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/icon-list.svg" alt="">строительные металлические конструкции общего назначения;</li>
					<li class="mt-5"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/icon-list.svg" alt="">иные металлоконструкции (нестандартные металлические конструкции, заборы, ворота, ограждения лестничных маршей, ограждения ската крыш, ограждения крыши, металлические ограждения).</li>
				</ul> -->
			</div>
		</div>	
	</div>
</section>

<?php get_footer(); ?>
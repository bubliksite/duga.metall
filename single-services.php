<?php 
/*
Template name: Услуга
Template Post Type: services
Description: Тема страницы "Услуга"

*/
?>

<?php get_header(); ?>

<section class="bg-gray-7">
	<div class="breadcrumbs-custom box-transform-wrap context-dark">
		<div class="container">
			<h3 class="breadcrumbs-custom-title rubik-font"><?php the_title(); ?></h3>
			<div class="breadcrumbs-custom-decor"></div>
		</div>
		<div class="box-transform" style="background-image: url(<?php echo CFS()->get('servicesImageForMainPage'); ?>);"></div>
	</div>
	<div class="container">
		<ul class="breadcrumbs-custom-path">
			<li><a href="/">Главная</a></li>
			<li><a href="/services">Услуги</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</div>
</section>
<section class="section section-lg bg-default text-md-left">
		<div class="container">
		  <div class="row row-60 flex-lg-row-reverse">
			<div class="col-lg-12">
			  <div class="project-page">
				<h4 class="rubik-font" style="font-size: 24px; font-weight: 500; letter-spacing: 80%; color: #23415E;"><?php echo the_title(); ?></h4>
				<p style="color: #000; text-align: justify;"><?php echo CFS()->get('services_description'); ?></p>
				<p style="color: #000; text-align: justify;"><?php echo CFS()->get('service_description'); ?></p>
				<div class="group-sm group-middle" style="color: #787878;"><span class="project-page-social-title" style="color: #787878";>Поделиться</span>
				  <div>
					<ul class="list-inline project-page-social-list">
						<li><a style="color: #787878;" class="icon mdi mdi-vk" target="_blank" href="https://vk.com/share.php?url=<?php echo the_permalink(); ?>"></a></li>
						<li><a style="color: #787878;" class="icon mdi mdi-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"></a></li>
					</ul>
				  </div>
				</div>
				<a style="border-radius: 10px;" class="rubik-font button button-lg button-primary button-winona" href="#footer" data-caption-animate="fadeInUp" data-caption-delay="300">
					<div class="content-original">Связаться</div>
					<div class="content-dubbed">Связаться</div>
				</a>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

<?php get_footer(); ?>
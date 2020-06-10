<?php 
/*
Template name: Проект
Template Post Type: projects
Description: Тема страницы "Проект"

*/
?>

<?php get_header(); ?>

<section class="bg-gray-7">
	<div class="breadcrumbs-custom box-transform-wrap context-dark">
		<div class="container">
			<h3 class="breadcrumbs-custom-title rubik-font"><?php the_title(); ?></h3>
			<div class="breadcrumbs-custom-decor"></div>
		</div>
		<div class="box-transform" style="background-image: url(<?php echo CFS()->get('projectsMainImage'); ?>);"></div>
	</div>
	<div class="container">
		<ul class="breadcrumbs-custom-path">
			<li><a href="/">Главная</a></li>
			<li><a href="/projects">Проекты</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</div>
</section>
<section class="section section-lg bg-default text-md-left">
		<div class="container">
		  <div class="row row-60 flex-lg-row-reverse">
			<div class="col-lg-6 col-xl-7">
			 <div class="slider-single">
			 	<?php $project_gallery = CFS()->get('project_gallery'); ?>
			 		<?php foreach ($project_gallery as $project_image): ?> 	
					 	<div style="">
					 		<img src="<?php echo $project_image['project_image'] ?>" alt="" style="object-fit: cover;height: 500px;">
					 		<div class="slick-project-caption">
		                    	<div class="slick-project-title text-uppercase"><?php echo ($project_image['project_image_name'] ? $project_image['project_image_name'] : '<br>'); ?></div>
		                    </div>
					 	</div>
				 	<?php endforeach ?>
			 </div>
			 <div class="slider-single-nav mt-3">
			 	<?php foreach ($project_gallery as $project_image): ?> 	
				 	<div class="px-1"><img src="<?php echo $project_image['project_image'] ?>" alt="" style="height: 90px; width: 100%; object-fit: cover;"></div>
			 	<?php endforeach ?>
			 </div>
			
			</div>
			<div class="col-lg-6 col-xl-5">
			  <div class="project-page">
				<h4 class="rubik-font" style="font-size: 24px; font-weight: 500; letter-spacing: 80%; color: #23415E;"><?php echo the_title(); ?></h4>
				<p style="color: #000; text-align: justify;"><?php echo CFS()->get('project_description'); ?></p>
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
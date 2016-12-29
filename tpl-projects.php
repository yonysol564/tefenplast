<?php
/* Template Name: Projects */
get_header();
?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="home_services about_sec all_service">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="row service_row">
		<div class="large-12 column">
			<h1><?php get_page_title(); ?></h1>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
	<div class="row services_row">
		<?php  //et_template_part('inc/services','items'); ?>
	</div>
</section>
<?php

while ( have_posts() ) : the_post(); ?>

<?php
endwhile;
get_sidebar();
get_footer();

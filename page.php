<?php
	get_header();
	$about_main_img   		= get_field('about_main_img');
	$contact_form_general   = get_field('contact_form_general','option');
?>
<?php

while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="about_sec">
	<div class="row">
		<div class="large-9 column about_col_9">
			<div>
				<h1><?php get_page_title(); ?></h1>
			</div>
			<div class="about_content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="large-3 column about_col_3">
			<?php get_sidebar("page"); ?>
		</div>
	</div>
</section>

<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>

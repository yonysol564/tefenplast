<?php
	get_header();
	$page_banner     	 = get_field('page_banner');
	$page_banner_text    = get_field('page_banner_text');
?>
<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="about_sec sing_ser_sec">
	<div class="row">
		<div class="large-9 column about_col_9">
			<div>
				<h1><?php get_page_title(); ?></h1>
			</div>
			<div class="about_content">
				<?php the_content(); ?>
			</div>
			<div class="wrap_service_slider">
				<div class="service_slider">
					<?php if( have_rows('service_slider') ): ?>
					    <?php while ( have_rows('service_slider') ) : the_row();
					        $img_slider= get_sub_field('service_slider_img');
					        ?>
								<div class="slider_inner" style="background-image: url( <?php echo $img_slider['url']; ?>);">

								</div>
					    <?php endwhile; ?>
					<?php endif;?>
				</div>
			</div>

		</div>
		<div class="large-3 column about_col_3">
			<?php get_sidebar("page"); ?>
		</div>
	</div>
</section>

<?php
endwhile; // End of the loop.
get_footer();
?>

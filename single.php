<?php
	get_header();
	$page_banner     	 = get_field('page_banner');
	$page_banner_text    = get_field('page_banner_text');
	$about_main_img   	 = get_field('about_main_img');
?>
<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="about_sec">
	<div class="row">
		<div class="large-12 column">
			<h1><?php get_page_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="large-7 column">
			<div class="about_content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="large-5 column single_main_img">
			<img src="<?php echo $url; ?> " title="" alt="sfsf">
		</div>

	</div>
</section>

<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>

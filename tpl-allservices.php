<?php
/* Template Name: Services */
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
		<?php $posts_to_show = get_field('service_posts_to_show');
		foreach ($posts_to_show as $post) {
		?>
			<div class="large-4 column cat_col">
			<a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>">
				<div class="service_box">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div class="service_img" style="background-image: url( <?php echo $url; ?>);">

						<div class="abs_title">

							<div class="inner_title">
								<?php echo get_the_title($post->ID,$post); ?>
							</div>
							<div class="inner_description">
								<?php dynamic_excerpt(140); ?>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<?php
		}
		?>
	</div>
</section>
<?php

while ( have_posts() ) : the_post(); ?>

<?php
endwhile;
get_sidebar();
get_footer();

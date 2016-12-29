<?php
/* Template Name: Info */
get_header();
?>
<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>
<?php
while ( have_posts() ) : the_post(); ?>

<section class="info_sec">
	<div class="row">
		<div class="large-12 column">
			<h1><?php get_page_title(); ?></h1>
		</div>
	</div>
	<div class="row info_con_row">
		<div class="large-12 column">
			<div class="info_content"><?php the_content(); ?></div>
		</div>
	</div>

	<div class="row info_posts_row">

		<?php $info_show_posts = get_field('info_show_posts');

		foreach ($info_show_posts as $post) {
		?>
			<div class="large-4 column info_col">
				<a href="<?php echo get_permalink($post->ID); ?>" title="">
					<div class="info_box">
						<div class="info_box_title">
							<div class="inner_title">
								<?php echo get_the_title($post->ID); ?>
							</div>
						</div>
					    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<div class="box_detailes">
							<div class="box_img">
								<img src="<?php echo $url; ?>" title="" alt="">
							</div>
							<div class="box_excerpt">
								<?php dynamic_excerpt(300); ?>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="info_more">
							<span>מידע נוסף>></span>
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
endwhile; // End of the loop.
?>
<?php
get_sidebar();
get_footer();

<?php
/* Template Name: Homepage */
get_header();

get_template_part("inc/page-banner"); ?>

<section class="home_services">
	<div class="row">
		<div class="large-12 column">
			<?php $home_main_title = get_field('home_main_title'); ?>
				<?php if ($home_main_title)
				{
					echo $home_main_title;
				}
				?>
		</div>
	</div>

	<div class="row services_row">
		<?php get_template_part('inc/services','items'); ?>
	</div>
</section>
<?php

while ( have_posts() ) : the_post(); ?>
<?php
	$youtube_id = get_field('youtube_id');
 	$more_about_link = get_field('more_about_link');
  	$more_about_text = get_field('more_about_text');
?>
<section class="home_video_sec">
	<div class="row services_row">
		<div class="large-6 column">
			<div class="home_content">
				<?php the_content(); ?>
				<div class="more_about">
					<a href="<?php echo $more_about_link; ?>" title=""><?php echo $more_about_text; ?></a>
				</div>
			</div>
		</div>
		<div class="large-6 column">
			<iframe src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" width="471" height="310" frameborder="0" allowfullscreen>
            </iframe>
		</div>
</section>
<?php
endwhile;
get_sidebar();
get_footer();

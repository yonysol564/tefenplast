<?php
/* Template Name: Contact */
	get_header();
	$contact_form_page   = get_field('contact_form_page');
	$contact_info        = get_field('contact_page_info');
	$contact_form_title   = get_field('contact_form_title');
?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="contact_sec">
	<div class="row">
		<div class="large-12 column">
			<h1><?php get_page_title(); ?></h1>
		</div>
	</div>
	<div class="row contact_row">

		<div class="large-5 column">
			<div class="info_box">
				<?php echo $contact_info; ?>
			</div>
		</div>

		<div class="large-6 column end">
			<div class="contact_form">
				<div class="contact_form_title">
					<?php echo $contact_form_title; ?>
				</div>
				<?php echo do_shortcode($contact_form_page); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();

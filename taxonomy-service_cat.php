<?php
	get_header(); 
	$object = get_queried_object(); 
	$category_title = get_cat_name( $object->term_id );	  
	$category_desc = category_description( $object->term_id  );
	$page_banner     	 = get_field('page_banner');
	$page_banner_text    	 = get_field('page_banner_text');die('sdsd');
?>

<div class="page_banner" style="background-image: url( <?php echo $page_banner['url']; ?> );">  
	<div class="row">
		<div class="large-12 column page_banner_col">
			<div class="wrap_banner_text">	
				<div class="page_banner_text">
					<?php echo $page_banner_text; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('inc/breadcrumbs'); ?>

<div class="row">
	<div class="large-12 column">
		<div class="about_content">		
			<h1><?php echo $category_title; ?></h1>
		</div>
	</div>
</div>	

<div class="row">
	<div class="large-12 column">
		<div class="about_content">		
			<?php echo $category_desc; ?>
		</div>
	</div>
</div>	


<section class="services_sec cat_sec">
	<div class="row services_row cat_row">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="large-4 column cat_col">
			<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<div class="cat_img">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div><?php the_post_thumbnail(); ?></div>
				</div>
			</a>
			<div class="cat_info">
				<div class="cat_title"><?php the_title(); ?></div>
				<div class="cat_subtitle">
						<?php dynamic_excerpt(70); ?>
						<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
						 	<?php echo get_field('general_more_info','option'); ?>
						</a>
				</div>				
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</section>

<?php
get_sidebar();
get_footer();

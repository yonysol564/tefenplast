<?php get_header();  ?>
<?php $object = get_queried_object(); 
    //$page_banner = get_field('page_banner','category_'.$object->term_id) ? get_field('page_banner','category_'.$object->term_id): '';	
	$category_title = get_cat_name( $object->term_id );	  
	$category_desc = category_description( $object->term_id  );
	//$news_banner = $page_banner['sizes']['news_banner_img'];

	$page_banner     	 = get_field('page_banner');
	$page_banner_text    = get_field('page_banner_text');
	$about_main_img   = get_field('about_main_img');
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


<section class="cat_sec">	
	<div class="row cat_row">    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="large-4 column cat_col">
			<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<div class="cat_img">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div><?php the_post_thumbnail(); ?></div>

					<div class="share_sidebar_inner">
						<div>
							<a data-img="<?php echo $url; ?>" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink();?>&pubid=ra-5731a47f298c9820&ct=1&title=<?php the_title(); ?>&pco=tbxnj-1.0" target="_blank">
								<img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/facebook.png" border="0" alt="Facebook"/>
							</a>
						</div>
						<div>
							<a data-img="<?php echo $url; ?>" href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.addthis.com&pubid=ra-5731a47f298c9820&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank">
								<img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/twitter.png" border="0" alt="Twitter"/>
							</a>
						</div>
						<div>
							<a data-img="<?php echo $url; ?>" href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&v=300&url=http%3A%2F%2Fwww.addthis.com&pubid=ra-5731a47f298c9820&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank">
								<img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/addthis.png" border="0" alt="Addthis"/>
							</a>
						</div>
					</div>

				</div>
			</a>
			<div class="cat_info">
				<div class="cat_title"><?php the_title(); ?></div>
				<div class="cat_subtitle">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
							<?php echo get_field('general_more_info','option'); ?>
						</a>
				</div>				
			</div>
		</div>
		<?php endwhile;endif; ?>
	</div>
</section>
<?php
get_sidebar();
get_footer();

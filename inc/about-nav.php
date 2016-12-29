<?php 
if ( is_page() && $post->post_parent ) {
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
} else {			
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
}
?>
<div class="about_nav">
	<div class="row">
		<div class="large-12 column">
			<ul>
				<?php if ( is_page() && $post->post_parent ) : ?>

					<li class="">
						<a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
					</li>

				<?php else: ?>

					<li class="current_page_item">
						<a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
					</li>

				<?php endif; ?>		

				<?php echo $childpages; ?>
			</ul>
		</div>
	</div>
</div>
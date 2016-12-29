<?php
	$banner_autoplay = get_field('banner_autoplay');
	$page_slider = get_field('page_slider');
	$class = (is_home() || is_front_page()) ? "home_banner_wrap" : "page_banner_wrap";
?>

<div class="<?php echo $class;?>">
	<?php if( $page_slider ): ?>
			<?php foreach ($page_slider as $value)
			{
				$img_slider       =  $value['img_slider'];
		        $page_slider_text =  $value['page_slider_text'];
			?>
				<div class="bg_page" style="background-image: url( <?php echo $img_slider['url']; ?>);">
					<div class="row page_row_banner">
						<?php if(trim($page_slider_text)):?>
							<div class="text_rep">
								<?php echo $page_slider_text; ?>
							</div>
						<?php endif;?>
					</div>
				</div>
			<?php
			}
			?>
	<?php endif;?>
</div>
<script>
    <?php if( $banner_autoplay): ?>
        banner_autoplay = true;
    <?php else: ?>
        banner_autoplay = false;
    <?php endif; ?>
</script>

<div class="breadcrumbs_div">
	<div class="row">
		<div class="large-12 column">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php
				if(have_rows("breadcrumbs")){
					echo "<p id='breadcrumbs'>";
					$crumbs = array();
					while(have_rows("breadcrumbs")): the_row();
						$link = get_sub_field("link");
						$text = get_sub_field("title");
						ob_start();
						?>
						<span typeof="v:Breadcrumb">
							<?php if($link):?>
								<a href="http://tefenplast.devurl.net/" rel="v:url" property="v:title">
							<?php endif;?>
								<?php echo $text;?>
							<?php if($link):?>
								</a>
							<?php endif;?>
						</span>
					<?php
						$crumbs[] = ob_get_clean();
					endwhile;
					echo implode("&gt;",$crumbs);

					echo "</p>";
				}else if ( function_exists('yoast_breadcrumb') ) {
				     yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php 
	$cutomer_title    = get_field('cutomer_title' ,'option');
	$footer_copy    = get_field('footer_copy' ,'option');
	$footer_webbuild = get_field('footer_webbuild' ,'option');
	$footer_info = get_field('footer_info' ,'option');
	
?>
<footer>

	<section class="customer_sec">
		<div class="row">
			 <div class="large-12 column">
				<div>
					<span class="customers_title"><?php echo $cutomer_title; ?></span>
				</div>	
			 </div>
		</div>

		<div class="row">
			 <div class="large-12 column">
				<div class="customer_slider">

					<?php if( have_rows('customer_rep' ,'option') ): ?>
					    <?php while ( have_rows('customer_rep','option') ) : the_row(); 
					        $customer_logo  = get_sub_field('customer_logo');
					        $customer_url   = get_sub_field('customer_url');
					    ?>  
					     <div class="logo_box">
							<a data-url="<?php if($customer_url){ echo true; } else { echo false; } ?>" href="<?php if($customer_url){ echo $customer_url; } else { echo '#'; } ?>" <?php if($customer_url){ echo 'target="_blank"'; }  ?>  title="">
					     		<img src="<?php echo $customer_logo['url']; ?>" title="" alt="sdsd">
							</a>
					     </div>       
					   
					    <?php endwhile; ?>       
					<?php endif;?>
				
				</div>	
			 </div>
		</div>
	</section>


	<section class="footer_menu_sec">
		<div class="row">

			<div class="large-8 column">
				<div class="row">
					<div class="large-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_one', 'menu_class' => 'footer_menu_one' ) ); ?> 
		            </div>
		            <div class="large-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_tow', 'menu_class' => 'footer_menu_tow' ) ); ?> 
		            </div>
		            <div class="large-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_three', 'menu_class' => 'footer_menu_three' ) ); ?> 
		            </div>
		            <div class="large-3 small-12 column footer_col end">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_four', 'menu_class' => 'footer_menu_four' ) ); ?> 
		            </div>	
				</div>
			</div>

			<div class="large-3 column">
				<?php echo $footer_info; ?>
			</div>

		</div>
	</section>
	
	<section class="footer_copy_sec">
		<div class="row">
			 <div class="large-12 column">
				<div class="footer_copy">
					<?php echo $footer_copy; ?>
				</div>	
				<div class="footer_build">
					<?php echo $footer_webbuild; ?>
				</div>
			 </div>
		</div>
	</section>

</footer>	

<?php wp_footer(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->

</div><!-- end Wraper  -->
 

</body>
</html>

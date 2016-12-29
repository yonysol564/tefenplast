<?php get_header(); ?>

	<section class="search_sec">
		<div class="row">
			<div class="large-12 column">
				<div class="top_div">
					<h1><?php _e('תוצאות חיפוש');?></h1>
				</div>
			</div>
		</div>

		<form role="search" method="get" action="<?php echo home_url(); ?>">  
			<div class="row">
				<div class="large-10 medium-10 small-8 column">
					<div class="input_div">
				      <input class="form-control input_search" type="search" name="s" id="search" placeholder="<?php _e('הקלד כאן לחיפוש');?>">
				    </div>
				</div>

				<div class="large-2 medium-2 small-4 column">
				    <div class="input_button">
				      <button class="search-submit" type="submit" role="button"><?php _e('חפש','insightec');?></button>
				    </div>
				</div>   
			</div>
		</form>
	</section>

	<section class="search_results">	
		<div role="main" class="row">
			<div class="large-12 columns col_head">
				<h4>
				<?php 
					echo sprintf( __( '%s תוצאות עבור ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
				</h4>
			</div>
			<div class="large-12 columns border_row">
				<div class="border_con">
					
				</div>
			</div>
			<div class="large-12 columns results_div">
			  <ul>
				<?php while(have_posts()): the_post(); ?>
					    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	
				<?php endwhile; ?>
			  </ul>
			</div>	  
			<?php get_template_part('pagination'); ?>

			<div class="large-12 columns pagination_col">	
				<div class="pagi_page">
					<span><?php _e('עמוד');?></span>
				</div>

				<div class="pagination_div">
					<?php 
					if ($wp_query->found_posts <= 10) 
					{ 
					?> 
						<div class="pagination">
					     	<span class="current">1</span>
					    </div>	
					<?php 
					}else{
						my_pagination();
					}
					?>
				</div>


			</div>
		</div>

	</section>
<?php get_footer(); ?>
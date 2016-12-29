<?php global $float; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php 
	$banner_autoplay = get_field('banner_autoplay');
?>
<?php wp_head(); ?>

<body <?php body_class(); ?>>

<div class="clearfix"></div>
<header>
	<?php 
		$facebook_img = get_field( 'facebook_img', 'option');
		$facebook_url= get_field( 'facebook_url', 'option');
		$google_plusimg = get_field( 'google_plusimg', 'option');
		$google_plusurl= get_field( 'google_plusurl', 'option');
	?>
	<div class="top_socials">
		<div class="row">
			<div class="large-12 column">
				<div class="social_div">
					<a href="<?php echo $google_plusurl; ?>" target="_blank" title="google+">
						<img src="<?php echo $google_plusimg['url']; ?>" title="google+" alt="google+">
					</a>
				</div>
				<div class="social_div">
					<a href="<?php echo $facebook_url; ?>" target="_blank" title="facebook">
						<img src="<?php echo $facebook_img['url']; ?>" title="facebook" alt="facebook">
					</a>
				</div>
			</div>
		</div>
	</div>
	<nav>
		<div class="row">	
			<div class="large-12 column">
				<div class="top-bar">
					

					<div class="top-bar-title logo_div">
					    <span class="title_icon" data-responsive-toggle="responsive-menu" data-hide-for="medium">
					      <button class="menu-icon dark" type="button" data-toggle></button>
					    </span>
					   	<a class="logo_img" href="<?php echo home_url(); ?>" title="">
					   	<?php 
					   		$logo = get_field('main_logo', 'option');
					   	?>
					   		<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
					   	</a>
					</div>
					<div id="responsive-menu" class="menu_div">
						<div class="top_bar_div top-bar-right">
							<div class="wrap_ul">							
							    <?php
						           	wp_nav_menu( array(
						                  'theme_location'    => 'top_menu',
						                  'menu_class'        => '',
						                  'container'         => '',
						                  'container_class'   => '',
						                  )
						            );
						        ?>
							</div>
							<div class="wrap_search">
						        <a href="#" class="search_btn" title="">
									<img src="<?php echo THEME_DIR . '/images/searchicon.png'; ?>" title="" alt="search">
								</a> 
								<div class="search_div">
									<form role="search" method="get" action="<?php echo home_url(); ?>" >  
									    <div class="input_div">
									      <input class="form-control input_search" type="search" name="s" id="search" placeholder="<?php _e('הקלד לחיפוש','insightec');?>">
									    </div>
									    <div class="input_button">
									      <button class="search-submit" type="submit" role="button"><?php _e('חפש','insightec');?></button>
									    </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

</header>

<div class="main_wraper">


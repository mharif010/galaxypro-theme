<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galaxypro
 */
	$my_options = get_option( 'galaxypro' ); 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header Start -->
	<header id="header-section" class="header header-transparent default style-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-static-top navbar-expand-lg header-sticky">

						<?php 
						if( $my_options['general_logo'] ){
							if ( !empty(has_custom_logo()) ) {
								the_custom_logo();
							} elseif (!empty($my_options['logo']['url']) ) {
								printf('<a class="navbar-brand" href="%1$s"><img class="img-fluid logo" src="%2$s" alt="logo"/></a>', 
								esc_url(get_home_url()), $my_options['logo']['url']);
							} else{
								printf('<a class="navbar-brand" href="%1$s"><h2>%2$s</h2></a>', esc_url(get_home_url()),esc_html(get_bloginfo('title')));
							}
						}
						?>

						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-align-left"></i>
						</button>

						<?php
						/**
						 * Get the theme nav menu
						 */
						if( $my_options['general_menu'] ){
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'container'       => 'div',
									'container_class' => 'navbar-collapse collapse justify-content-center',
									'container_id'    => 'navbarmenu',
									'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
									'depth'           => 0,
									'walker' => new WPDocs_Walker_Nav_Menu()
								)
							);
						}
							
						if( $my_options['general_button'] ){
						?>	
						<div class="add-listing header-btn d-none d-sm-block">
							<a class="btn" href="<?php 
									if( !empty( $my_options ) ){
										if( $my_options['header_btn_url'] ){
											echo $my_options['header_btn_url'];
										}else{
											echo home_url();
										}
									}
									?>">
								<span>
									<?php 
									if( !empty( $my_options ) ){
										if( $my_options['header_btn_text'] ){
											echo $my_options['header_btn_text'];
										}else{
											echo _e('Contact me','galaxypro');
										}
									}
									?>	
								</span>
							</a>
						</div>
						<?php } ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--Header End -->




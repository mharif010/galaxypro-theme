<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galaxypro
 */
$my_options = get_option( 'galaxypro' );
?>

<!-- Footer start -->
<footer id="footer-section" class="footer-area mt-100 xs-mt-65" >
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget widget">
					<?php dynamic_sidebar( 'footer-1' ); 
					if( $my_options['social_icononoff'] ){
					?>
					<div class="footer-widget-social mt-30 xs-mt-30">
						<ul class="d-flex">
						<?php
							if($header_socials = $my_options['header_icons']){
								foreach( $header_socials as $header_social){
							?>
								<li><a href="<?php echo $header_social['social_link']; ?>"><i class="<?php echo $header_social['social_icon']; ?>"></i></a></li>
							<?php
								}
							}else{
								echo " ";
							}
						?>
						</ul>
                	</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget widget footer-widget-links useful-links">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget widget footer-widget-links legal-service">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget widget footer-widget-newsletter">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright-area text-center mt-60">
					<div class="copyright-area-inner" style="color:<?php echo $my_options['fc-bg']; ?>">
					<?php  
                        if( !empty( $my_options ) ){
                            if( $my_options['fc-text'] ){
                        ?>
        				<p class="mb-0"><?php echo $my_options['fc-text']; ?></p>										<?php 
                            }else{ ?>
						<p class="mb-0"><?php _e('© Design and Develop By IDDRAK'); ?></p>
						<?php }}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer end -->

<!-- Back To Top Start -->
<?php if( $my_options['btop_onoff'] ){ ?>
<div id="back-to-top" class="back-to-top">
	<a href="#" style="background:<?php echo $my_options['footer-btop-bg']; ?>;color:<?php echo $my_options['footer-btop-color']; ?>;"> <?php echo $my_options['footer-btop']; ?> <i style="color:<?php echo $my_options['footer-btop-color']; ?>;" class="fa fa-angle-right"></i></a>
</div>
<?php } ?>
<!-- Back To Top End-->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galaxypro
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- Blog sidebar -->
<div class="col-xl-4 col-lg-4 col-md-5">
	<div class="widget-area sidebar xs-mt-70">
		<?php 
		get_search_form();
		dynamic_sidebar( 'sidebar-1' ); ?>
		<div class="clear"></div>
	</div>
</div>

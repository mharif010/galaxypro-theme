<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package galaxypro
 */

get_header();
$my_options = get_option( 'galaxypro' );
?>
	<!-- Banner Start -->
	<section class="page-banner bg-holder bg-overlay-black-70" style="background-image: url('<?php
		if(isset( $my_options )){
			echo $my_options['404_header_img']['url']; 
		}else{
			echo 'hello';
		}
		?>');" data-jarallax='{"speed": 0.6}'>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 text-center">
					<h1 class="text-primary display-3 font-weight-bold text-uppercase"><?php wp_title( '', true ); ?></h1>
					<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mt-20">
							<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>"><?php _e('Home', 'galaxypro'); ?></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php wp_title( '', true ); ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Error Start -->
    <section id="error-section" class="mt-90 xs-mt-70">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="error-page text-center">
                        <h2 class="title"><?php echo $my_options['404_title']; ?></h2>
                        <h1 class="number">4 
							<span class="span-1">0</span>
							<span class="span-2">4</span>
						</h1>
                        <p><?php echo $my_options['404_desc']; ?></p>
                        <a href="<?php echo home_url(); ?>"><?php echo $my_options['404_link_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Error End -->

<?php
get_footer();

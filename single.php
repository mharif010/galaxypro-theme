<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package galaxypro
 */

get_header();
get_template_part('breadcrumb');
?>

<!-- Blog Start -->
<section id="blog-section" class="mt-100 xs-mt-70">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="blog-detail">
				<div class="blog-post">
			
					<div class="blog-post-content border-0">
						<?php the_content(); ?>
						<div class="navigation post-navigation mt-40">
							<div class="mt-4">
								<div class="mt-sm-4 mt-5">
									<?php 
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
									?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<?php
		endwhile; // End of the loop.
		?>

			</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php
get_footer();

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
					<div class="row">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>
				<div class="row">
					<div class="col-12">
						<?php galaxypro_num_posts_navigation(); ?>
					</div>
				</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
			
        </div>
    </section>
    <!-- Blog End -->   

<?php
get_footer();

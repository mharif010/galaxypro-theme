<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package galaxypro
 */

get_header();
get_template_part('breadcrumb');
?>


<!-- Search Start -->
<section id="blog-section" class="mt-100 xs-mt-70">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7">
				<div class="row">
			<?php
			if ( have_posts() ) :
				?>
				<header class="page-header">
					<h3 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for - %s', 'galaxypro' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h3>
				</header><!-- .page-header -->
				<?php
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

				the_posts_navigation();

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
<!-- Search End -->   

<?php
get_footer();

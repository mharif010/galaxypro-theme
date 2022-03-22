<?php 
get_header(); 
get_template_part('breadcrumb');
?>
<!-- Project Start -->
<section id="project-section" class="mt-100 xs-mt-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="project-details">
                    <div class="project-content">

                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <!-- Blog sidebar -->
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="widget-area sidebar xs-mt-70">
                <?php 
                    get_search_form();
                    dynamic_sidebar( 'sidebar-3' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End -->
<?php get_footer(); ?>
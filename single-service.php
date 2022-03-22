<?php 
get_header(); 
get_template_part('breadcrumb');
?>
<!-- Services Start -->
<section id="service-section" class="mt-100 xs-mt-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="service-details">         
                    <?php the_content(); ?>
                </div>
            </div>

            <!-- Blog sidebar -->
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="widget-area sidebar xs-mt-50">
                <?php 
                    get_search_form();
                    dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End -->
<?php get_footer(); ?>
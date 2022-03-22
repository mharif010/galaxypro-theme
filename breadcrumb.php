<!-- Banner Start -->
<section class="page-banner bg-holder bg-overlay-black-70" <?php if(has_post_thumbnail()): ?>
      style="background-image: url('<?php the_post_thumbnail_url();?>');"
    <?php endif;?> data-jarallax='{"speed": 0.6}'>
    <div class="overlay">
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
    </div>
</section>
<!-- Banner End -->
<?php
/*
Template Name: Services
*/
?>

<div class="col-xs-12 services-container text-center">

    <?php
        if (have_rows('services')) {
            while (have_rows('services')) {
                the_row();
                ?>
                    <div class="col-xs-12 col-md-4 service-container">
                        <div class="background-opaque-blue service-inner white-text">

                            <span class="<?php the_sub_field('dashicon_class'); ?>"></span>

                            <h3><?php the_sub_field('name'); ?></h3>

                            <div class="services-description text-justify"><?php the_sub_field('description'); ?></div>

                        </div><!-- .service-inner -->
                    </div><!-- .service-container -->
                <?php
            }
        }
    ?>

</div><!-- .text-center -->

<div class="col-xs-12 services-next-page text-center white-text">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
</div><!-- .portfolio-next-page -->

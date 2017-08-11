<?php
/*
Template Name: Portfolio
*/
?>

<div class="background-opaque-blue portfolio-slick-slider-outer">

    <div class="portfolio-slick-slider-container">

        <div class="arrow-container previous-arrow-container white-text">

            <div class="arrow-inner previous-arrow-inner text-center">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div><!-- .previous-arrow-inner -->

        </div><!-- .previous-arrow-container -->

        <div class="portfolio-slick-slider">
            <?php
                if (have_rows('portfolio')) {

                    $slide_count = 0;

                    while (have_rows('portfolio')) {

                        $slide_count++;
                        the_row();

                        ?>
                            <div class="slick-slide-container">
                                <div class="slick-slide-inner" slide-id="<?php echo $slide_count; ?>">
                                    <div class="slick-slide-hover-overlay slide-overlay-<?php echo $slide_count; ?>">
                                        <h2 class="white-text text-center"><?php the_sub_field('title'); ?></h2>
                                        <h4 class="white-text"><?php the_sub_field('description'); ?></h4>
                                    </div>
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="slick-slider-image">
                                    <div class="mobile-portfolio-description">
                                        <h2 class="white-text text-center"><?php the_sub_field('title'); ?></h2>
                                        <h4 class="white-text"><?php the_sub_field('description'); ?></h4>
                                    </div>
                                </div><!-- .slick-slide-inner -->
                            </div><!-- .slick-slide-container -->
                        <?php

                    }

                }
            ?>
        </div><!-- .portfolio-slick-slider -->

        <div class="arrow-container next-arrow-container white-text">

            <div class="arrow-inner next-arrow-inner text-center">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div><!-- .next-arrow-inner -->

        </div><!-- .next-arrow-container -->

    </div><!-- .portfolio-slick-slider-container -->

</div><!-- .portfolio-slick-slider-outer -->

<div class="portfolio-next-page text-center white-text">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
</div><!-- .portfolio-next-page -->

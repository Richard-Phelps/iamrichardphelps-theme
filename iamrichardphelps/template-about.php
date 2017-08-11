<?php
/*
Template Name: About
*/
?>

<div class="background-opaque-blue about-me-content padding-20 white-text">
    <?php the_content(); ?>
</div>

<div class="background-opaque-blue skills-container padding-20 text-center white-text">

    <h3 class="no-margin">Skills</h3>
    <?php
        // ACF repeater loop to loop through all skills
        if (have_rows('skills')) {
            while (have_rows('skills')) {
                the_row();
                ?>
                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>" title="<?php the_sub_field('name'); ?>" class="skills-image">
                <?php

            }
        }
    ?>

</div><!-- .skills-container -->

<div class="about-next-page text-center white-text">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
</div><!-- .about-next-page -->

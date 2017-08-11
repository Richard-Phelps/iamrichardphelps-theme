<?php get_header(); ?>

<?php
    // Get the url for the featured image for home page
    $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>

<div class="parallax-container homepage-parallax-container no-border" data-parallax="scroll" data-image-src="<?php echo $featured_image; ?>">
    <div class="container height-100">
        <div class="site-logo text-center">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <img src="<?php echo esc_url(get_theme_mod('iamrichardphelps_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
        </div><!-- .site-logo -->

        <div class="homepage-quote-container text-center">
            <div class="homepage-quote-inner">
                <p class="homepage-quote page-title-size no-margin white-text">Code is Poetry</p>
                <p class="homepage-quote-credit pull-right white-text"> - WordPress.org</p>
            </div><!-- .homepage-quote-inner -->
        </div><!-- .homepage-quote-container -->

        <div class="homepage-next-page text-center white-text">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div><!-- .homepage-next-page -->
    </div><!-- .container -->
</div><!-- .parallax-container -->

<?php
    // Get the children for this page as the children are other sections of the site
    $children = new WP_Query(
        array(
            'post_parent' => get_the_id(),
            'post_type'   => 'page',
            'order_by'    => 'menu_order',
            'order'       => 'ASC',
        )
    );

    // The loop
    if ($children->have_posts()) {
        while ($children->have_posts()) {
            $children->the_post();

            $page_id        = get_the_id();
            $featured_image = wp_get_attachment_url(get_post_thumbnail_id($page_id));
            $template       = get_page_template();

            ?>
                <div class="parallax-container parallax-padding" id="section-<?php echo $page_id; ?>" data-parallax="scroll" data-image-src="<?php echo $featured_image; ?>">
                    <div class="container">
                        <div class="text-center">
                            <div class="background-opaque-blue page-title-container padding-20">
                                <h3 class="no-margin white-text"><?php echo get_the_title($page_id); ?></p>
                            </div>
                        </div><!-- .text-center -->
                        <?php
                            if (!empty($template)) {
                                include($template);
                            }
                        ?>
                    </div><!-- .container -->
                </div><!-- .parallax-container -->
            <?php

        }
    }
?>

<?php get_footer(); ?>

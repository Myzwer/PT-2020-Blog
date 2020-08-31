<?php
/**
 * Template Name: About
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Caelicarn
 * @since 1.0.0
 */

get_header(); ?>

<?php if( have_rows('header_image_settings') ): ?>
    <?php while( have_rows('header_image_settings') ): the_row(); ?>
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background <?php the_sub_field('header_size'); ?>" style = "background: linear-gradient(
                    rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>),
                    rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>)
                    ),url(<?php the_sub_field('header_background'); ?>);
                    background-position: <?php the_sub_field('image_alignment'); ?> center;
                    background-repeat: no-repeat;
                    background-attachment: scroll;
                    background-size: cover;">
                <div class="small-12 cell">
                    <div class="content-middle width-large">
                        <h1 class = "center" ><?php the_field('page_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="large-12 cell padding-top">
                    <h3 class = "padding-bottom center"><?php the_field('featured_title'); ?></h3>
                    <p class = "no-margin "><?php the_field('main_body_copy'); ?></p>
                    <div class="margin-bottom soft-center">
                        <a href="<?php the_field('button_link'); ?>">
                            <button class="center no-margin btn btn-v1"><?php the_field('button_text'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="large-12 cell padding-top padding-bottom">
                    <img class = "border-radius" src="<?php the_field('featured_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>


        <?php if( have_rows('footer_image_settings') ): ?>
            <?php while( have_rows('footer_image_settings') ): the_row(); ?>
                <div class="grid-container full-width">
                    <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
                  rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>),
                  rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>)
                ),url(<?php the_sub_field('footer_background'); ?>);   background-position: center <?php the_sub_field('image_alignment'); ?>;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
            <?php endwhile; ?>
        <?php endif; ?>
            <div class="small-12 cell">
                <div class="content-middle full-width">
                    <h1 class = "center mobile-heading-small" >Stay Connected</h1>
                    <div class = "text-invert socials center">

                        <?php
                        // Check rows exists.
                        if( have_rows('social_icons') ):

                            // Loop through rows.
                            while( have_rows('social_icons') ) : the_row();
                            ?>
                            <a href="
                            <?php the_sub_field('social_link'); ?>
                            " target="_blank"> <i class="fab
                            <?php
                                the_sub_field('font_awesome_social_icon');?>
                                text-invert"></i></a>
                            <?php

                            endwhile;
                        else :
                            //there won't be an else.
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

<!--Desktop code to display video on tablet and up.-->
    <div class="show-for-desktop">
        <video src="<?php the_field('video_background'); ?>" autoplay loop playsinline muted></video>
        <div class="viewport-header">
            <div class="head-container">
                <div class="headline"><h1><?php the_field('page_title'); ?></h1></div>
                <div class="knockout-logo"><img src="<?php the_field('logo'); ?>"></div>
            </div>
        </div>
    </div>

<!--Mobile code to remove video and replace with a static image -->
    <div class="show-for-mobile">
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
                                    <div class="viewport-header">
                                        <div class="head-container">
                                        <h1 class = "center" ><?php the_field('page_title'); ?></h1>
                                        <div class="knockout-logo"><img src="<?php the_field('logo'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


<!-- Full Width Main Banner -->
    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="large-12 cell padding-top">
                    <h2 class = " center"><?php the_field('banner_title'); ?></h2>
                    <hr>
                    <h4 class = "center text-color"><?php the_field('banner_subtitle'); ?></h4>
                    <p class = "no-margin no-padding add-padding"><?php the_field('banner_paragraph'); ?></p>

                    <!-- Button Code -->
                    <?php if( have_rows('banner_button') ): ?>
                        <?php while( have_rows('banner_button') ): the_row(); ?>
                            <div class="margin-bottom soft-center">
                                <a href="<?php the_sub_field('banner_button_link'); ?>">
                                    <button class="center no-margin btn btn-v1"><?php the_sub_field('banner_button_text'); ?></button>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- End Button Code -->

                </div>
            </div>
        </div>
    </div>


<!-- Image Banner -->
    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
      rgba(0, 0, 0, <?php the_field('watch_transparency_filter'); ?>),
      rgba(0, 0, 0, <?php the_field('watch_transparency_filter'); ?>)
    ),url(<?php the_field('watch_banner_background_image'); ?>);  background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle width-large">
                    <h1 class = "center mobile-heading-small" ><?php the_field('watch_banner_title'); ?></h1>
                    <p class = "text-invert center"><?php the_field('watch_banner_subtitle'); ?></p>

                    <!-- Button Code -->
                    <?php if( have_rows('watch_banner_button') ): ?>
                        <?php while( have_rows('watch_banner_button') ): the_row(); ?>
                            <div class="center">
                                <a href="<?php the_sub_field('banner_button_link'); ?>" target="_blank">
                                    <button class="btn btn-v2 center"><?php the_sub_field('banner_button_text'); ?></button>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



<!-- Cells -->
    <!-- 1/2 Width -->
    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x grid-margin-x grid-margin-y">
                <div class="small-12 medium-6 cell padding-top primary-background">
                    <?php if( have_rows('half_width_cell_1') ): ?>
                        <?php while( have_rows('half_width_cell_1') ): the_row(); ?>
                            <h2>// <?php the_sub_field('cell_title'); ?></h2>
                            <p class = "no-margin no-padding padding-bottom height-lock"><?php the_sub_field('cell_paragraph'); ?></p>
                            <div class="margin-bottom soft-center">
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="center no-margin btn btn-v1"><?php the_sub_field('button_text'); ?></button>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


                <!-- 1/2 Width -->
                <div class="small-12 medium-6 cell padding-top primary-background">
                    <?php if( have_rows('half_width_cell_2') ): ?>
                        <?php while( have_rows('half_width_cell_2') ): the_row(); ?>
                            <h2>// <?php the_sub_field('cell_title'); ?></h2>
                            <p class = "no-margin no-padding padding-bottom height-lock"><?php the_sub_field('cell_paragraph'); ?></p>
                            <div class="margin-bottom soft-center">
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="center no-margin btn btn-v1"><?php the_sub_field('button_text'); ?></button>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


                <!-- Full Width -->
                <div class="small-12 cell padding-top primary-background">
                    <?php if( have_rows('full_width_cell') ): ?>
                        <?php while( have_rows('full_width_cell') ): the_row(); ?>
                            <h2>// <?php the_sub_field('cell_title'); ?></h2>
                            <p class = "no-margin no-padding padding-bottom"><?php the_sub_field('cell_paragraph'); ?></p>
                            <div class="margin-bottom soft-center">
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="center no-margin btn btn-v1"><?php the_sub_field('button_text'); ?></button>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php get_footer();

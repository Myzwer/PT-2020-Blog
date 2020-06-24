<?php
/**
 * Template Name: Privacy Policy
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
                    <h class = "center text-color add-padding">Updated <span class = "italics">June 23, 2020</span></h>
                    <hr>
                    <p class = "no-margin no-padding add-padding header-margin">
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        else :
                            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                        endif;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>



<?php get_footer();

<?php
/**
 * Template Name: Contact Template
 *
 * The Contact Page of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background full-background-xl" style = "background: url(http://pt-blog-2020.local/wp-content/uploads/2020/04/Contact-Banner.jpg);  background-position: top center;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
            <div class="small-12 cell">
                <div class="content-middle width-large">
                    <h1 class = "center" >Contact</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-10 cell primary-background add-padding add-margin">
                    <h2>Reach Out</h2>
                    <p class = "no-padding no-margin">Interested in consultation? Just wanting more information? Need to ask a question? Fill out the form below and we'll get back to you ASAP.</p>
                </div>
                <div class="small-12 medium-10 cell primary-background add-padding add-margin">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();

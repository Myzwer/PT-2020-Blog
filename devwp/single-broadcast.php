<?php

/**
 * Template Name: Broadcast - Single Post
 **/

get_header();
?>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="large-12 cell padding-top">
                </div>
            </div>
        </div>
    </div>


    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="small-12 large-7 cell padding-top padding-bottom">
                    <div class="videoWrapper">
                        <?php the_field('podcast_link'); ?>
                    </div>
                </div>
                <div class="small-12 large-5 cell padding-top">
                    <h2 class = "no-margin"><?php echo the_title(); ?></h2>
                    <p class="no-padding bold"><?php the_date();?></p>

                    <hr>
                    <div class = "no-padding no-margin excerpt-paragraph">
                         <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            the_content();
                            endwhile;
                            else:
                                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                            endif;
                         ?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom">
            <div class="grid-x grid-padding-x primary-background add-padding">
                <div class="large-4 cell margin-bottom margin-top">
                    <?php next_post_link('%link', '<button class="btn btn-v1 center">Next Video</button>'); ?>
                </div>
                <div class="large-4 cell margin-bottom margin-top">
                    <a href="http://192.168.1.242:3000/watch/">
                        <button class="btn btn-v1 center">All Videos</button>
                    </a>
                </div>
                <div class="large-4 cell margin-bottom margin-top">
                    <a href="">
                        <?php previous_post_link('%link', '<button class="btn btn-v1 center">Previous Video</button>'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>


















<?php
get_footer();
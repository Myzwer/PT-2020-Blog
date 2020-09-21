<?php
/**
 * Template Name: Consulting
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
                    <h4 class = "center text-color"><?php the_field('consulting_tagline'); ?></h4>
                    <hr>
                    <p class = "no-margin no-padding add-padding"><?php the_field('consulting_information'); ?></p>
                    <div class="margin-bottom soft-center">
                        <a href="<?php the_field('button_link'); ?>">
                            <button class="center no-margin btn btn-v1"><?php the_field('header_button_text'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width primary-background padding-bottom">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x main-background rounded-corners">
                <div class="small-12 cell padding-top">
                    <h2 class = "center padding-bottom">// <?php the_field('process_section_title'); ?></h2>
                </div>

                <div class = "grid-container">
                    <div class="grid-x grid-padding-x grid-margin-x">
                        <?php if( have_rows('card_1') ): ?>
                            <?php while( have_rows('card_1') ): the_row(); ?>
                                <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                                    <div class="number-outer">
                                        <span class="number-circle">1</span>
                                    </div>
                                    <h3 class = "center padding-top"><?php the_sub_field('card_title'); ?></h3>
                                    <hr>
                                    <p class = "center no-padding no-margin padding-bottom"><?php the_sub_field('card_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('card_2') ): ?>
                            <?php while( have_rows('card_2') ): the_row(); ?>
                                <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                                    <div class="number-outer">
                                        <span class="number-circle">2</span>
                                    </div>
                                    <h3 class = "center padding-top"><?php the_sub_field('card_title'); ?></h3>
                                    <hr>
                                    <p class = "center no-padding no-margin padding-bottom"><?php the_sub_field('card_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('card_3') ): ?>
                            <?php while( have_rows('card_3') ): the_row(); ?>
                                <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                                    <div class="number-outer">
                                        <span class="number-circle">3</span>
                                    </div>
                                    <h3 class = "center padding-top"><?php the_sub_field('card_title'); ?></h3>
                                    <hr>
                                    <p class = "center no-padding no-margin padding-bottom"><?php the_sub_field('card_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('card_4') ): ?>
                            <?php while( have_rows('card_4') ): the_row(); ?>
                                <div class="small-12 medium-4 medium-offset-2 cell padding-top margin-top-xl primary-background process-box">
                                    <div class="number-outer">
                                        <span class="number-circle">4</span>
                                    </div>
                                    <h3 class = "center padding-top"><?php the_sub_field('card_title'); ?></h3>
                                    <hr>
                                    <p class = "center no-padding no-margin padding-bottom"><?php the_sub_field('card_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('card_5') ): ?>
                            <?php while( have_rows('card_5') ): the_row(); ?>
                                <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                                    <div class="number-outer">
                                        <span class="number-circle">5</span>
                                    </div>
                                    <h3 class = "center padding-top"><?php the_sub_field('card_title'); ?></h3>
                                    <hr>
                                    <p class = "center no-padding no-margin padding-bottom"><?php the_sub_field('card_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Packages Section -->
    <div class="full-width main-background">
        <div class = "grid-container padding-top padding-bottom">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 center padding-top primary-background padding-bottom rounded-corners margin-bottom">
                    <h3 class = "center">// <?php the_field('packages_section_title'); ?></h3>
                </div>

                <!-- Package Card 1 -->
                <?php if( have_rows('package_1') ): ?>
                    <?php while( have_rows('package_1') ): the_row(); ?>
                        <div class="small-12 margin-top medium-6 cell padding-top primary-background rounded-corners">
                            <div class="center detail-table">
                                <i class="fas <?php the_sub_field('package_icon'); ?> table-icon"></i>
                                <h3><?php the_sub_field('package_title'); ?></h3>
                               <hr>

                                <div class="green-check">
                                <!-- Start Checklist Repeater -->
                                <?php
                                if( have_rows('package_items') ):

                                    // Loop through rows.
                                    while( have_rows('package_items') ) : the_row(); ?>

                                    <p class = "no-padding no-padding"><i class="fas fa-check"></i> <?php the_sub_field('list_item'); ?></p>
                                    <hr class="narrow-hr">

                                    <?php
                                    endwhile;
                                else :
                                    //don't display anything
                                endif;
                                ?>
                                <!-- End Checklist Repeater -->
                                </div>

                                <div class="margin-bottom">
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="center no-margin btn btn-v1"><?php the_sub_field('button_title'); ?></button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


                <!-- Package Card 2 -->
                <?php if( have_rows('package_2') ): ?>
                    <?php while( have_rows('package_2') ): the_row(); ?>
                        <div class="small-12 margin-top medium-6 cell padding-top primary-background rounded-corners">
                            <div class="center detail-table">
                                <i class="fas <?php the_sub_field('package_icon'); ?> table-icon"></i>
                                <h3><?php the_sub_field('package_title'); ?></h3>
                                <hr>

                                <div class="green-check">
                                    <!-- Start Checklist Repeater -->
                                    <?php
                                    if( have_rows('package_items') ):

                                        // Loop through rows.
                                        while( have_rows('package_items') ) : the_row(); ?>

                                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> <?php the_sub_field('list_item'); ?></p>
                                            <hr class="narrow-hr">

                                        <?php
                                        endwhile;
                                    else :
                                        //don't display anything
                                    endif;
                                    ?>
                                    <!-- End Checklist Repeater -->
                                </div>

                                <div class="margin-bottom">
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="center no-margin btn btn-v1"><?php the_sub_field('button_title'); ?></button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


            </div>
        </div>
    </div>


    <!-- Meet the team cards-->
    <div class="full-width primary-background padding-bottom">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x  grid-margin-x rounded-corners">
                <div class="small-12 center padding-top main-background padding-bottom rounded-corners">
                    <h3 class = "center"><?php the_field('team_section_title'); ?></h3>
                </div>

                <!-- Start repeater to loop through the team member cards-->
                <?php
                if( have_rows('team_member_card') ):

                    // Loop through rows.
                    while( have_rows('team_member_card') ) : the_row(); ?>
                        <div class="small-12 medium-6 cell margin-top main-background rounded-corners">
                            <img class = "rounded-corners-top" src="<?php the_sub_field('member_picture'); ?>" alt="">
                            <div class="add-padding">
                                <h3><?php the_sub_field('team_member_name'); ?></h3>
                                <h5><?php the_sub_field('job_title'); ?></h5>

                                <!-- Second Repeater for education since its unknown how much they will have-->
                                <?php
                                if( have_rows('education') ):
                                    while( have_rows('education') ) : the_row();
                                        ?>
                                        <h6 class = "no-margin"><?php the_sub_field('degree'); ?></h6>
                                        <h6 class = "no-margin"><?php the_sub_field('degree_2'); ?></h6>
                                        <h6 class = "no-margin"><?php the_sub_field('degree_3'); ?></h6>

                                        <h6 class = "no-margin italics margin-bottom"><?php the_sub_field('school'); ?></h6>



                                    <?php
                                    endwhile;
                                else :
                                    //don't display anything
                                endif;
                                ?>

                                <!-- End Education repeater-->
                                <hr>
                                <p class = "no-padding"><?php the_sub_field('bio'); ?></p>
                            </div>
                        </div>

                    <?php
                    endwhile;
                else :
                    //there won't be an else.
                endif;
                ?>

            </div>
        </div>
    </div>


            <div class="grid-container full-width">
                <?php if( have_rows('footer_image_settings') ): ?>
                    <?php while( have_rows('footer_image_settings') ): the_row(); ?>
                        <div class="grid-x grid-padding-x full-background " style = "background: linear-gradient(
                        rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>),
                        rgba(0, 0, 0, <?php the_sub_field('transparency_filter'); ?>)
                        ),url(<?php the_sub_field('footer_background'); ?>);   background-position: <?php the_sub_field('image_alignment'); ?> right;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
                <?php endwhile; ?>
            <?php endif; ?>

                    <div class="small-12 cell">
                        <div class="content-middle">
                            <?php if( have_rows('footer_cta') ): ?>
                                <?php while( have_rows('footer_cta') ): the_row(); ?>
                                    <h1 class = "center medium-font-mobile" ><?php the_sub_field('cta_title'); ?></h1>
                                    <div class="margin-bottom soft-center">
                                        <a href="<?php the_sub_field('button_link'); ?>">
                                            <button class="center no-margin btn btn-v2"><?php the_sub_field('button_text'); ?></button>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


<?php get_footer();
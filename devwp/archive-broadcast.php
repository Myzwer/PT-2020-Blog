<?php

/**
 * Template Name: Sermon Archives
 **/

get_header();


$this_page = get_page_by_path('broadcasts');
$post = $this_page;
setup_postdata($post);
?>


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
                        <p class = "text-invert center podcast-title">No Other Gospel</p>
                        <button class="btn btn-v2 center">Watch Now</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-margin-x">

                <div class="small-12 medium-6 medium-offset-6 cell margin-bottom">
                    <div class = "filter-box">Filter by:
                        <p class = " category-box">All</p>
                        <p class = " category-box">Sermons</p>
                        <p class = " category-box">Development</p>
                        <p class = " category-box">Updates</p>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell podcast-card margin-bottom">
                    <a href="http://192.168.1.191:3000/example-single-post/">
                        <img src="http://pt-blog.local/wp-content/uploads/2020/04/PT-About-Section.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "http://192.168.1.191:3000/example-single-post/">
                            <h4 class = "capitalize text-color">No Other Gospel</h4>
                        </a>
                        <p class = "no-margin no-padding">May 3, 2020</p>
                        <p class = "no-margin no-padding category-box">Sermon</p>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4  cell podcast-card margin-bottom">
                    <a href="#">
                        <img src="https://b16b64e9fc79863eb097-2d57ced7297adfa11a0f9d9e6bf0a0a1.ssl.cf2.rackcdn.com/uploaded/c/0e10006853_1584821214_coronavirus-updates.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "#">
                            <h4 class = "capitalize text-color">COVID-19 Update #4</h4>
                        </a>
                        <p class = "no-margin no-padding">May 1, 2020</p>
                        <p class = "no-margin no-padding category-box">Updates</p>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell podcast-card margin-bottom">
                    <a href="#">
                        <img src="http://pt-blog.local/wp-content/uploads/2020/04/PT-About-Section.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "#">
                            <h4 class = "capitalize text-color">How to Worship in a Socially Distanced World: Instagram Live Interview</h4>
                        </a>
                        <p class = "no-margin no-padding">April 15, 2020</p>
                        <p class = "no-margin no-padding category-box">Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php


get_footer();

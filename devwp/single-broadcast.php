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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Dx_-knMEpdc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="small-12 large-5 cell padding-top">
                    <h2>No Other Gospel</h2>
                    <p class = "no-padding no-margin">Small exerpt from this or maybe a quote or a bottom line or something.</p>
                    <p class="no-padding padding-top">May 5, 2020</p>
                    <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom">
            <div class="grid-x grid-padding-x primary-background add-padding">
                <div class="large-4 cell">
                    <button class="btn btn-v1 center">Previous Video</button>
                </div>
                <div class="large-4 cell">
                    <button class="btn btn-v1 center">All Videos</button>
                </div>
                <div class="large-4 cell">
                    <button class="btn btn-v1 center">Next Video</button>
                </div>
            </div>
        </div>
    </div>











<?php
get_footer();
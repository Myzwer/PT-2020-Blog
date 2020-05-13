<?php

/**
 * Template Name: Podcast Archives
 **/

get_header();


$this_page = get_page_by_path('broadcasts');
$post = $this_page;
setup_postdata($post);
?>


    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(http://pt-blog-2020.local/wp-content/uploads/2020/05/Listen-Page.jpg);  background-position: top center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Latest Podcast</h1>
                    <p class = "text-invert center podcast-title">Worship That Changes The World</p>
                    <button class="btn btn-v2 center">Listen Now</button>
                </div>
            </div>
        </div>
    </div>




    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-margin-x">
                <div class="small-12 medium-6 cell podcast-card margin-bottom">
                    <a href="#">
                        <img src="https://trentstewart.org/wp-content/uploads/2019/10/Podcast-11.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "#">
                            <h2 class = "capitalize">Worship That Changes The World</h2>
                        </a>
                        <p class = "no-margin no-padding">From The Ascent Podcast</p>
                        <p class = "no-margin no-padding">October 30, 2019</p>
                    </div>
                </div>

                <div class="small-12 medium-6 cell podcast-card margin-bottom">
                    <a href="#">
                        <img src="https://trentstewart.org/wp-content/uploads/2019/10/Podcast-10.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "#">
                            <h2 class = "capitalize">How To Influence Culture</h2>
                        </a>
                        <p class = "no-margin no-padding">From The Ascent Podcast</p>
                        <p class = "no-margin no-padding">October 16, 2019</p>
                    </div>
                </div>

                <div class="small-12 medium-6 cell podcast-card margin-bottom">
                    <a href="#">
                        <img src="https://trentstewart.org/wp-content/uploads/2019/10/Podcast-5.jpg" alt="">
                    </a>
                    <div class="add-padding">
                        <a href = "#">
                            <h2 class = "capitalize">Beginning With The End In Mind</h2>
                        </a>
                        <p class = "no-margin no-padding">From The Ascent Podcast</p>
                        <p class = "no-margin no-padding">October 2, 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php


get_footer();
?>
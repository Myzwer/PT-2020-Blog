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

    <video src="<?php the_field('video_background'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container">
            <div class="headline"><h1>"<?php the_field('page_title'); ?></h1></div>
            <div class="knockout-logo"><img src=""<?php the_field('logo'); ?>"></div>
        </div>
    </div>



<div class="full-width main-background">
    <div class = "grid-container padding-bottom padding-top">
        <div class="grid-x grid-padding-x primary-background">
            <div class="large-12 cell padding-top">
                <h2 class = " center">// Consulting</h2>
                <hr>
                <h4 class = "center text-color">Helping churches create healthy environments that grow healthy ministries</h4>
                <p class = "no-margin no-padding add-padding">Every church is unique and requires a tailored approach. With our detailed consultation process, our team aims to create a healthy state that will lead to a culture of multiplying disciples for God's Kingdom to advance. I love God's Church, and we desire to see disciples created for His glory. There is no secret to growth. However, we do know God will do his part. The question remains, 'Will you do yours?'</p>
                <div class="margin-bottom">
                    <button class="center no-margin btn btn-v1">Grow My Ministry</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(http://pt-blog-2020.local/wp-content/uploads/2020/04/Homepage-Background-scaled-1.jpg);  background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Watch Pastor Trent Live</h1>
                    <p class = "text-invert center">Every Sunday 9am / 11am / 1pm / 3pm / 5pm / 9pm (EST)</p>
                    <button class="btn btn-v2 center">Check It Out</button>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x grid-margin-x grid-margin-y">
                <div class="small-12 medium-6 cell padding-top primary-background">
                    <h2>// Videos</h2>
                    <p class = "no-margin no-padding padding-bottom height-lock">Sermons, updates, leadership insights and more. Find all the content you need to propel your church into growth.</p>
                    <div class="margin-bottom">
                        <button class="center no-margin btn btn-v1">Watch Now</button>
                    </div>
                </div>

                <div class="small-12 medium-6 cell padding-top primary-background">
                    <h2>// About</h2>
                    <p class = "no-margin no-padding padding-bottom height-lock">Pastor Trent Stewart has more than two decades of experience in full-time ministry. He and his family reside in the Knoxville area.</p>
                    <div class="margin-bottom">
                        <button class="center no-margin btn btn-v1">Read More</button>
                    </div>
                </div>

                <div class="small-12 cell padding-top primary-background">
                    <h2>// Contact</h2>
                    <p class = "no-margin no-padding padding-bottom">Need to ask a question? Want a consultation? Got something on your mind? Let our team know how we can help.</p>
                    <div class="margin-bottom">
                        <button class="center no-margin btn btn-v1">Reach Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer();

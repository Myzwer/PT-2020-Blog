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
                    <h3 class = "padding-bottom center">"My desire is to serve churches with humility and authenticity to help connect more people to the Gospel."</h3>
                    <p class = "no-margin ">Dr. Trenton J. Stewart is the lead pastor of Foothills Church in Maryville, Tenn. The church is the heart and vision of Pastor Trent who planted FC in 2009 with the support of Grace Baptist Church in Knoxville and Pastor Trent’s father, Dr. Ron Stewart – the longtime lead pastor of GBC.
                    Since 2009, Pastor Trent’s vision and hope for FC derives from a deep passion to develop mature disciples of Christ in relational environments. Through the ministry of Foothills Church, he and the FC staff have seen phenominal growth and ministry take place in their city and even across the globe.</p>
                    <p class = "no-margin ">Today, Pastor Trent shares the hope of Jesus to over 2,000 people weekly as part of two Sunday services. God’s provision for the heart of FC has helped fuel it to become one of the fastest-growing churches in the area – growing in attendance by more than 20 percent from 2019-20. FC has been a sending church through The North American Mission Board to help plant churches in the U.S. FC has also sent missionaries to London, and Africa through International Mission Board. In 2018 the FC School of Ministry was developed to equip leaders and pastors to lead God's church.
                    In 2018, Pastor Trent and the FC staff unveiled the 2020 Vision for FC, which includes the vision to Multiply Campuses, Multiply Leaders, and Multiply Resources. Part of this vision is to plant a campus in the Knoxville area, build a counseling center on campus, and renovate the current building for kids and students.</p>
                    <p class = "no-margin ">Prior to planting FC, Pastor Trent attended Carson Newman College on a basketball scholarship and graduated with his Bachelor of Science in Business Administration in 1999. Pastor Trent holds a Master of Divinity and a Doctorate of Ministry from The Southern Baptist Theological Seminary.
                    Pastor Trent and his wife Micah have been married for 20 years and have four children: Baylee, Bryson, Brooke, and Blakely.</p>
                    <div class="margin-bottom soft-center">
                        <a href="/contact">
                            <button class="center no-margin btn btn-v1">Contact Me</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-padding-x primary-background">
                <div class="large-12 cell padding-top padding-bottom">
                    <img src="https://trentstewart.org/wp-content/uploads/2020/07/About-Family-Photo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background " style = "background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(https://trentstewart.org/wp-content/uploads/2020/07/Home-Socials.jpg);   background-position: center center;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
            <div class="small-12 cell">
                <div class="content-middle full-width">
                    <h1 class = "center mobile-heading-small" >Stay Connected</h1>
                    <div class = "text-invert socials center">
                        <a href="https://www.facebook.com/trentonjstewart" target="_blank"><i class="fab fa-facebook text-invert"></i></a>
                        <a href="https://twitter.com/trentonjstewart?lang=en" target="_blank"><i class="fab fa-twitter text-invert"></i></a>
                        <a href="https://www.instagram.com/trentonjstewart/?hl=en" target="_blank"><i class="fab fa-instagram text-invert"></i></a>
                        <a href="https://www.youtube.com/channel/UC2_Vo0eFmYaMq3SiA0PQLaQ" target="_blank"><i class="fab fa-youtube text-invert"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
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
                    <h4 class = "center text-color">Helping churches create healthy environments that grow healthy ministries</h4>
                    <hr>
                    <p class = "no-margin no-padding add-padding">Every church is unique and requires a tailored approach. With our detailed consultation process, our team aims to create a healthy environment that will lead to a culture of multiplying disciples for God’s Kingdom. I love God’s Church, and we desire to see disciples created for His glory. There is no secret to growth. However, we do know God will do his part. The question remains, ‘Will you do yours?’</p>
                    <div class="margin-bottom soft-center">
                        <a href="/contact">
                            <button class="center no-margin btn btn-v1">Take My First Step</button>
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
                    <h2 class = "center padding-bottom">// The Process</h2>
                </div>

                <div class = "grid-container">
                    <div class="grid-x grid-padding-x grid-margin-x">
                        <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                            <div class="number-outer">
                                <span class="number-circle">1</span>
                            </div>
                            <h3 class = "center padding-top">Contact</h3>
                            <hr>
                            <p class = "center no-padding no-margin padding-bottom">The first step to bring about change in your church is reaching out. Contact us, we would love to help.</p>
                        </div>

                        <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                            <div class="number-outer">
                                <span class="number-circle">2</span>
                            </div>
                            <h3 class = "center padding-top">Discovery</h3>
                            <hr>
                            <p class = "center no-padding no-margin padding-bottom">Let us get back to you. We want to discover your goals so we can grow your ministry.</p>
                        </div>

                        <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                            <div class="number-outer">
                                <span class="number-circle">3</span>
                            </div>
                            <h3 class = "center padding-top">Proposal</h3>
                            <hr>
                            <p class = "center no-padding no-margin padding-bottom">After we create a plan, we’ll pitch a proposal that not only fits in your budget, but meets and exceeds your goals.</p>
                        </div>

                        <div class="small-12 medium-4 medium-4 medium-offset-2 cell padding-top margin-top-xl primary-background process-box">
                            <div class="number-outer">
                                <span class="number-circle">4</span>
                            </div>
                            <h3 class = "center padding-top">Consulting</h3>
                            <hr>
                            <p class = "center no-padding no-margin padding-bottom">It's time to set the plan into action. We will meet with you and the consulting will begin!</p>
                        </div>

                        <div class="small-12 medium-4 cell padding-top margin-top-xl primary-background process-box">
                            <div class="number-outer">
                                <span class="number-circle">5</span>
                            </div>
                            <h3 class = "center padding-top">Recommendation</h3>
                            <hr>
                            <p class = "center no-padding no-margin padding-bottom">Now it’s your turn! We’ll give you a digital copy of your plan and you can begin the process of growing your ministry!</p>
                        </div>
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
                    <h3 class = "center">// The Packages</h3>
                </div>
                <div class="small-12 margin-top medium-4 cell padding-top primary-background rounded-corners">
                    <div class="center detail-table">
                        <i class="fas fa-laptop table-icon"></i>
                        <h3>Virtual Consulting</h3>
                        <hr>

                        <div class="green-check">
                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Key Metric Analysis</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Church Health Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Demographic Survey</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Psychographic Survey</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Two Video Conferences</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Complete Consultation Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Secret Guest Review and Report</p>
                        </div>

                        <div class="margin-bottom">
                            <a href="/contact">
                                <button class="center no-margin btn btn-v1">Contact The Team</button>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="small-12 medium-4 cell margin-top padding-top primary-background rounded-corners">
                    <div class="center detail-table">
                        <i class="fas fa-chart-bar table-icon"></i>
                        <h3>Specialized Consultation</h3>
                        <hr>
                        <div class="green-check">
                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Revitalization</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Vision</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Systems</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Community Engagement</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Team Unity</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Reigniting Growth</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Strategic Planning</p>
                        </div>

                        <div class="margin-bottom soft-center">
                            <a href="/contact">
                                <button class="center no-margin btn btn-v1">Contact The Team</button>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="small-12 medium-4 cell margin-top padding-top primary-background rounded-corners">
                    <div class="center detail-table">
                        <i class="fas fa-clipboard-list table-icon"></i>
                        <h3>Comprehensive Consultation</h3>
                        <hr>
                        <div class="green-check">
                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Community Assessment</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Demographic Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Psychographic Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Onsite Visit and Interviews</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Facilities Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Secret Guest Report</p>
                            <hr class="narrow-hr">

                            <p class = "no-padding no-padding"><i class="fas fa-check"></i> Church Health Survey</p>
                        </div>

                        <div class="margin-bottom soft-center">
                            <a href="/contact">
                                <button class="center no-margin btn btn-v1">Contact The Team</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width primary-background padding-bottom">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x  grid-margin-x rounded-corners">
                <div class="small-12 center padding-top main-background padding-bottom rounded-corners">
                    <h3 class = "center">// Meet the Team</h3>
                </div>
                <div class="small-12 medium-6 cell margin-top main-background rounded-corners">
                    <img class = "rounded-corners-top" src="https://trentstewart.org/wp-content/uploads/2020/07/Consult-PT.jpg" alt="">
                    <div class="add-padding">
                        <h3>Dr. Trent Stewart</h3>
                        <h5>Lead Pastor at Foothills Church</h5>
                        <h6 class = "no-margin">Master of Divinity</h6>
                        <h6 class = "no-margin">Doctorate of Ministry</h6>
                        <h6 class = "no-margin italics">The Southern Baptist Theological Seminary</h6>
                        <h6 class = "padding-top no-margin">Bachelor of Science </h6>
                        <h6 class = "no-margin italics">Carson-Newman University</h6>
                        <hr>
                        <p class = "no-padding">Pastor Trent Stewart is the lead pastor of Foothills Church in Maryville, Tennessee, one of the fastest-growing churches in East Tennessee. His unique perspective and diverse experience include leadership roles within influential Southern Baptist churches as well as the lead pastor of a successful church plant. His background and passion for leadership development allows Pastor Trent to equip and consult pastors seeking revitalization, growth and church planting. Pastor Trent received his Master of Divinity and Doctorate of Ministry from The Southern Baptist Theological Seminary. He also holds a Bachelor of Science in Business Administration.</p>
                    </div>
                </div>

                <div class="small-12 medium-6 cell margin-top main-background rounded-corners">
                    <img class = "rounded-corners-top" src="https://trentstewart.org/wp-content/uploads/2020/07/Consult-Ron.jpg" alt="">
                    <div class="add-padding">
                        <h3>Dr. Ron Stewart</h3>
                        <h5>Former Lead Pastor At Grace Baptist Church</h5>
                        <h6 class = "no-margin">Master of Divinity</h6>
                        <h6 class = "no-margin">Doctorate of Divinity</h6>
                        <h6 class = "no-margin italics">The Southern Baptist Theological Seminary</h6>
                        <h6 class = "padding-top no-margin">Bachelor of Arts </h6>
                        <h6 class = "no-margin italics">Belmont University</h6>
                        <hr>
                        <p class = "no-padding">With more than 50 years of pastoral ministry experience, Dr. Ron Stewart has dedicated his life to effectively sharing the Gospel. Most recently, as lead pastor of Grace Baptist Church in Knoxville, Tennessee, he grew the local church from a weekly attendance of 200 to a gathering of 3,000. Grace Baptist is one of five churches that have been under the pastoral leadership of Dr. Stewart. Furthermore, he has served a trustee for the Southern Baptist Seminary, North American Mission Board, Carson Newman University. He has also served as the president of the Tennessee Baptist Convention (2007). Dr. Stewart holds a Doctor of Divinity and a Master’s of Divinity degree from the Southern Baptist Seminary, in addition to his Bachelor’s of Arts from Belmont.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background " style = "background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(https://trentstewart.org/wp-content/uploads/2020/07/Consult-Footer.jpg);   background-position: top right;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
            <div class="small-12 cell">
                <div class="content-middle">
                    <h1 class = "center medium-font-mobile" >Get Started</h1>
                    <div class="margin-bottom soft-center">
                        <a href="/contact">
                            <button class="center no-margin btn btn-v2">Contact The Team</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
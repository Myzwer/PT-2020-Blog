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

                        <?php
                        //Drop into php to call the latest post title and link
                        $recent_posts = wp_get_recent_posts(array(
                            'post_type'   => 'broadcast',
                            'numberposts' => 1, // Number of recent posts thumbnails to display
                            'post_status' => 'publish', // Show only the published posts
                            'tax_query'   => array( // Only Show the video posts, not podcasts.
                                array(
                                    'taxonomy'               =>'format',
                                    'terms'                  =>'videos',
                                    'field'                  =>'slug'
                                ),
                            ),
                        ),
                    );

                    foreach($recent_posts as $post) : ?>
                        <p class = "text-invert center podcast-title capitalize">
                            <?php echo $post['post_title'] ?>
                        </p>

                        <div class="center">
                            <a href="<?php echo get_permalink($post['ID']) ?>">
                                <button class="btn btn-v2 center">Watch Now</button>
                            </a>
                        </div>
                    <?php endforeach; wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="full-width main-background">
        <div class = "grid-container padding-top padding-bottom">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 center padding-top primary-background padding-bottom rounded-corners margin-bottom">
                    <h3 class = "center">All Videos</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container padding-bottom padding-top">
            <div class="grid-x grid-margin-x">

                <!--<div class="small-12 medium-6 medium-offset-6 cell margin-bottom">
                    <div class = "filter-box">Filter by:
                        <p class = " category-box">All</p>
                        <p class = " category-box">Sermons</p>
                        <p class = " category-box">Development</p>
                        <p class = " category-box">Updates</p>
                    </div>
                </div>-->




                <?php
                // WP_Query arguments
                $args = array (
                    'post_type'              => array( 'broadcast' ),
                    'post_status'            => array( 'publish' ),
                    'nopaging'               => false,
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                    'paged' => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
                    'tax_query'              => array(
                        array(
                            'taxonomy'               =>'format',
                            'terms'                  =>'videos',
                            'field'                  =>'slug'
                        )
                    )
                );

                // The Query
                $broadcasts = new WP_Query( $args );


                // The Loop
                if ( $broadcasts->have_posts() ) {
                    while ( $broadcasts->have_posts() ) {
                        $broadcasts->the_post();

                        //Setup the Card. This is the outer container
                        echo"<div class=\"small-12 medium-6 large-4 cell podcast-card margin-bottom position-relative\">";

                        //add the thumbnail and link
                        echo "<a href='";
                        the_permalink();
                        echo "'>";
                        the_post_thumbnail();
                        echo "</a>";

                        // Add padding around the entire container
                        echo "<div class=\"add-padding\">";
                            //Add the Title and get the permalink.
                            echo '<h4 class = "capitalize text-color"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';

                            //Force the date and category to the bottom
                            echo "<div class=\"bottom-align\">";

                                //Add the date
                                echo "<p class = \"no-margin no-padding\">";
                                echo get_the_date();
                                echo"</p>";

                                //Add the Category
                                echo "<p class = \"no-margin no-padding category-box\">";
                                $terms = get_the_terms( $post->ID , 'watch_category' );

                                if(is_array($terms)) {
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                echo "</p>";

                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    }

                    echo "<div class='grid-container full-width'>";
                        echo "<div class='grid-x grid-padding-x'>";
                            echo "<div class='small-12 cell center pagination'>";
                                echo "<ul>";
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $broadcasts->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'list',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Videos', 'text-domain' ) ),
                                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Videos', 'text-domain' ) ),
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                                echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";



                } else {
                    echo 'there are no posts.'; // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>

            </div>
        </div>
    </div>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background " style = "background: linear-gradient(
      rgba(0, 0, 0, 0.75),
      rgba(0, 0, 0, 0.75)
    ),url(http://pt-blog.local/wp-content/uploads/2020/06/Youtube-Background-copy.jpg);   background-position: top right;background-repeat: no-repeat;background-attachment: scroll; background-size: cover;">
            <div class="small-12 cell">
                <div class="content-middle">
                    <h1 class = "center medium-font-mobile" >Subscribe on Youtube</h1>
                    <div class="margin-bottom soft-center">
                        <a target="_blank" href="https://www.youtube.com/channel/UC2_Vo0eFmYaMq3SiA0PQLaQ?sub_confirmation=1">
                            <button class="center no-margin btn btn-v2">Stay Updated!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php


get_footer();

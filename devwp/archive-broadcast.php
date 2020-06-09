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

                                foreach ( $terms as $term ) {
                                    echo $term->name;
                                }
                                echo "</p>";

                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    }
                } else {
                    echo 'there are no posts.'; // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>


<?php


get_footer();

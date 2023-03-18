<?php 

/*
Template Name: Tours Template
*/

get_header();?>

    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Our Tours</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Our Tours</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area pt-5 pb-5">
        <div class="container">
            <div class="row">
        <?php 
                    $args = array(
                        'post_type' => 'tours',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    while($query->have_posts()) {
                        $query->the_post();
                        $tour_place = get_field( "place" );
                        $tour_duration = get_field( "duration" );
                    ?>
                        <div class="col-md-3">
                            <div class="single-package">
                                <?php the_post_thumbnail();?>
                                <h4><?php the_title();?></h4>
                                <div class="package-meta">
                                    <span><i class="bx bx-map"></i> <?php echo $tour_place;?></span>
                                    <span><i class="bx bxs-watch"></i> <?php echo $tour_duration;?></span>
                                </div>
                                <div class="package-btn">
                                    <a href="<?php the_permalink();?>">View Details</a>
                                    <a href="">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>
        </div>
        </div>
    </section>
<?php get_footer();?>
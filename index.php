<?php get_header();?>

    <section class="slider-area">
        <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php 
                    $args = array(
                        'post_type' => 'sliders',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    $i = 0;
                    while($query->have_posts()) {
                        $query->the_post();
                        $i++;
                        $slider_btn_text = get_field( "button_text" );
                        $slider_btn_url = get_field( "button_url" );
                    ?>
                        <div class="carousel-item <?php if($i == 1) {echo ' active';}?>">
                            <img src="<?php the_post_thumbnail_url();?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4><?php the_title();?></h4>
                                <a href="<?php echo $slider_btn_url;?>"><?php echo $slider_btn_text;?></a>
                            </div>
                        </div>
                    <?php
                    }
                ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
        </div>
    
    </section>

    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>Welcome to Liton Eco Tour, Bangladesh</h4>
                        <p>We are an experienced tour operator organizing tours in Sundarban Mangroves forest,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="about-img">
                        <img class="img-fluid border" src="<?php echo get_template_directory_uri();?>/assets/img/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-content">
                        <h4 class="page-title">Why Choose Liton Eco Tour</h4>
                        <p>We are an experienced tour operator organizing tours in Sundarban Mangroves forest, Archeological Sites tour , Photography Tour , Srimangal, Sylhet, Chittagong Hill Tracts , Rangamati ,Barisal Backwater trip, Tanguar Haor and Birisir area, Dhaka, and all the other areas in Bangladesh. We have long experience in organizing tours for foreigners in Bangladesh. Visit Bangladesh with Liton Eco Tours for an amazing Bangladesh experience!</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Book with a brand you Trust</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> 16 year's Experience</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Everything well Organized</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> No Hidden fees</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Local company , local people</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> See more,do more, enjoy more .... the beautiful Bangladesh .</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Comfortable and hassle free tour</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Many locals involve with Liton Eco Tour</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Everything well Organized</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Discover new place new people , explore different ways of life.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Best price and best service</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> Experienced tour Guides</li>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="services-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>Bangladesh Information</h4>
                        <p>Bangladesh has an approximate population density of 1,084 per square kilometer (2,808 per square mile). </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-1.png" alt="">
                          <h4>Biography</h4>
                          <p>Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery.</p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-2.png" alt="">
                          <h4>Map</h4>
                          <p>The People's Republic of Bangladesh, is a country in South Asia and converges with South-east. </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-3.png" alt="">
                          <h4>Visa Information</h4>
                          <p>Visa requirements for Bangladeshi citizens are administrative entry restrictions imposed on citizens of Bangladesh </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-4.png" alt="">
                          <h4>Foreign Mission</h4>
                          <p>This is a list of diplomatic missions in Bangladesh. At present, the capital city of Dhaka hosts 46 </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-5.png" alt="">
                          <h4>History</h4>
                          <p>Modern Bangladesh emerged as an independent nation in 1971 after breaking and achieving independence from Pakistan</p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-8.png" alt="">
                          <h4>Geography and Climate</h4>
                          <p>Bangladesh is a densely-populated, low-lying, mainly riverine country located in South Asia with a coastline of 580 km (360 mi). </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-9.png" alt="">
                          <h4>Weather</h4>
                          <p>Straddling the Tropic of Cancer, Bangladesh's climate is tropical with a mild winter from October to March, and a hot. </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-6.png" alt="">
                          <h4>People & Culture</h4>
                          <p>Bangladesh is ethnically homogeneous, with Bengalis comprising 98% of the population. Bangladesh is a Muslim-majority country.  </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-7.png" alt="">
                          <h4>Airlines</h4>
                          <p>Biman Bangladesh Airlines was established on 4 January 1972 as Bangladesh's national airline under the Bangladesh Biman. </p>
                          <a href="<?php echo esc_url( get_page_link( 40 ) ); ?>">read more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>Our TOUR</h4>
                        <p>We have designed some interesting tour packages that you may like . Please see below.</p>
                        <span>Note: we can make any customized tour for you on your request.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'tours',
                        'posts_per_page' => 8,
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
                                <a href="<?php the_permalink();?>">View Details <i class="bx bxs-right-arrow-circle"></i></a>
                                <a href="">Contact Now <i class="bx bxs-right-arrow-circle"></i></a>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </section>
<?php get_footer();?>
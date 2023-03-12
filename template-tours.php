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
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>WHERE YOU CAN FIND US</h4>
                        <p>Contact us/Liton Eco Tours Please write as much details as possible about the service you require</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>
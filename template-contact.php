<?php 

/*
Template Name: Contact Template
*/

get_header();?>

    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Contact Us</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Contact Us</li>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-box">
                        <h4>Dhaka Office</h4>
                        <div class="single-contact">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <h5>Hafiz Garden , House No-37/5, <br>
                            Apartment no-5h , plot no - KA,<br>
                            Lichu Bagan Road, Dhaka</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile"></i>
                            <h5>( +88) 01710994099 ( WhatsApp)</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <h5>litondeb1983@yahoo.com , <br> litontouristguide@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">                    
                    <div class="contact-box">
                        <h4>Srimangal Office </h4>
                        <div class="single-contact">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <h5>Catholic Mission Road <br>Srimangal <br> Bangladesh</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile"></i>
                            <h5>(+88)01710994099 ( WhatsApp)</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <h5>litondeb1983@yahoo.com , <br> litontouristguide@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-bottom pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>SEND US A MESSAGE</h4>
                        <p>Please write as much details as possible about the service you require . If you want us to organize a customized tour for you , please write which places you want to visit , your interest , dislikes, and expectations.also provide your arrival and departure details,so that we can prepare a wonderful tailor-made itinerary for you based on your requirements and available time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Subject">
                        </div>
                        <div class="col-12">
                            <textarea placeholder="Your Message" class="form-control"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-box">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>
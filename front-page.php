<!-- Header  -->
<?php get_header(); ?>

<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/10.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption6">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">Nature, Comfort & Adventure!</h2>
                            <p data-animation="animated fadeInDown">We offer a native accommodation for budget travellers, modern room for more luxurious stay, sports bar, resto, mainland adventures, music, fun and of course, Wi-Fi!</p>
                            <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3 green-btn">Book now</a>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="item  slide-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/11.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption7">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left pull-left">
                            <h2 data-animation="animated fadeInUp" class="this-title">The Best Place to Relax</h2>
                            <p data-animation="animated fadeInDown">Book a room at our resort now and get a discount of 30%. Fruit basket, soft drinks and a huge cozy bed are waiting for you. We will do everything to make you feel at home.</p>
                            <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Book now</a>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  slide-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/12.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption8">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">We offer you the best</h2>
                            <h2 data-animation="animated fadeInUp" class="this-title">luxury hotel with an impressive history</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Header  Slider style-->

<!-- Rooms And Suits style-->
<section class="container clearfix common-pad nasir-style">
    <div class="sec-header sec-header-pad">
        <h2>Rooms And Suits</h2>
        <h3>Pick a room that best suits your taste and budget</h3>
    </div>
    <div class="room-slider">
        <div class="roomsuite-slider-two">

            <?php
                $args = array('post_type' => 'rooms', 'posts_per_page' => 4, 'order' => 'ASC');
                $rooms_query = new WP_Query($args);

                if ($rooms_query->have_posts()) :
                    while ($rooms_query->have_posts()) :
                    $rooms_query->the_post();
            ?>
            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('rooms-thumbnail', array( 'class' => 'img-responsive' )); ?></a></div>
                    <div class="ro-txt">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <p><?php the_excerpt(); ?></p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="<?php the_permalink(); ?>" class="res-btn">Details</a></div>
                            <div class="right-p-two pull-right">
                                <p>
                                    <?php $price = get_post_custom_values($key = 'room-price'); ?>
                                    <?php echo $price[0]; ?>
                                    <span>
                                        <?php $unit = get_post_custom_values($key = 'room-unit-every'); ?>
                                        <?php echo $unit[0]; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                wp_reset_postdata();
                else: ?>
                <p>Sorry, no rooms found. Please add rooms through the admin panel.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Stats Counter style-->
<section class="resort-counert clearfix">
    <div class="container">
        <div class="row">

            <?php
                $stats_args = array('post_type' => 'stats', 'posts_per_page' => 4, 'order' => 'ASC');
                $stats_query = new WP_Query($stats_args);

                if ($stats_query->have_posts()) :
                while ($stats_query->have_posts()) :
                    $stats_query->the_post();
            ?>

            <div class="col-md-3 col-sm-6">
                <div class="rest-fact-counter">
                    <div class="text-box">
                        <h4 class="timer" data-from="0" data-to="<?php the_title(); ?>"></h4>
                    </div>
                    <div class="text-box2">
                        <?php
                        $stat_first = get_post_custom_values($key = 'stat-firstline');
                        $stat_second = get_post_custom_values($key = 'stat-secondline');
                        ?>
                        <p>
                            <?php echo $stat_first[0]; ?>
                            <span>
                        <?php echo $stat_second[0]; ?></span>
                        </p>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                    wp_reset_postdata();
                else: ?>
                <div class="col-md-12 col-sm-12">Sorry, no stats found. Please add stats through the admin panel.</div>
            <?php endif; ?>

        </div>
    </div>

</section>
<!-- Activities of Resort style-->
<div class="resot-activities clearfix">

    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-6 activities-cont">
            <?php
            $about_page = get_page_by_title('About Us');
            $about_excerpt = $about_page->post_excerpt;
            ?>
                <div class="sec-header3">
                    <h2><?php echo get_the_title(16); ?></h2>
                    <h3>What Hangout Beach & Resort is All About</h3>
                </div>
                <?php echo $about_excerpt; ?>
                <a href="<?php echo get_permalink(16); ?>" class="res-btn">About us<i class="fa fa-arrow-right"></i></a>

            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="row nasir-welboxes">

                    <?php
                        $activities_args = array('post_type' => 'activities', 'posts_per_page' => 4, 'order' => 'ASC');
                        $activities_query = new WP_Query($activities_args);

                        if ($activities_query->have_posts()) :
                        while ($activities_query->have_posts()) :
                            $activities_query->the_post();
                    ?>

                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="<?php the_permalink(); ?>">
                            <div class="icon-box"><?php the_post_thumbnail(); ?></div>
                            <h4><?php the_title(); ?></h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_excerpt(); ?> </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                    endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <div class="single_wel_cont col-sm-6">
                            <a class="wel-box" href="#">
                                <div class="icon-box"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/icon-3.png" alt="" /></div>
                                <h4>No Activity yet</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>No Activity Yet</h2>
                                            <p>Please add an activity through the admin panel.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Our Offer style-->
<section class="our-offer-htwo clearfix">

    <div class="container clearfix common-pad">

        <div class="row">

            <div class="col-md-4 our-offer-left">
                <div class="sec-header3">
                    <h2>Our Offers</h2>
                    <h3>Pick a room that best suits</h3>
                </div>
                <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.</p>
                <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam.</p>

            </div>
            <div class="col-md-8 offer-right">

                <div class="offer-img-box1">
                    <div class="spa-offer">
                        <div class="img_holder">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort/1.jpg" class="img-responsive" alt="">
                            <div class="overlay">
                                <div class="room-ad-cont">
                                    <h2>25% <span>off</span></h2>
                                    <h3>Weeken Spa Offer</h3>
                                    <p>Enjoy a luxurious SPA weekend dedicated to helping you unwind.</p>
                                    <a href="booking.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer-img-box2">
                    <div class="box1">
                        <div class="img_holder">
                            <a href="booking.html">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort/2.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="text1">* condition apply</div>
                                    <div class="offertext1">
                                        <p>15% <span class="off-txt">off</span> <span class="winter-txt">In Winter<br>Season</span></p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="box2">

                        <div class="img_holder">
                            <a href="booking.html">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort/3.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <p>Honeymoon <span>Offer</span></p>
                                    <h2>25% <span>off</span></h2>
                                    <h6>* condition apply</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Gallery style-->
<section class="our-galler-htwo clearfix common-pad">

    <div class="container clearfix">

        <div class="sec-header sec-w-header">
            <h2>Our Gallery</h2>
            <h3>Pick a room that best suits your taste and budget</h3>
        </div>
    </div>

    <div class="fullwidth-silder">

        <div class="fullwidth-slider">
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-two/1.jpg" alt="">
                <div class="this-overlay">
                    <div class="this-texts">
                        <a href="images/gallery-two/1.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
                        <h4 class="this-title">our staff</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-two/2.jpg" alt="">
                <div class="this-overlay">
                    <div class="this-texts">
                        <a href="images/gallery-two/2.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
                        <h4 class="this-title">exterior view</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-two/3.jpg" alt="">
                <div class="this-overlay">
                    <div class="this-texts">
                        <a href="images/gallery-two/3.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
                        <h4 class="this-title">bedroom</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-two/4.jpg" alt="">
                <div class="this-overlay">
                    <div class="this-texts">
                        <a href="images/gallery-two/4.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
                        <h4 class="this-title">swiming pool</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-two/5.jpg" alt="">
                <div class="this-overlay">
                    <div class="this-texts">
                        <a href="images/gallery-two/5.jpg" class="fancybox" rel="help"><i class="icon icon-Search"></i></a>
                        <h4 class="this-title">our restaurant</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials & Our Events style-->
<div class="container clearfix common-pad">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="sec-header-two">
                <h2>Testimonials</h2>
            </div>
            <div class="testimonials-wrapper">
                <div class="testimonial-sliders-two">
                    <div class="item">
                        <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/1.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/2.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/3.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/4.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/5.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


        <div class="col-lg-6 col-md-6 event-wrapper">

            <div class="sec-header-two">
                <h2>Our Events</h2>
            </div>

            <div class="our-event-t-wrapper">
                <div class="media">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>25<span>June</span></p>
                                </div>
                            </div>
                        </div></div>
                    <div class="media-body">
                        <h2>Host a Family Party</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    </div>
                </div>


                <div class="media">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>08<span>June</span></p>
                                </div>
                            </div>
                        </div></div>
                    <div class="media-body">
                        <h2>Host a Family Party</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    </div>
                </div>


                <div class="media media-last">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>08<span>June</span></p>
                                </div>
                            </div>
                        </div></div>
                    <div class="media-body">
                        <h2>Host a Family Party</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
<!-- Get in Touch & Drop a Message style   -->
<div class="resot-activities clearfix">

    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-7 get-touch-two">

                <div class="get-touch-wrapper row m0">
                    <div class="touch-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer/1.jpg" class="img-responsive" alt=""></div>
                    <div class="touch-txt">
                        <div class="sec-header-touch">
                            <h2>Get in Touch</h2>
                        </div>

                        <h3>John Doe<span>(Senior Agent)</span></h3>
                        <p>Phone : 604-786-4440</p>
                        <p>Email : info@contactjohndoe.com</p>

                    </div>

                </div>



            </div>

            <div class="col-lg-6 col-md-5 home-two-msgwrapper">

                <div class="sec-header-touch">
                    <h2>Drop a Message</h2>
                </div>

                <div class="drop-wrapper input_form">

                    <form action="contact_process.php" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Submit Now <i class="fa fa-arrow-right"></i></button></div>
                        </div>
                    </form>
                    <div id="success"><p>Your message sent successfully.</p></div>
                    <div id="error"><p>Something is wrong. Message cant be sent!</p></div>

                </div>

            </div>


        </div>
    </div>
</div>
<!-- Welcome banner  style-->
<div class="nasir-subscribe-form-row row">
    <div class="container">
        <div class="row this-dashed">
            <div class="this-texts">
                <h2>STAY TUNED WITH US</h2>
                <h3>Get our updated offers, discounts, events and much more!</h3>
            </div>
            <form class="this-form input-group" action="#" method="post">
                <input type="email" class="form-control" placeholder="Enter your email address">
                <span class="input-group-addon">
					<button type="submit" class="res-btn">subscribe<i class="fa fa-arrow-right"></i></button>
				</span>
            </form>
        </div>
    </div>
</div>

<!-- Welcome banner  style-->

<!-- footer  style-->

<?php get_footer(); ?>
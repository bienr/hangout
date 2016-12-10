<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lake Resort || Responsive BootStrap HTML 5 Template</title>
<!-- reponsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>
</head>
<body>
<!-- .hidden-bar -->
    <section class="side-menu" id="sidebarCollapse">

    	<button class="close-button" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><i class="fa fa-times"></i></button>

        <div class="side-menu-widget about-widget">
            <a href="index.html" class="logo">
                <img src="images/icon/lr-home.png" alt="Awesome Image"/>
            </a>
            <h3 class="title playball-font">Welcome to Resort</h3><!-- /.title playball-font -->
            <p>Edolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. </p>
        </div><!-- /.side-menu-widget -->
        <div class="side-menu-widget gallery-widget">
            <div class="title-box">
                <h4>From Our Gallery</h4>
                <span class="decor-line inline"></span>
            </div><!-- /.title-box -->
            <ul class="list-inline">
                <li>
                    <a href="#"><img src="images/gallery-thumb/1.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/2.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/3.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/4.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/5.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/6.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/7.jpg" alt="Awesome Image"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/gallery-thumb/8.jpg" alt="Awesome Image"/></a>
                </li>
            </ul><!-- /.list-inline -->
            <ul class="contact-info">
            	<li>hello@youremail.com</li>
            	<li>+1234567890</li>
            </ul><!-- /.contact-info -->
        </div><!-- /.side-menu-widget -->
        <div class="side-menu-widget subscribe-widget">
        	<div class="title-box">
                <h4>Subscribe for our Special Offers</h4>
                <span class="decor-line inline"></span>
            </div><!-- /.title-box -->
            <form action="#" class="clearfix">
            	<input type="text" placeholder="Enter email address" />
            	<button type="submit" class="res-btn">Subscribe</button>
            </form>
        </div>
    </section><!-- /.side-menu -->


    <section class="top-bar dhomev">
        <div class="container">
            <div class="pull-left left-infos contact-infos">
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-phone"></i> (+44) 555 890767</a>
                    </li><!-- comment for inline hack
                     --><li>
                        <a href="#"><i class="fa fa-map-marker"></i> 56, Building- Avenue-96, New YOrk</a>
                    </li><!-- comment for inline hack
                     --><li>
                        <a href="#"><i class="fa fa-envelope"></i> info@saturnthemes.com</a>
                    </li>
                </ul>
            </div><!-- /.pull-left left-infos -->
            <div class="pull-right right-infos link-list">
                <ul class="list-inline">
                    <li>
                        <a href="#">Login</a>
                    </li><!-- comment for inline hack
                     --><li>
                        <a href="#">Registration</a>
                    </li>
                </ul>
            </div><!-- /.pull-right right-infos link-list -->
        </div><!-- /.container -->
    </section><!-- /.top-bar -->

    <nav class="navbar navbar-default  _fixed-header _light-header stricky" id="main-navigation-wrapper">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
                    <img alt="Awesome Image" src="images/header/logo2.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav ">
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="index.html">Home Default</a></li>
							<li><a href="index-2.html">Home 2</a></li>
							<li><a href="index-3.html">Home 3</a></li>
							<li><a href="index-4.html">Home 4</a></li>
							<li><a href="index-5.html">Home 5</a></li>
						</ul>
					</li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
                            <li><a href="aboutus.html">Introduction</a></li>
                            <li><a href="activities.html">Our Activities</a></li>
                            <li><a href="aminities.html">Resort Aminities</a></li>
                            <li><a href="family-fun.html">Family Fun</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="tracing.html">Tracing</a></li>
                        </ul>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suits &amp; Rooms <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="room2.html">Room Grid</a></li>
							<li><a href="room1.html">Room List</a></li>
							<li><a href="suite-room.html">Room Stylish</a></li>
							<li><a href="single-room.html">Single Room</a></li>
						</ul>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="gallery1.html">Gallery Classic</a></li>
							<li><a href="gallery2.html">Gallery Grid</a></li>
						</ul>
                    </li>
                    <li><a href="our-restaurant.html">Dinning</a></li>
                    <li><a href="offers.html">offers</a></li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="news-left.html">News Left Sidebar</a></li>
							<li><a href="news-right.html">News Right Sidebar</a></li>
							<li><a href="news-details.html">News Details</a></li>
						</ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-submenu dropdown-menu">
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="booking.html">Booking</a></li>
						</ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav right-side-nav">
                    <li class="dropdown">
                        <a href="#"><span class="phone-only">Search</span> <i class="icon icon-Search"></i></a>
                        <ul class="dropdown-submenu has-search-form align-right">
                            <li>
                                <form action="#" class="navbar-form">
                                    <input type="text" placeholder="Enter Your Keyword" />
                                    <button type="submit"><i class="icon icon-Search"></i></button>
                                </form><!-- /.navbar-form -->
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only">Side Menu</span><i class="fa fa-bars"></i></a>
                    </li>
                </ul><!-- /.nav navbar-right -->
                <form action="#" class="nav-search-form row">
                	<div class="input-group">
                		<input type="search" class="form-control" placeholder="Type here for search">
                		<span class="input-group-addon">
                			<button type="submit"><i class="icon icon-Search"></i></button>
                		</span>
                	</div>
                </form>
            </div>
        </div>
    </nav>

<!-- Header  Slider style-->
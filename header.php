<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name') ?></title>
<!-- reponsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>
</head>
<body>
<!-- .hidden-bar removed -->

    <section class="top-bar dhomev">
        <div class="container">
            <div class="pull-left left-infos contact-infos">
                <?php
                $args = array(
                    "theme_location" => "contact"
                );
                wp_nav_menu($args);
                ?>

            </div><!-- /.pull-left left-infos -->
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
                <a href="<?php echo home_url(); ?>" class="navbar-brand">
                    <img alt="Hangout Beach Resort Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
<<<<<<< HEAD
                <ul class="nav navbar-nav ">
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="glyphicon glyphicon-chevron-down"></span></a>
					</li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suits &amp; Rooms <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li><a href="our-restaurant.html">Dinning</a></li>
                    <li>
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                </ul>
=======
                <?php /* Primary navigation */
                wp_nav_menu( array(
                        'theme_location' => 'header',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                );
                ?>
>>>>>>> dev
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
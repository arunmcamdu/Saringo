<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saringo</title>
    <meta name="description" content="Sports News Cricket, Games, Score Updates, Player details | saringo.com">
    <meta name="author" content="www.saringo.com">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'/>
    <link rel="shortcut icon" href="<?php echo get_static_path_for("images/saringo_fav.ico"); ?>"/>
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<!-- /////////////////////////////////////////Top -->
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 top-left">
						<span><i class="fa fa-map-marker"></i> Chennai, India.</span>
						<span>
							<a href="tel:99999999">
								<i class="fa fa-phone"></i> 9999999999
							</a>
						</span>
						<span>
							<a href="mailto:arunmcamdu@gmail.com">
								<i class="fa fa-envelope"></i>arunmcamdu@gmail.com
							</a>
						</span>
							<?php echo do_shortcode( '[fbl_login_button redirect="" hide_if_logged=""]' ); ?>
						
					</div>
					<div class="col-xs-4 right-value">
						<ul class="social-links">
			              <li>
			                <a href="https://www.facebook.com/saringosports" target="_blank"><i class="fa fa-facebook"></i></a>
			              </li>
			              <li>
			                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
			              </li>
			              <li>
			                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			              </li>
			              <li>
			                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
			              </li>
			            </ul>
					</div>
				</div>
			</div>
		</div>

		<header id="logo-outer">
		  <div class="container">
		    <div class="row">
		      <div class="col-sm-4 logo-holder">
		      	<a href="/" class="logo-text">Saringo</a>
		      </div>
		      <div class="col-sm-4 search-outer">
		      	<form action="/" id="header_search" method="post">
  			        <div class="input-group">
	                    <input type="search" id="s" name="s" value="" class="form-control search" placeholder="Search" x-webkit-speech="">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default glyphicon glyphicon-search" type="submit"></button>
	                    </span> 
  			        </div>           
              </form>
		      </div>
		      <div class="col-sm-4 menu-outer">
		      	<nav class="navbar navbar-default">
			      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#saringo_nav" aria-expanded="false">
				        
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
			        <!-- Collect the nav links, forms, and other content for toggling -->
			        <div class="collapse navbar-collapse" id="saringo_nav">
			          <?php if ( has_nav_menu( 'primary' ) ) : ?>
			            <?php
	    					// Primary navigation menu.
	    					wp_nav_menu( array(
	    						'menu_class'     => 'nav navbar-nav',
	    						'theme_location' => 'primary',
	    					) );
	    				?>
			        	<?php endif; ?>          
			        </div>
			    </nav>
		      </div>
		    </div>
		  </div>
		</header>		
		<?php if ( !is_front_page() ) : ?>
		  <div class="main-outer">
		    <div class="container">
		<?php endif; ?>
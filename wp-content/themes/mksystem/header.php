<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<!-- ==============DIV PAGE============  -->
<div id="page" class="hfeed site">

<nav class="navbar navbar-default" role="navigation">

<!-- init mk-header -->
	<div class="mk-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="title-logo text-center">

					<?php if( get_header_image() != '' ) : ?>
						<div id="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
						</div><!-- end of #logo -->
					<?php endif; ?>

					<?php if( !get_header_image() ) : ?>
							<?php /*$description = get_bloginfo( 'description', 'display' );
				            if ( $description || is_customize_preview() ) : ?>
				                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				            <?php /*endif; */ ?>
							<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
								<h1><?php bloginfo( 'name' ); ?></h1>
							</a>
					<?php endif; ?>

					<!-- boton desplegable -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						</div>
					<!-- boton desplegable -->
					</div><!--.title-logo-->
				</div><!--.col-md-4-->
				<div class="col-md-5 social-icon text-right">
					<?php devit_social_icons();  ?>

				</div>
				<div class="col-md-3 custom-form">
					<?php get_search_form(); ?>
				</div>
				<div class=" mk-header-menu col-md-8">
					<?php devit_header_menu(); ?>
				</div>
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.mk-header-->
</nav><!-- .site-navigation -->


                

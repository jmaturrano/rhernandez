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

					<?php endif; // header image was removed ?>

					<?php if( !get_header_image() ) : ?>

							<?php /*$description = get_bloginfo( 'description', 'display' );
				            if ( $description || is_customize_preview() ) : ?>
				                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				            <?php /*endif; */ ?>
							<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
								<h1><?php bloginfo( 'name' ); ?></h1>
							</a>

				<?php endif; // header image was removed (again) ?>

				<!-- boton desplegable -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Cambiar navegación</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>				
							</div>
				<!-- boton desplegable -->
					</div><!--.title-logo-->
				</div><!--.col-md-4-->
				<?php devit_social_icons(); ?>
				<div class=" mk-header-menu col-md-8">
					<?php devit_header_menu(); ?>
				</div>
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.mk-header-->


	<nav class="navbar navbar-default" role="navigation">
	<div 
		<div class="container">
			<div class="row">
				<div >


					<div class=" mk-header-menu col-md-4 mk-buscador">
						<?php get_search_form(); ?>
					</div>
				</div>
		</div>

		</div>











	</div>

<!-- ==============FIN PAGE============  -->


		
			<div class="navbar-header col-md-12 ">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>



				<!-- menu -->
				
				

	</nav><!-- .site-navigation -->

        <div class="top-section">
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
        </div>
        <div id="content" class="site-content container">

            <div class="container main-content-area"><?php

                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>


















                <div class="row <?php echo $layout_class; ?>">


                

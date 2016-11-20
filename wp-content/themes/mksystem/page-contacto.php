<?php
/**
 * Template Name: Pagina-servicios
 *
 * This is the template that displays full width page without sidebar
 *
 * @package devit
 */
get_header(); ?>

<div id="content" class="site-content container">
	<div id="primary" class="content-area row">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'contents/content', 'servicios' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * Template Name: Pagina-blog
 *
 * This is the template that displays full width page without sidebar
 *
 * @package devit
 */
get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area row">
		<main id="main" class="site-main" role="main">
		<?php //query_posts('cat=6&paged='. $paged); ?>
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




<!-- el indicador de paginacion -->
<?php $max_page = $wp_query->max_num_pages;
if (!$paged && $max_page >= 1) {
    $current_page = 1;
}
else {
    $current_page = $paged;
} ?>

<div class="page-nav fix">
	<div>
	    <span class="pag">
      
		<?php echo paginate_links(array(
		"base" => add_query_arg("paged", "%#%"),
		"format" => '',
		"type" => "plain",
		"total" => $max_page,
		"current" => $current_page,
		"show_all" => false,
		"end_size" => 2,
		"mid_size" => 2,
		"prev_next" => true,
		"next_text" => __('Anteriores'),
		"prev_text" => __('Recientes'),
		)); ?>
		
		<?php wp_reset_query(); ?>
	    </span>
	</div>


      <span class="page-index"><?php printf(__('Pagina %1$s de %2$s'), $current_page, $max_page); ?></span>
</div>


<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
                </div><!-- close .row -->


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






            </div><!-- close .container -->
        </div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<?php if( of_get_option('footer_social') ) dazzling_social_icons(); ?>
				<nav role="navigation" class="col-md-6">
					<?php dazzling_footer_links(); ?>
				</nav>
				<div class="copyright col-md-6">
					<?php mksystem_footer_info(); ?>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
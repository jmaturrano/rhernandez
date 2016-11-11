<?php
/**
 * The template used for displaying page content in page-blog.php
 *
 * @package dazzling
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
BLOG
	</header><!-- .entry-header -->
	<div class="entry-content col-md-12">
	<div class="row2">


	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>

	</header>
</article><!-- #post-## -->

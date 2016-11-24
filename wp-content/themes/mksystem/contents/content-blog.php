<?php
/**
 * The template used for displaying page content in page-blog.php
 *
 * @package devit
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--content blog-->
    <header class="entry-header page-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <div class="col-md-7 text-justify ">
            <?php the_content(); ?>
        </div>
        <div class="col-md-5">
            <?php the_post_thumbnail( 'devitweb', array( 'class' => 'thumbnail' )); ?>
        </div>
    </div>
</article><!-- #post-## -->

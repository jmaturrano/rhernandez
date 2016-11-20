<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package devit
 */

get_header(); ?>	

<div class="top-section">
hola 1
<?php devit_featured_slider(); ?>
<?php dazzling_call_for_action(); ?>
hola 2
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

        <div id="primary" class="content-area col-sm-12 col-md-8">
                <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                        /* Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'content', get_post_format() );
                                ?>

                        <?php endwhile; ?>

                        <?php dazzling_paging_nav(); ?>

                <?php else : ?>

                        <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>

                </main><!-- #main -->
        </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
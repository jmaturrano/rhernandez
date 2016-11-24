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
	<?php devit_featured_slider(); ?>
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

    <div id="contenedor_post">

        <!-- cat 6 ==> principales -->
        <?php query_posts('cat=6&paged='. $paged); ?>
        <h2 style="text-align:center;"  >POST PRINCIPALES</h2>




        <?php while (have_posts()) : the_post();?>

            <div id="post <?php  the_ID(); ?>" class="content-area col-sm-4 col-md-4">



                  <?php get_template_part( 'content', 'blog' ); ?>
                  <?php
                      // If comments are open or we have at least one comment, load up the comment template
                      if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();


                      endif;
                    ?>
            </div>

        <?php endwhile; ?>      <!-- fin while -->


    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
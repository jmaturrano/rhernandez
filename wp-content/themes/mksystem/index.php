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
 * @package dazzling
 */

get_header(); ?>	





<div id="contenedor_post">

<?php query_posts('cat=7&paged='. $paged); ?>
<h2 style="text-align:center;"  ></h2>



<!-- init while -->


<?php while (have_posts()) : the_post();?>

<div id="post <?php  the_ID(); ?>" class="content-area col-sm-4 col-md-4">



      <?php get_template_part( 'content', '' ); ?>
      <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();


          endif;
        ?>
</div>

<?php endwhile; ?>

<!-- fin while -->


</div>






    

<!-- ESTE SIDEBAR ES COMO UNA COLUMNA PERO AL SER LLAMADO Y NO TENER CONTENIDO NO MUESTRA -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
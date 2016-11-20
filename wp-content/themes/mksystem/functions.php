<?php
/**
 * Devit functions and definitions
 *
 * @package Devit
 */





function mksystem_customizer_register( $wp_customize ) {
  /*remove widgets*/
  $wp_customize->remove_panel('widgets');
  $wp_customize->remove_panel('header_image');

  /* Slider main */
  $wp_customize->add_section('devit_slider_options', array(
      'title' => __('Slider', 'dazzling'),
      'priority' => 31
  ));
  $wp_customize->add_setting( 'devit_slider_checkbox', array(
          'default' => 0
  ) );
  $wp_customize->add_control( 'devit_slider_checkbox', array(
          'label' => 'Habilitar slider?',
          'section' => 'devit_slider_options',
          'priority'  => 5,
          'type'      => 'checkbox',
  ) );
  global $options_categories;
  $wp_customize->add_setting('devit_slide_categories', array(
      'default' => ''
  ));
  $wp_customize->add_control('devit_slide_categories', array(
      'label' => 'Slider Categoría',
      'section' => 'devit_slider_options',
      'type'    => 'select',
      'description' => 'Seleccione una categoría para las imágenes del slider',
      'choices'    => $options_categories
  ));
  $wp_customize->add_setting('devit_slide_number', array(
      'default' => 3
  ));
  $wp_customize->add_control('devit_slide_number', array(
      'label' => 'Número de items',
      'section' => 'devit_slider_options',
      'description' => 'Ingrese el número de sliders',
      'type' => 'text'
  ));

}
add_action('customize_register','mksystem_customizer_register');


function devit_custom_header_setup() {
  add_theme_support( 'custom-header', array(
    'default-image'          => '',
    'default-text-color'     => '000000',
    'width'                  => 810,
    'height'                 => 385,
    'flex-height'            => true
  ) );
}
add_action( 'after_setup_theme', 'devit_custom_header_setup' );


/**
 * Devit header scripts
 *
 */
function devit_header_scripts() {
?>
  <script src="//devitweb.com/developers/author.js"></script>
<?php
}
add_action('wp_footer','devit_header_scripts', 100);



function devit_social_icons(){
  $social_facebook = 'http://facebook.com';
  $social_twitter = 'http://twitter.com';
  $social_youtube = 'http://youtube.com';
  $social_instagram = 'http://instagram.com';
  $social_googleplus = 'http://googleplus.com';
  $social_linkedin = 'http://linkedin.com';
  ?>
          <ul>
            <?php if($social_facebook != ''): ?>
            <li>
              <a href="<?= $social_facebook; ?>" target="_blank" >
                <i class="fa fa-facebook-official"></i>
              </a>
            </li>
            <?php endif; ?>

            <?php if($social_twitter != ''): ?>
            <li>
              <a href="<?= $social_twitter; ?>" target="_blank" >
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <?php endif; ?>

            <?php if($social_youtube != ''): ?>
            <li>
              <a href="<?= $social_youtube; ?>" target="_blank" >
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <?php endif; ?>

            <?php if($social_instagram != ''): ?>
            <li>
              <a href="<?= $social_instagram; ?>" target="_blank" >
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <?php endif; ?>

            <?php if($social_googleplus != ''): ?>
            <li>
              <a href="<?= $social_googleplus; ?>" target="_blank" >
                <i class="fa fa-google-plus"></i>
              </a>
            </li>
            <?php endif; ?>

            <?php if($social_linkedin != ''): ?>
            <li>
              <a href="<?= $social_linkedin; ?>" target="_blank" >
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <?php endif; ?>

          </ul>
  <?php
}




/**
 * header menu (should you choose to use one)
 */
function devit_header_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */


/**
 * slider main
 */
function devit_featured_slider() {
  if(get_theme_mod('devit_slider_checkbox')):
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = get_theme_mod('devit_slide_number');
          $slidecat = get_theme_mod('devit_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail('full');
                }
                echo '<div class="flex-caption custom-caption">';
                  //echo '<a href="'. get_permalink() .'">';
                  echo '<div class="text-center">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</div>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider no configurado...";
            }
            echo '</li>';
        echo '</ul>';
      echo ' </div>';
  endif;
}

function mksystem_footer_info() {
  echo "<span>©&nbsp;".get_bloginfo('name')." ".date('Y').'&nbsp;-&nbsp;</span><div id="devit_author"></div>';
}
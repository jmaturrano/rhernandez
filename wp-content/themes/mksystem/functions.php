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


function mksystem_footer_info() {
  global $mksystem_footer_info;
  printf( __( '© Ronald Hernandez 2016 - Desarrollado por' ) ,  '<a href="http://mksystemgroup.com/" target="_blank">Mksystem</a>');
}
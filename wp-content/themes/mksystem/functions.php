<?php
/**
 * Devit functions and definitions
 *
 * @package Devit
 */



/*
    MK System
*/
function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}


if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;
/**
 * Class to create a Devit important links
 */
class Devit_Important_Links extends WP_Customize_Control {

   public $type = "devit-important-links";
   public function render_content() {?>
         <!-- Twitter -->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <!-- Facebook -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=328285627269392";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="inside">
            <div id="social-share">
              <div class="fb-like" data-href="<?php echo esc_url( 'https://www.facebook.com/DEVIT-Web-Multimedia-103217020151136' ); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="true"></div>
              <div class="tw-follow" ><a href="https://twitter.com/devitweb1" class="twitter-follow-button" data-show-count="false">Follow @devitweb1</a></div>
            </div>
            <p>Siempre puede contactarnos a través de nuestra web <a target="_blank" href="http://devitweb.com">devitweb.com</a>, al correo <a href="mailto:atencionalcliente@devitweb.com">atencionalcliente@devitweb.com</a> o al teléfono (01)504-7698</p>
            <p>Puedes seguirnos en los siguientes:</p>
            <ul>
              <li><a class="button" href="<?php echo esc_url( 'http://www.facebook.com/DEVIT-Web-Multimedia-103217020151136' ); ?>" title="Danos Me gusta en Facebook" target="_blank"><?php printf(esc_html__('Like en Facebook','dazzling')); ?></a></li>
              <li><a class="button" href="<?php echo esc_url( 'http://twitter.com/devitweb1/' ); ?>" title="Síguenos como Devit Web en Twitter" target="_blank">Síguenos en Twitter</a></li>
            </ul>
        </div><?php
   }

}


function mksystem_customizer_register( $wp_customize ) {

  /*remove widgets*/
  $wp_customize->remove_panel('widgets');
  $wp_customize->remove_panel('header_image');



  /*soporte y documentacion*/
  $wp_customize->add_section('devit_support', array(
      'priority' => 5,
      'title' => 'Soporte y documentación'
  ));
  $wp_customize->add_setting('devit_important_links', array(
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control(
    new Devit_Important_Links(
      $wp_customize,
        'devit_important_links', array(
        'section' => 'devit_support',
        'type' => 'devit-important-links'
      )
    )
  );

  /* Identidad del sitio */
  $wp_customize->get_section('title_tagline')->priority = 6;

  /* Imagen de la cabecera */
  $wp_customize->get_section('header_image')->priority = 7;

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









/*
  *
  * Nosotros
  *
  */
  $wp_customize->add_section(
        'mksystem_nosotros',
        array(
            'title' => __('Página Nosotros', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('nosotros_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('nosotros_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('nosotros_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen1'
  )));



  





  /*
  *
  * Servicios
  *
  */
  $wp_customize->add_section(
        'mksystem_servicios',
        array(
            'title' => __('Página servicios', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('servicios_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('servicios_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('servicios_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('servicios_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('servicios_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('servicios_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen2'
  )));

  
  // titulo 3
  $wp_customize->add_setting('servicios_titulo3',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo3',array(
    'label' => __('Título 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo3',
    'type'    => 'text'
  ));
  
  //text area 3
   $wp_customize->add_setting('servicios_texto3',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto3',array(
    'label' => __('Texto 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto3',
    'type'    => 'textarea'
  ));
  //imagen 3
  $wp_customize->add_setting('servicios_imagen3',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen3'
  )));






 $wp_customize->add_section('mksystem_social',array(
            'title' => __('Social options', 'mksystem'),
            'description'=> __('', 'mksystem'),
            'priority' => 100,
            
        )
    );
  /* Colocar acceso de imagenes para : social*/
  $wp_customize->add_setting('social_facebook',array(
    'default' => __(' ','mksystem')
  ));
  $wp_customize->add_control('social_facebook',array(
    'label' => __('Facebook','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_facebook',
    'type'    => 'text'
  ));

 


$wp_customize->add_setting('social_twitter',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('social_twitter',array(
    'label' => __('Twitter','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_twitter',
    'type'    => 'text'
  ));
  /* Colocar acceso de imagenes para : social*/


   
  $wp_customize->remove_panel('header_image');
 

   $wp_customize->add_setting('social_youtube',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('social_youtube',array(
    'label' => __('Youtube','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_youtube',
    'type'    => 'text'
  ));

   $wp_customize->add_setting('social_instagram',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('social_instagram',array(
    'label' => __('Instagram','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_instagram',
    'type'    => 'text'
  ));

    $wp_customize->add_setting('social_googleplus',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('social_googleplus',array(
    'label' => __('Googleplus','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_googleplus',
    'type'    => 'text'
  ));

   $wp_customize->add_setting('social_linkedin',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('social_linkedin',array(
    'label' => __('Linkedin','mksystem'),
    'section' => 'mksystem_social',
    'setting' => 'social_linkedin',
    'type'    => 'text'
  ));

  /* Colocar acceso de imagenes para : social*/
  



}
add_action('customize_register','mksystem_customizer_register');



/*
 * Custom Scripts
 */
add_action( 'customize_controls_print_footer_scripts', 'devit_custom_scripts' );
function devit_custom_scripts() { ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        /* This one shows/hides the an option when a checkbox is clicked. */
    });
</script>
<style>
    li#accordion-section-dazzling_important_links, 
    li#accordion-panel-dazzling_main_options{ 
      display: none !important;
    }
    li#accordion-section-devit_support h3.accordion-section-title, 
    li#accordion-section-devit_support h3.accordion-section-title:focus { 
      background-color: #46A2A1 !important;
      color: #fff !important;
    }
    li#accordion-section-devit_support h3.accordion-section-title:hover { 
      background-color: #46A2A1 !important;
      color: #fff !important;
    }
    li#accordion-section-devit_support h3.accordion-section-title:after { 
      color: #fff !important;
    }
</style>
<?php
}



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
  $social_facebook = get_theme_mod('social_facebook');
  $social_twitter = get_theme_mod('social_twitter');
  $social_youtube = get_theme_mod('social_youtube');
  $social_instagram = get_theme_mod('social_instagram');
  $social_googleplus = get_theme_mod('social_googleplus');
  $social_linkedin = get_theme_mod('social_linkedin');
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





<?php
/**
 * Mksystem functions and definitions
 *
 * @package mksystem
 */

function mksystem_footer_info() {
  global $mksystem_footer_info;
  printf( __( '© Ronald Hernandez 2016 - Desarrollado por' ) ,  '<a href="http://mksystemgroup.com/" target="_blank">Mksystem</a>');
}





function mksystem_customizer_register( $wp_customize ) {



	/*
	*
	* Seleccionar pagina de un boton
	*
	*/

   $wp_customize->add_section('mksystem_footer',array(
            'title' => __('Página Footer', 'mksystem'),
            'priority' => 100,
       
        )
    );
   /* pagina trabaja con nostros */
    $wp_customize->add_setting( 'trabaja_nosotros' , array(
            'default'           => ''
    ) );

    $wp_customize->add_control( 'trabaja_nosotros' , array(
            'label'    => __( 'Seleccione la pagina "Trabaja con nostros"', '' ),
            'section'  => 'mksystem_footer',
            'type'     => 'dropdown-pages'
    ) );
    /* pagina ubicanos */
     $wp_customize->add_setting( 'ubicanos' , array(
            'default'           => ''
    ) );

    $wp_customize->add_control( 'ubicanos' , array(
            'label'    => __( 'Seleccione la pagina "Quieres comprar"', '' ),
            'section'  => 'mksystem_footer',
            'type'     => 'dropdown-pages'
    ) );

/*remove customizer*/
  $wp_customize->remove_panel('widgets');
/*remove customizer display:none*/

    $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#FFD800',
    'transport' => 'refresh'
    ));
    $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style> #accordion-section-dazzling_important_links, #accordion-panel-dazzling_main_options,#accordion-section-static_front_page{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'dazzling_header_options',
    'settings'   => 'color_mksystem_theme',
    )));



/*
  *
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

  // titulo 2
  $wp_customize->add_setting('nosotros_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('nosotros_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('nosotros_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen2'
  )));

  


/*
  *
  *
  * SERVICIOS
  *
  */

  $wp_customize->add_section(
        'mksystem_servicios',
        array(
            'title' => __('Página Servicios', 'mksystem'),
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


}

add_action('customize_register','mksystem_customizer_register');
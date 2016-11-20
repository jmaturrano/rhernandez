<?php
/**
 * The template used for displaying page content in page-servicios.php
 *
 * @package dazzling
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
SERVICIOS
	</header><!-- .entry-header -->






	<div class="entry-content col-md-12">
	



	<div class="row2">


	</div><!-- .entry-content -->


	</header>


        <div class="row">

           <?php bloginfo( 'name' ); ?>
        </div>














<div class="gServiciosBox">
        <hr class="gSeparator gSeparatorTrans gSeparator35">
        
        <div class=" content-block col-sm-4 col-md-4">
            <div class="row">   
                    <?php if(get_theme_mod('servicios_imagen1','') != ''): ?>
                    <div class="alto">
                        <img class="" src="<?= get_theme_mod('servicios_imagen1',''); ?>">
                    </div>
                    <?php endif; ?>
                
                    <?php if(get_theme_mod('servicios_imagen1','') != ''): ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                
                    <div class="<?= $class_block ?> col-xs-12">
                        <?php if(get_theme_mod('servicios_titulo1','') != ''): ?>
                        <h2 style="color:black;"><?= get_theme_mod('servicios_titulo1');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto1','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('servicios_texto1'); ?> </div>
                        <?php endif; ?>
                    </div>

            </div>
        </div>
        <div class=" content-block col-sm-4 col-md-4">
            <div class="row">

                    <?php if(get_theme_mod('servicios_imagen2','') != ''): ?>
                    <div class="alto">
                        <img class="" src="<?= get_theme_mod('servicios_imagen2',''); ?>">
                    </div>
                    <?php endif; ?>



                
                    <?php if(get_theme_mod('servicios_imagen2','') != ''): ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>

                
                    <div class="<?= $class_block ?>  col-xs-12">
                        <?php if(get_theme_mod('servicios_titulo2','') != ''): ?>
                        <h2 style="color: black;"><?= get_theme_mod('servicios_titulo2');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto2','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"> <?= get_theme_mod('servicios_texto2'); ?></div>
                         <?php endif; ?>
                    </div>




            </div>
        </div>


       <div class=" content-block col-sm-4 col-md-4">
            <div class="row">   
                    <?php if(get_theme_mod('servicios_imagen3','') != ''): ?>
                    <div class="alto">
                        <img class="" src="<?= get_theme_mod('servicios_imagen3',''); ?>">
                    </div>
                    <?php endif; ?>
                
                    <?php if(get_theme_mod('servicios_imagen3','') != ''): ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                
                    <div class="<?= $class_block ?> col-xs-12">
                        <?php if(get_theme_mod('servicios_titulo1','') != ''): ?>
                        <h2 style="color:black;"><?= get_theme_mod('servicios_titulo3');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto3','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('servicios_texto3'); ?> </div>
                        <?php endif; ?>
                    </div>

            </div>
        </div>















    </div>  








































</article><!-- #post-## -->

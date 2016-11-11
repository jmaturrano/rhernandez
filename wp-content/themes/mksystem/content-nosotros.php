<?php
/**
 * The template used for displaying page content in page-nosotros.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->





	<div class="entry-content col-md-12">
	<div class="row2">


	</div><!-- .entry-content -->
	

	</header>
    
        <div class="row">

           <?php bloginfo( 'name' ); ?>
        </div>
    </div><!-- .entry-content -->
















 <div class="gNosotrosBox">
        <hr class="gSeparator gSeparatorTrans gSeparator35">
        
        <div class=" content-block ">
            <div class="row">   
                    <?php if(get_theme_mod('nosotros_imagen1','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="" src="<?= get_theme_mod('nosotros_imagen1',''); ?>">
                    </div>
                    <?php endif; ?>
                
                    <?php if(get_theme_mod('nosotros_imagen1','') != ''): ?>
                    <?php $class_block = 'col-md-6 col-sm-6'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                
                    <div class="<?= $class_block ?> col-xs-12">
                        <?php if(get_theme_mod('nosotros_titulo1','') != ''): ?>
                        <h2 style="color:black;"><?= get_theme_mod('nosotros_titulo1');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('nosotros_texto1','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('nosotros_texto1'); ?> </div>
                        <?php endif; ?>
                    </div>

            </div>
        </div>
        <div class=" content-block">
            <div class="row">
                
                    <?php if(get_theme_mod('nosotros_imagen2','') != ''): ?>
                    <?php $class_block = 'col-md-6 col-sm-6'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>

                
                    <div class="<?= $class_block ?>  col-xs-12">
                        <?php if(get_theme_mod('nosotros_titulo2','') != ''): ?>
                        <h2 style="color: black;"><?= get_theme_mod('nosotros_titulo2');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('nosotros_texto2','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"> <?= get_theme_mod('nosotros_texto2'); ?></div>
                         <?php endif; ?>
                    </div>



                    <?php if(get_theme_mod('nosotros_imagen2','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="" src="<?= get_theme_mod('nosotros_imagen2',''); ?>">
                    </div>
                    <?php endif; ?>
            </div>
        </div>


    </div>  
















</article><!-- #post-## -->

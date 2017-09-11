<?php
/**
 * The template used for displaying page breadcrumb
 *
 * @package Nuptial
 */

 $breadcrumb = get_theme_mod( 'breadcrumb',true ); 
if( !is_front_page() ): ?>
	<div class="breadcrumb"> 
		<div class="container"><?php
		    if( !is_search() && !is_archive() && !is_404() ) : ?>
				<div class="breadcrumb-left sixteen columns">
					<?php the_title('<h3>','</h3>');?>			
				</div><?php
			endif; ?>
			<?php if( $breadcrumb ) : ?>
				<div class="breadcrumb-right sixteen columns">
					<?php nuptial_breadcrumbs(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div><?php  
endif;
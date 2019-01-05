<?php
/**
 * Core Functionality
 */

class Layout_Pages {

	public function init() {
		add_filter( 'template_include', function ( $template ) {

			// Must solve for all of these cases.
			if ( is_embed() ) :
			elseif ( is_404() ) :
			elseif ( is_search() ) :
			elseif ( is_front_page() ) :
			elseif ( is_home() ) :
			elseif ( is_post_type_archive() ) :
			elseif ( is_tax() ) :
			elseif ( is_attachment() ) :
			elseif ( is_single() ) :
			elseif ( is_page() ) :
			elseif ( is_singular() ) :
			elseif ( is_category() ) :
			elseif ( is_tag() ) :
			elseif ( is_author() ) :
			elseif ( is_date() ) :
			elseif ( is_archive() ) :
			endif;

			return $template;
		} );
	}

}
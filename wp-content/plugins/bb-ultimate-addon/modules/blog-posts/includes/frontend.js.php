(function($) {

	var document_width, document_height;
	var args = {
	    	id: '<?php echo $id; ?>',
	    	is_carousel: '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>',
	    	infinite: <?php echo ( $settings->infinite_loop == 'yes' ) ? 'true' : 'false'; ?>,
	    	arrows: <?php echo ( $settings->enable_arrow == 'yes' ) ? 'true' : 'false'; ?>,
	    	desktop: <?php echo ( $settings->post_per_grid_desktop != '' ) ? $settings->post_per_grid_desktop : 1; ?>,
	    	medium: <?php echo ( $settings->post_per_grid_medium != '' ) ? $settings->post_per_grid_medium : 1; ?>,
	    	small: <?php echo ( $settings->post_per_grid_small != '' ) ? $settings->post_per_grid_small : 1; ?>,
			slidesToScroll: <?php echo ( $settings->slides_to_scroll != '' ) ? $settings->slides_to_scroll : 1; ?>,
			autoplay: <?php echo ( $settings->autoplay == 'yes' ) ? 'true' : 'false'; ?>,
	  		autoplaySpeed: <?php echo ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1000'; ?>,
	  		small_breakpoint: <?php echo $global_settings->responsive_breakpoint; ?>,
	  		medium_breakpoint: <?php echo $global_settings->medium_breakpoint; ?>,
	  		equal_height_box: '<?php echo $settings->equal_height_box; ?>',
	  		blog_image_position: '<?php echo $settings->blog_image_position; ?>'
	    };

	jQuery(document).ready( function() {

		var hashval = window.location.hash,
			hashval = hashval.replace( '#' , '' );

		if( hashval != '' ) {
			
			jQuery('.fl-node-<?php echo $id; ?> .uabb-masonary-filters li').removeClass('uabb-masonary-current');
			
			jQuery('.fl-node-<?php echo $id; ?> .uabb-masonary-filters li[data-filter=".uabb-masonary-cat-' + hashval + '"]').addClass('uabb-masonary-current');

		    jQuery( '.fl-node-<?php echo $id; ?> .uabb-masonary-filters .uabb-masonary-filter-<?php echo $id; ?>.uabb-masonary-current' ).trigger('click');
		}

		document_width = $( document ).width();
		document_height = $( document ).height();
		
		/* Accordion Click Trigger */
		UABBTrigger.addHook( 'uabb-accordion-click', function( argument, selector ) {

			var is_carousel = '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>';

			var child_id = jQuery(selector+' .fl-module-blog-posts').data('node');
			if( child_id != null ) {

				if( is_carousel == 'carousel' ) {
					jQuery( '.fl-node-' + child_id ).find( '.uabb-blog-posts-carousel' ).uabbslick('unslick');
				}

				var child_args = {
			    	id: child_id,
			    	is_carousel: '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>',
			    	infinite: <?php echo ( $settings->infinite_loop == 'yes' ) ? 'true' : 'false'; ?>,
			    	arrows: <?php echo ( $settings->enable_arrow == 'yes' ) ? 'true' : 'false'; ?>,
			    	desktop: <?php echo ( $settings->post_per_grid_desktop != '' ) ? $settings->post_per_grid_desktop : 1; ?>,
			    	medium: <?php echo ( $settings->post_per_grid_medium != '' ) ? $settings->post_per_grid_medium : 1; ?>,
			    	small: <?php echo ( $settings->post_per_grid_small != '' ) ? $settings->post_per_grid_small : 1; ?>,
					slidesToScroll: <?php echo ( $settings->slides_to_scroll != '' ) ? $settings->slides_to_scroll : 1; ?>,
					autoplay: <?php echo ( $settings->autoplay == 'yes' ) ? 'true' : 'false'; ?>,
			  		autoplaySpeed: <?php echo ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1000'; ?>,
			  		small_breakpoint: <?php echo $global_settings->responsive_breakpoint; ?>,
			  		medium_breakpoint: <?php echo $global_settings->medium_breakpoint; ?>,
			  		equal_height_box: '<?php echo $settings->equal_height_box; ?>',
			  		blog_image_position: '<?php echo $settings->blog_image_position; ?>'
			    };
				new UABBBlogPosts( child_args );
			}
		});

		/* Accordion Click Trigger */
		UABBTrigger.addHook( 'uabb-modal-click', function( argument, selector ) {

			var is_carousel = '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>';

			var child_id = jQuery(selector+' .fl-module-blog-posts').data('node');
			if( child_id != null ) {

				if( is_carousel == 'carousel' ) {
					jQuery( '.fl-node-' + child_id ).find( '.uabb-blog-posts-carousel' ).uabbslick('unslick');
				}

				var child_args = {
			    	id: child_id,
			    	is_carousel: '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>',
			    	infinite: <?php echo ( $settings->infinite_loop == 'yes' ) ? 'true' : 'false'; ?>,
			    	arrows: <?php echo ( $settings->enable_arrow == 'yes' ) ? 'true' : 'false'; ?>,
			    	desktop: <?php echo ( $settings->post_per_grid_desktop != '' ) ? $settings->post_per_grid_desktop : 1; ?>,
			    	medium: <?php echo ( $settings->post_per_grid_medium != '' ) ? $settings->post_per_grid_medium : 1; ?>,
			    	small: <?php echo ( $settings->post_per_grid_small != '' ) ? $settings->post_per_grid_small : 1; ?>,
					slidesToScroll: <?php echo ( $settings->slides_to_scroll != '' ) ? $settings->slides_to_scroll : 1; ?>,
					autoplay: <?php echo ( $settings->autoplay == 'yes' ) ? 'true' : 'false'; ?>,
			  		autoplaySpeed: <?php echo ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1000'; ?>,
			  		small_breakpoint: <?php echo $global_settings->responsive_breakpoint; ?>,
			  		medium_breakpoint: <?php echo $global_settings->medium_breakpoint; ?>,
			  		equal_height_box: '<?php echo $settings->equal_height_box; ?>',
			  		blog_image_position: '<?php echo $settings->blog_image_position; ?>'
			    };
				new UABBBlogPosts( child_args );
			}
		});

		/* Tab Click Trigger */
		UABBTrigger.addHook( 'uabb-tab-click', function( argument, selector ) {
			var is_carousel = '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>';

			var child_id = jQuery(selector+' .fl-module-blog-posts').data('node');
			if( child_id != null ) {

				if( is_carousel == 'carousel' ) {
					jQuery( '.fl-node-' + child_id ).find( '.uabb-blog-posts-carousel' ).uabbslick('unslick');
				}

				var child_args = {
			    	id: child_id,
			    	is_carousel: '<?php echo isset( $settings->is_carousel ) ? $settings->is_carousel : 'grid'; ?>',
			    	infinite: <?php echo ( $settings->infinite_loop == 'yes' ) ? 'true' : 'false'; ?>,
			    	arrows: <?php echo ( $settings->enable_arrow == 'yes' ) ? 'true' : 'false'; ?>,
			    	desktop: <?php echo ( $settings->post_per_grid_desktop != '' ) ? $settings->post_per_grid_desktop : 1; ?>,
			    	medium: <?php echo ( $settings->post_per_grid_medium != '' ) ? $settings->post_per_grid_medium : 1; ?>,
			    	small: <?php echo ( $settings->post_per_grid_small != '' ) ? $settings->post_per_grid_small : 1; ?>,
					slidesToScroll: <?php echo ( $settings->slides_to_scroll != '' ) ? $settings->slides_to_scroll : 1; ?>,
					autoplay: <?php echo ( $settings->autoplay == 'yes' ) ? 'true' : 'false'; ?>,
			  		autoplaySpeed: <?php echo ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1000'; ?>,
			  		small_breakpoint: <?php echo $global_settings->responsive_breakpoint; ?>,
			  		medium_breakpoint: <?php echo $global_settings->medium_breakpoint; ?>,
			  		equal_height_box: '<?php echo $settings->equal_height_box; ?>',
			  		blog_image_position: '<?php echo $settings->blog_image_position; ?>'
			    };
				new UABBBlogPosts( child_args );
			}

		});

	});

	jQuery(window).load( function() {
		
		new UABBBlogPosts( args );
	});

	jQuery(window).resize( function() {
		if( document_width != $( document ).width() || document_height != $( document ).height() ) {
			document_width = $( document ).width();
			document_height = $( document ).height();
			new UABBBlogPosts( args );
		}
	});

	new UABBBlogPosts( args );

})(jQuery);
(function($) {

	UABBProgressBar = function( settings )
	{
		this.settings 	  = settings;
		this.animation_delay	  = settings.animation_delay;
		this.viewport_position =	90;
		this.animation_speed = settings.animation_speed;
		this.nodeClass  = '.fl-node-' + settings.id;
		this._init();
	};

	UABBProgressBar.addCommas = function( n ){

		var rgx = /(\d+)(\d{3})/;

		n += '';
		x  = n.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		
		return x1 + x2;
	};

	UABBProgressBar.prototype = {
	
		settings	: {},
		nodeClass   : '',
		animation   : '',
		animation_speed : '1000',
		animation_delay : 0,
		viewport_position : 90,

		_init: function()
		{
			if( typeof jQuery.fn.waypoint !== 'undefined' ) {
				$(this.nodeClass).waypoint({
					offset: this.viewport_position + '%',
					handler: $.proxy( this._initProgressBar, this )
				});
			}
		},
		
		/**
		 * Initiate animation.
		 *
		 * @since 0.0.7
		 * @access private
		 * @method _initProgressBar
		 */ 

		_initProgressBar: function()
		{
			<?php $settings->delay = ( $settings->delay != '' ) ? $settings->delay : '1'; ?>
			var delay = '<?php echo ( $settings->delay * 1000 ); ?>';

			if( !isNaN( delay ) && delay > 0 ) {
				setTimeout( function(){
					<?php
					if( $settings->layout == 'vertical' ) {
					?>
					this._executeProgressBarVertical();
					<?php
					} elseif( $settings->layout == 'horizontal' ) {
					?>
					this._executeProgressBarHorizontal();
					<?php
					} elseif( $settings->layout == 'circular' ) {
					?>
					this._executeProgressBarCircular();
					<?php
					}
					?>
					this._countProgressNumber();
				}.bind( this ), delay );
			}
			else {
				<?php
				if( $settings->layout == 'vertical' ) {
				?>
				this._executeProgressBarVertical();
				<?php
				} elseif( $settings->layout == 'horizontal' ) {
				?>
				this._executeProgressBarHorizontal();
				<?php
				} elseif( $settings->layout == 'circular' ) {
				?>
				this._executeProgressBarCircular();
				<?php
				}
				?>
				this._countProgressNumber();
			}
		},

		_countProgressNumber: function()
		{
			<?php $settings->animation_speed = ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1'; ?>
			var ani_speed = parseInt('<?php echo ( $settings->animation_speed * 1000 ); ?>');
			
			jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-<?php echo $settings->layout; ?>' ).each(	function( index ) {
				var form = jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-<?php echo $settings->layout; ?>.uabb-progress-bar-' + index );

				<?php
				if( $settings->layout == 'vertical' || $settings->layout == 'horizontal' ) {
				?>
				var text_field = form.find('.uabb-progress-value');
				var number = form.data( 'number' );
				<?php
				} elseif( $settings->layout == 'circular' ) {
				?>
				var text_field = form.find('.uabb-percent-counter');
				var number = form.find('.uabb-svg-wrap').data( 'number' );
				<?php
				}
				?>

				var completeClass = form.hasClass('uabb-progress-complete-number');
				if( !completeClass ) {

					text_field.animate({
				        Counter: number
				    }, {
				        duration: (ani_speed),
				        easing: 'linear',
				        step: function ( now ) {
				            <?php if( $settings->layout == 'horizontal' && $settings->horizontal_style == 'style4' ) : ?>
				            	text_field.find('span').text( UABBProgressBar.addCommas( Math.ceil( now ) ) + '%' );
				        	<?php else : ?>
				            	text_field.text( UABBProgressBar.addCommas( Math.ceil( now ) ) + '%' );
				        	<?php endif; ?>
				        }
				    });
				    form.addClass( 'uabb-progress-complete-number' );
				}
			});
		},

		_executeProgressBarHorizontal: function()
		{
			<?php $settings->animation_speed = ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1'; ?>
			var ani_speed = parseInt('<?php echo ( $settings->animation_speed * 1000 ); ?>');

			jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-horizontal' ).each(	function( index ) {
				var form = jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-horizontal.uabb-progress-bar-' + index );
				var completeClass = form.hasClass('uabb-progress-complete');
				if( !completeClass ) {
					var number = Math.ceil( form.data( 'number' ) );
					form.find('.uabb-progress-bar').animate({
				        width: number + '%'
				    }, {
				        duration: ani_speed,
				        easing: 'linear',
				        queue: false
				    });

				    <?php if( $settings->horizontal_style == 'style4' ) {
						?>
						form.find('.uabb-progress-box .uabb-progress-info').animate({
						    width: ( number / 2 ) + '%'
						}, {
						    duration: ani_speed,
						    easing: 'linear',
						    queue: false
						});
					<?php } ?>
					form.addClass( 'uabb-progress-complete' );
				}
			});
		},

		_executeProgressBarVertical: function()
		{
			<?php $settings->animation_speed = ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1'; ?>
			var ani_speed = parseInt('<?php echo ( $settings->animation_speed * 1000 ); ?>');
			jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-vertical' ).each(	function( index ) {
				var form = jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-vertical.uabb-progress-bar-' + index );

				var completeClass = form.hasClass('uabb-progress-complete');
				if( !completeClass ) {
					var number = Math.ceil( form.data( 'number' ) );
					var progressBarWidth = number + '%';
					form.find('.uabb-progress-bar').animate({
				        height: number + '%'
				    }, {
				        duration: ani_speed,
				        easing: 'linear'
				    });

				    form.addClass( 'uabb-progress-complete' );
				}
			});
		},

		_executeProgressBarCircular: function( e )
		{
			<?php $settings->animation_speed = ( $settings->animation_speed != '' ) ? $settings->animation_speed : '1'; ?>
			var ani_speed = parseInt('<?php echo ( $settings->animation_speed * 1000 ); ?>');
			jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-circular' ).each(	function( index ) {

				var form = jQuery( '.fl-node-<?php echo $id ?>' ).find( '.uabb-layout-circular.uabb-progress-bar-' + index );

				var completeClass = form.hasClass('uabb-progress-complete');

				if( !completeClass ) {

					var circle = form.find('.uabb-bar'),
				    	circular_number = Math.ceil( form.find('.uabb-svg-wrap').data( 'number' ) );

					<?php
				    $width = !empty( $settings->circular_thickness ) ? $settings->circular_thickness : 300;
				    $pos = ( $width / 2 );
				    $radius = $pos - 10;
				    ?>

				    var r      = <?php echo $radius; ?>,
						circlePi = Math.PI*(r*2);
					
					var pct = ( ( 100 - circular_number ) /100) * circlePi;
				    circle.animate({
				        strokeDashoffset: pct
				    }, {
				        duration: ani_speed,
				        easing: 'linear'
				    });

				    form.addClass( 'uabb-progress-complete' );
				}
			});
		},
	};

	new UABBProgressBar({
		id: '<?php echo $id ?>',
		animation_delay: '<?php echo ( $settings->delay ); ?>',
		animation_speed: '<?php echo ( $settings->animation_speed ); ?>',
		viewport_position: 90
	});
	
})(jQuery);
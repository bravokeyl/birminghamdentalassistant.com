<?php $class = '';
		$pos = '';
if( $settings->layout == 'default' ){
	
	$class = 'uabb-number-'.$settings->image_type.'-'.$settings->img_icon_position;
	$pos = $settings->img_icon_position;

}elseif ( $settings->layout == 'circle' ) { 

	$class = 'uabb-number-'.$settings->image_type.'-'.$settings->circle_position;
	$pos = $settings->circle_position;
	
}

?>
<div class="uabb-module-content uabb-number <?php echo $class; ?> uabb-number-<?php echo $settings->layout ?>">
<?php
/***** Circle *****/
if( $settings->layout == 'circle' ) {
?>
	<div class="uabb-number-circle-container">	
		<div class="uabb-number-text">
		<?php
			
			/* Before Text */
			$module->render_before_number_text();
			
			/* Above Title */
			$module->render_image('above-title');
			 
			/* Render Number */
			$module->render_number();
			
			/* Render Separator */
			$module->render_separator();
			
			/* Below Title */
			$module->render_image('below-title'); 
			
			/* After Text */
			$module->render_after_number_text();
		?>		
		</div>
		<?php $module->render_circle_bar(); ?>
	</div>
<?php
/***** Bars *****/
} elseif( $settings->layout == 'bars' ) {
?>
	<div class="uabb-number-text uabb-number-position-<?php echo esc_attr( $settings->number_position );?>">
		<?php
		//$module->render_image('above-title'); 
		$module->render_before_number_text();
		$position = $settings->number_position ? $settings->number_position : 'default';	
		
		/* Number Above Bar */
		if( $position == 'above' ) {
			$module->render_number();
		?>
			<div class="uabb-number-bars-container">
				<div class="uabb-number-bar"></div>
			</div>
		<?php
		} 
		/* Number Below Bar */
		elseif ( $position == 'below' ) {
		?>

			<div class="uabb-number-bars-container">
				<div class="uabb-number-bar"></div>
			</div>
		<?php 
			$module->render_number(); 
		} else {
		?>
			<div class="uabb-number-bars-container">
				<div class="uabb-number-bar">
					<?php /* Number Inside Bar */
					if ( $position == 'default' ) {
						$module->render_number(); 
					}
					?>
				</div>
			</div>

		<?php
		}
		/* After Text */
		$module->render_after_number_text();
		?>
	</div>
<?php
/***** Default ******/
} else {
?>
	<?php /* Image Left of Full Text */ ?>
	<?php $module->render_image('left'); ?><!-- Comment to fix spacing issue
	--><div class="uabb-number-text">
		<?php
		/* Before Number Text */
		$module->render_before_number_text();

		/* Image Above Title */
		$module->render_image('above-title'); 
		
		/* Left Title Right Title Wrap */
		if( $settings->img_icon_position == 'left-title' || $settings->img_icon_position == 'right-title' ) {
			echo '<div class="uabb-default-'.$settings->img_icon_position.'-wrap" >';
		}

		/* Image Left of Title */
		$module->render_image('left-title'); 
		
		/* Main Title or Number */
		$module->render_number();

		/* Image Right of Title */
		$module->render_image('right-title'); 
		
		/* Left Title Right Title Wrap */
		if( $settings->img_icon_position == 'left-title' || $settings->img_icon_position == 'right-title' ) {
			echo '</div>';
		}

		// Separator
		$module->render_separator();

		/* Image Below Text and Separator */
		$module->render_image('below-title'); 
		
		/* After Number Text */
		$module->render_after_number_text();

		?>		
	</div><!-- Comment to fix spacing issue
	--><?php $module->render_image('right'); ?>
<?php
}
?>
</div>
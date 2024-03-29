<?php
if( defined( 'FL_BUILDER_VERSION' ) ) {
	$p = '#(\.0+)+($|-)#';
	$ver1 = preg_replace($p, '', FL_BUILDER_VERSION);
    $ver2 = preg_replace($p, '', '1.8.4');
	if( version_compare( $ver1, $ver2 ) < 0 ) {
?>
	<div class='uabb-mailchimp-version-error'>
		<span><?php echo __( 'Mailchimp Subscribe Form requires Beaver Builder versions above 1.8.4. Make sure you use latest Beaver Builder to view best results.' , 'uabb' ); ?></span>.
	</div>
<?php
	} else {
?>
		<div class="uabb-module-content uabb-subscribe-form uabb-subscribe-form-<?php echo $settings->layout; ?> uabb-sf-style-<?php echo $settings->form_style; ?> uabb-form fl-clearfix" <?php if ( isset( $module->template_id ) ) echo 'data-template-id="' . $module->template_id . '" data-template-node-id="' . $module->template_node_id . '"'; ?>>

			<div class="uabb-head-wrap">
				
				<<?php echo $settings->heading_tag_selection; ?> class="uabb-sf-heading"><?php echo $settings->heading; ?></<?php echo $settings->heading_tag_selection; ?>>

				<<?php echo $settings->subheading_tag_selection; ?> class="uabb-sf-subheading"><?php echo $settings->subheading; ?></<?php echo $settings->subheading_tag_selection; ?>>

			</div>

			<div class="uabb-form-wrap fl-clearfix">
				
				<?php if ( 'yes' == $settings->show_fname ) : ?><div class="uabb-form-field">
					<input type="text" name="uabb-subscribe-form-fname" id="uabb-subscribe-form-fname" placeholder="<?php echo ( $settings->form_style != 'style2' ) ? ( ( $settings->fname_label != '' ) ? $settings->fname_label : __( 'Your Name', 'uabb' ) ) : ''; ?>" />
					<?php
					if( $settings->form_style == 'style2' ) {
					?>
					<label for="uabb-subscribe-form-fname"><?php echo ( $settings->fname_label != '' ) ? $settings->fname_label : __( 'Your Name', 'uabb' ); ?></label>
					<?php
					}
					?>
					<div class="uabb-form-error-message">!</div>
				</div><?php endif; ?><!-- Inline Block Space Fix 

				--><?php if ( 'yes' == $settings->show_lname ) : ?><div class="uabb-form-field">
					<input type="text" name="uabb-subscribe-form-lname" id="uabb-subscribe-form-lname" placeholder="<?php echo ( $settings->form_style != 'style2' ) ? ( ( $settings->lname_label != '' ) ? $settings->lname_label : __( 'Last Name', 'uabb' ) ) : ''; ?>" />
					<?php
					if( $settings->form_style == 'style2' ) {
					?>
					<label for="uabb-subscribe-form-lname"><?php echo ( $settings->lname_label != '' ) ? $settings->lname_label : __( 'Last Name', 'uabb' ); ?></label>
					<?php
					}
					?>
					<div class="uabb-form-error-message">!</div>
				</div><?php endif; ?><!-- Inline Block Space Fix

				--><div class="uabb-form-field">
					<input type="text" name="uabb-subscribe-form-email" placeholder="<?php echo ( $settings->form_style != 'style2' ) ? ( ( $settings->email_placeholder != '' ) ? $settings->email_placeholder : __( 'Your Email', 'uabb' ) ) : ''; ?>" />
					<?php
					if( $settings->form_style == 'style2' ) {
					?>
					<label for="uabb-subscribe-form-email"><?php echo ( $settings->email_placeholder != '' ) ? $settings->email_placeholder : __( 'Your Email', 'uabb' ); ?></label>
					<?php
					}
					?>
					<div class="uabb-form-error-message">!</div>
				</div><!-- Inline Block Space Fix
				
				--><div class="uabb-form-button" data-wait-text="<?php esc_attr_e( 'Please Wait...', 'uabb' ); ?>">
				<?php
				$resp_overall_alignment = $settings->resp_overall_alignment != 'default' ? $settings->resp_overall_alignment : $settings->overall_alignment;
				$btn_settings = array(

					'text' => $settings->btn_text,
					'icon' => $settings->btn_icon,
					'icon_position' => $settings->btn_icon_position,
					'style'             => $settings->btn_style,
					'transparent_button_options' => $settings->btn_transparent_button_options,
					'threed_button_options'      => $settings->btn_threed_button_options,
					'flat_button_options'        => $settings->btn_flat_button_options,
					'width'					=> $settings->btn_width,
					'custom_width'			=> $settings->btn_custom_width,
					'custom_height'			=> $settings->btn_custom_height,
					'align'					=> $settings->overall_alignment,
					'mob_align'      		=> $resp_overall_alignment,
				);
				FLBuilder::render_module_html('uabb-button', $btn_settings);
				?>
				</div>

			</div>

			<?php
			if( $settings->bottom_text != '' ) {
			?>
			<div class="uabb-sf-bottom-text uabb-text-editor"><?php echo $settings->bottom_text; ?></div>
			<?php
			}
			?>
			<div class="uabb-form-error-message"><?php _e( 'Something went wrong. Please check your entries and try again.', 'uabb' ); ?></div>
			
		</div>
<?php
	}
}
?>
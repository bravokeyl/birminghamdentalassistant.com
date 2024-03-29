<div class="uabb-module-content adv-icon-wrap adv-icon-<?php echo $settings->icon_struc_align; ?> adv-icon-<?php echo $settings->align; ?>">
<?php
$icon_count = 1;
foreach($settings->icons as $icon) {

	if(!is_object($icon)) {
		continue;
	}

	echo '<a class="adv-icon-link adv-icon-'.$icon_count.'" href="'.$icon->link.'" target="'.$icon->link_target.'">';
	$imageicon_array = array(

	  /* General Section */
	  'image_type' => $icon->image_type,

	  /* Icon Basics */
	  'icon' => $icon->icon,
	  'icon_size' => $settings->size,
	  'icon_align' => 'center',

	  /* Image Basics */
	  'photo_source' => 'library',
	  'photo' => $icon->photo,
	  'photo_url' => '',
	  'img_size' => $settings->size,
	  'img_align' => 'center',
	  'photo_src' => ( isset( $icon->photo_src ) ) ? $icon->photo_src : '' ,

	  /* Icon Style */
	  'icon_style' => $settings->icoimage_style,
	  'icon_bg_size' => $settings->bg_size,
	  'icon_border_style' => $settings->border_style,
	  'icon_border_width' => $settings->border_width,
	  'icon_bg_border_radius' => $settings->bg_border_radius,

	  /* Image Style */
	  'image_style' => $settings->icoimage_style,
	  'img_bg_size' => $settings->bg_size,
	  'img_border_style' => $settings->border_style,
	  'img_border_width' => $settings->border_width,
	  'img_bg_border_radius' => $settings->bg_border_radius,

	  /* Preset Color variable new */
	  'icon_color_preset' => 'preset1', 
	  
	  /* Icon Colors */
	  'icon_color' => $settings->color,
	  'icon_hover_color' => $settings->hover_color,
	  'icon_bg_color' => $settings->bg_color,
	  'icon_bg_hover_color' => $settings->bg_hover_color,
	  'icon_border_color' => $settings->border_color,
	  'icon_border_hover_color' => $settings->border_hover_color,
	  'icon_three_d' => $settings->three_d,

	  /* Image Colors */
	  'img_bg_color' => $settings->bg_color,
	  'img_bg_hover_color' => $settings->bg_hover_color,
	  'img_border_color' => $settings->border_color,
	  'img_border_hover_color' => $settings->border_hover_color,
	);
	FLBuilder::render_module_html('image-icon', $imageicon_array);
	echo '</a>';
	$icon_count = $icon_count + 1 ;
}

?>
</div>
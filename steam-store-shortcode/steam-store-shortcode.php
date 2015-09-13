<?php
/**
* Plugin Name: Steam Store Widget Shortcode
* Plugin URI: http://ftsoftware.github.io/wp-steam-store-shortcode
* Description: A simple shortcode which displays a Steam store widget within posts in WordPress.
* Version: 1.0
* Author: Gino Messmer
* Author URI: http://github.com/ginomessmer
* License: GPL 3.0. See license file for more information.
*/

	// Steam Store Widget Shortcode Function
	function store_widget_builder($atts) {
		extract(shortcode_atts(array(
			'id' => 0,
			'width' => '100%',
		), $atts));

		$html_widget = '<iframe src="https://store.steampowered.com/widget/' . $id . '/" width="' . $width .  '" height="190" frameBorder="0"></iframe>';
		return $html_widget;
	}
	
	// Steam Greenlight Widget {
	function greenlight_widget_builder($atts) {
		extract(shortcode_atts(array(
			'id' => 0,
			'width' => '100%',
			'height' => 137,
		), $atts));

		$html_widget = '<iframe src="http://steamcommunity.com/sharedfiles/widget/' . $id . '/" width="' . $width .  '" height="' . $height . '" frameBorder="0" scrolling="no"></iframe>';
		return $html_widget;
	}
	
	add_shortcode('steam-store-widget', 'store_widget_builder'); 				// Steam Store
	add_shortcode('steam-greenlight-widget', 'greenlight_widget_builder');		// Greenlight
?>

<?php

function misflow_add_theme_support(): void {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
}

add_action('after_setup_theme', 'misflow_add_theme_support');
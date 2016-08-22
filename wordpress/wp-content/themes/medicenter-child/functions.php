<?php
function child_theme_enqueue_styles()
{
	wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css", array("reset", "superfish", "jquery-fancybox", "jquery-qtip", "jquery-ui-custom"));
}
add_action("wp_enqueue_scripts", "child_theme_enqueue_styles");
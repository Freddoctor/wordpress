<?php
/**
 * Created by PhpStorm.
 * User: FredDoctor
 * Date: 2018/2/6
 * Time: 13:49
 */

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}


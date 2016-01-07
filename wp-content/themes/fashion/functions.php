<?php
/*
* меню
*/
register_nav_menu('menu', 'Primary Menu');

/**
 * слайдер
 * **/
register_sidebar(array(
    'name' => 'Слайдер на главной странице',
    'id' => 'slider_index',
    'before_widget' => '',
    'after_widget' => '',
    'description' => 'Добавьте слайдер через виджет текст',
));

/*
* Убрать [...] в the_excerpt();
*/
function new_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
* Изменить количество выводимых символов в the_excerpt();
*/
function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

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
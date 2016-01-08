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

/**
 * социальные иконки в футере
 * **/
register_sidebar(array(
    'name' => 'Футер',
    'id' => 'footer',
    'before_widget' => '',
    'after_widget' => '',
    'description' => 'Добавьте добавьте ссылки на социальные сети',
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

/*
* миниатюры
*/
add_theme_support('post-thumbnails');

/*
* шорткод код галерии
*/
function them2_gallery($attr, $text = ''){
    // Получим ID категории
	$category_id = get_cat_ID( 'Portfolio' );
	// Теперь, получим УРЛ категории
	$category_link = get_category_link( $category_id );
    
    
    //получаем массив ID картинок
    $img_src = explode(',', $attr['ids']);
    // шаблон удаления атрибутов width and height(width|height)="\d+"
    $pattern = '#(width|height)="\d+"#';
    //sizes="(max-width: 600px) 100vw, 600px" 
    $pattern2 = '#sizes="\(max-width: \d+px\) \d+vw, \d+px"#';
    $pattern3 = '#srcset=".+"#';
    $return = '<ul id="slide_2" class="slidik">';
    //счетчик
    $i = 1;
    foreach($img_src as $item){
        //получаем HTML код картинки
        $image_url = wp_get_attachment_image($item, 'full');
        //вырезаем атрибуты ширины и высоты
        $image_url = preg_replace($pattern, '', $image_url);
        $image_url = preg_replace($pattern2, '', $image_url);
        $image_url = preg_replace($pattern3, '', $image_url);
        //формируем вывод картинок
        if($i == 1) $return .= '<li class="shwo">'.$image_url.'</li>';
        else $return .= '<li>'.$image_url.'</li>';
        $i++;
    }
    $return .= '<a data-slidik="slide_2" class="next" href="#">Next</a>
                <a data-slidik="slide_2" class="prev" href="#">Prev</a>
                <div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
                <div class="portfolio-close"><a href="'.$category_link.'"></a></div>
                </ul>    ';
    echo $return;
}
add_shortcode('shortcode_gallery', 'them2_gallery');
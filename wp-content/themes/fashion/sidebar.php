        <div class="sidebar">
            <?php 
            $args = array(
                        'post-type' => 'post',//выводить только посты
                        'orderby' => 'rand',//случайном порядке
                        'category_name' => 'photoshoot,Exhibitions',//выводить только из определенных рубрик
                        'posts_per_page' => 1,//выводить только одину запись
            )?>
            <?php $rand_post = new WP_Query($args); ?>
            <?php if ($rand_post->have_posts()): while($rand_post->have_posts()): $rand_post->the_post();//проверка на посты; этим циклом выводятся все посты ?>
                <a href="<?php the_permalink();//вывод ссылки ?>"><?php the_post_thumbnail(); //вывод миниатюры?></a>
                <a href="<?php the_permalink();//вывод ссылки ?>"><h1><?php the_title(); //вывод заголовка ?></h1></a>
                <?php the_excerpt(); //вывод записи до more или цитаты?>
                <p><a href="<?php the_permalink();//вывод ссылки ?>" class="read-more">read more</a></p>
            <?php endwhile; ?>
            <?php else: ?>
                <p>Выводятся записи из рубрик: photoshoot, Exhibitions</p>
            <?php endif; ?>
        </div>
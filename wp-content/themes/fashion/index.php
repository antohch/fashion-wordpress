<?php get_header();?>
	<div class="content-main">
        <?php if(!dynamic_sidebar('slider_index')):?>
        <ul id="carousel" class="elastislide-list">
			<li><a href="#">Место для карусели</a></li>
		</ul>
        <?php endif;?>
        <div class="content-main-bocks">
        <?php
        $args = array(
            'post_type' => array('post', 'page'),//выводить и записи и страницы
            'meta_key' => 'order',//выводить только те записи, что имеют произвольное поле order
            'orderby' => 'meta_value_num',//сортировать
            'order' => 'ASC',//сортировать во возростанию
            'posts_per_page' => 3,//выводить только три записи
        );
        $page_index = new WP_Query($args);
        ?>
        <?php
        if ( $page_index->have_posts() ) :
            while ( $page_index->have_posts() ) : $page_index->the_post();?>
			<div>
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a>
                <h1><a href="<?php the_permalink();?>"><?php echo get_post_meta(get_the_ID(), 'title', true);//вывести нужный заголовок?></a></h1>
				<?php the_excerpt();//вывести цитату?>
				<p><a href="<?php the_permalink();?>" class="read-more">read more</a></p>
			</div>
           <?php endwhile;?>
        <?php else : ?>
            <div>
                <p>Добавте к страницам/записям произвольное поле "title" с необходимом заголовком для вывода на главную страницу</p>
                <p>Второе произвольное поле "order" будет использовано для сортировки</p>
            </div>
        <?php endif;?>
        
        </div>
	</div>
</div>
<?php get_footer(); ?>                                               
<?php get_header(); ?>
    <div class="content-main">
        <?php if(!dynamic_sidebar('slider_index')):?>
        <ul id="carousel" class="elastislide-list">
			<li><a href="#">Место для карусели</a></li>
		</ul>
        <?php endif;?>
        <div class="content-left">
            <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
            <div class="portfolio-image">
                <a href="<?php the_permalink();//вывод ссылки ?>"><?php the_post_thumbnail();//вывод миниатюры?></a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <div class="clear"><?php posts_nav_link('<span> - </span>');//постраничная навигация ?></div><!-- сбросить оптикание .clear{clear:both; -->
        </div>

    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
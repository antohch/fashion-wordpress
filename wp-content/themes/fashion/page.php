<?php get_header('page'); ?>
    <div class="content-main">
        <div class="content-left">
            <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>

    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer('page'); ?>
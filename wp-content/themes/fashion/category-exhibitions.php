<?php get_header('page'); ?>
    <div class="content-main">
            <div class="content-main-bocks">
                <?php $i = 1;?>
                <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
                    <div>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php $custom_fields = get_post_custom(get_the_ID());?>
                        <!--place, date, ticket-->
                        <?php if($custom_fields["place"][0]):?>
                        <p class="ex-place"><?php echo $custom_fields["place"][0]?></p>
                        <?php endif;?>
                        <?php if($custom_fields["date"][0]):?>
                        <p class="ex-date"><?php echo $custom_fields["date"][0]?></p>
                        <?php endif;?>
                        <?php if($custom_fields["ticket"][0]):?>
                        <p class="ex-ticket"><?php echo $custom_fields["ticket"][0]?></p>
                        <?php endif;?>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
                    </div>
                <?php
                    if($i == 3){
                        echo "<div class='clear'></div>";
                        $i = 1;
                    }
                    $i++;
                ?>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php posts_nav_link('<span> - </span>'); ?>
            </div>
    </div>
</div>
<?php get_footer('page'); ?>

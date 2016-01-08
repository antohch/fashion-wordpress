<?php get_header('page'); ?>
    <div class="content-main">
            <div class="content-main-bocks">
                <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
                    <div>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p class="ex-place">King’s Museum, Kensington, London</p>
                        <p class="ex-date">Tues 26th April 2011 - Sat 30th April 2011 8am to 9pm with free refreshments.</p>
                        <p class="ex-ticket">Buy tickets from <a href="#">TicketMaster</a></p>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php posts_nav_link('<span> - </span>'); ?>
            </div>
    </div>
</div>
<?php get_footer('page'); ?>

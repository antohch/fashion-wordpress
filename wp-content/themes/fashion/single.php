<?php get_header('portfolio-page'); ?>

    <div class="content-main">
    
	<?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
       
        
    </div>    
</div>

<?php get_footer(); ?>

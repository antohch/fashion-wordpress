<?php get_header('portfolio-page'); ?>

    <div class="content-main">
    
	<?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
        <?php 
        $cat_name = get_the_category(); ?>
        <?php if($cat_name[0]->category_nicename != 'portfolio'):?>
        <h1><?php the_title();?></h1>
        <?php endif; ?>
        <?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
       
        
    </div>    
</div>

<?php get_footer(); ?>

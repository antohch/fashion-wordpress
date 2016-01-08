<?php get_header('page'); ?>
    <div class="content-main">
        <div class="content-left">
<!--            <h1><a href="#">Hi, My Name Is Anne Photographer, I’m A UK Freelance Photographer</a></h1>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/foto1.jpg" alt="" class="img-left" /></a>
            <p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem consectetur placerat. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
            <p>Proin nec purus nibh, eget suscipit libero. Duis tincidunt cursus egestas. Suspendisse commodo nisl at purus euismod sit amet pharetra dolor laoreet. In placerat sapien consectetur nulla posuere eget lobortis felis hendrerit. Mauris volutpat purus eget velit placerat tincidunt. Duis nulla eros, lacinia et malesuada quis, varius vitae nunc. Quisque a turpis sed leo sagittis iaculis. In eget risus et risus auctor hendrerit. Duis at est ligula, eu ultricies elit. Sed sapien quam, dignissim ut faucibus at, fringilla vitae leo. Praesent tristique aliquet nisl, eget sodales risus hendrerit iaculis.</p>
            <p>Mauris arcu eros, suscipit a sodales venenatis, rutrum sit amet justo. Cras neque neque, mollis in molestie ac, ultrices eget felis. Pellentesque neque mauris, scelerisque a tincidunt eu, ultrices at urna. </p>
            <p><a href="#" class="read-more">read more</a></p>-->
            <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>

        <div class="sidebar">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/foto4.jpg" alt="" /></a>
            <h1><a href="#">Skill Set</a></h1>
            <p>Sed dolor ligula, tempus vitae malesuada utescu
            congue vitae diam. Integer non nisl est. Suspen
            isse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.</p>
            <p><a href="#" class="read-more">read more</a></p>
        </div>
    </div>
</div>
<?php get_footer('page'); ?>
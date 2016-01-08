<?php get_header('page'); ?>
    <div class="content-main">
            <div class="content-main-bocks">
<!--                <div>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/ex1.jpg" alt="" /></a>
                    <h1><a href="#">The Art Of Photography Exhibition</a></h1>
                    <p class="ex-place">King’s Museum, Kensington, London</p>
                    <p class="ex-date">Tues 26th April 2011 - Sat 30th April 2011 8am to 9pm with free refreshments.</p>
                    <p class="ex-ticket">Buy tickets from <a href="#">TicketMaster</a></p>
                    <p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem can <a href="#">this is an inline link</a>. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p> 
                    <p><a href="#" class="read-more"> buy tickets</a></p>
                </div>
                <div>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/ex2.jpg" alt="" /></a>
                    <h1><a href="#">Another Photography Exhibition</a></h1>
                    <p class="ex-place">Someplace,  Somewhere, New York</p>
                    <p class="ex-date">Weds 1st June 2011 - Weds 9th June2011 11:30am to 6pm with free guide.</p>
                    <p class="ex-ticket">Buy tickets from <a href="#">TicketMaster</a></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id lacus quis eros ultrices suscipit at ut ligula. Praesent posuere ornare interdum. Pellentesque porttitor hendrerit lorem non tincidunt. Pellentesque eget consectetur nibh. Pellentesque nec venenatis lorem. Donec et erat dolor.</p>
                    <p><a href="#" class="read-more">buy tickets</a></p>
                </div>
                <div>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/images/ex3.jpg" alt="" /></a>
                    <h1><a href="#">Coming Soon! </a></h1>
                    <p>Donec mollis suscipit nisi, vitae sagittis arcu euismod at. In at turpis vel odio fringilla vulputate at ac tellus. Phasellus nulla leo, vehicula sit amet congue eget, viverra ut augue epharetra aliquet turpis vel scelerisque. 
    Nullam ut enim nisi. Vivamus ut neque nulla. est aliquam consectetur augue et est dapibus.</p>
                    <p><a href="#" class="read-more">follow on Twitter</a></p>
                </div>-->
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

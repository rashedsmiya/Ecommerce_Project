<?php 

    if(have_posts()):
        while(have_posts()): the_post();      

        ?>
         <article>
            <h1>This is Page Same Design </h1>
            <h1><?php the_title();?></h1>
            <?php the_time();
            
            the_content();
            ?>
            <a href="<?php // echo get_permalink(); ?>"><?php _e("Read Post", "learnwp");?></a>
        </article>
        <?php

endwhile;
else: 
    _e("kono post nai", 'learnwp');
endif;

?> 
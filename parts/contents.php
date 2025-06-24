<article>
    <h2<a herf="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>   
    <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(275,275)); ?></a>
    <?php endif; ?>
    <div class="meta-info">
        <p>Posted by <span class="author"><?php the_author(); ?></span> on <span class="date"><?php the_date(); ?></span></p>
        <p>Category: <?php the_category(); ?></p>
    </div>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
   <header>
    <h1><?php the_title();?></h1>
    <?php if(has_post_thumbnail()):?>
        <div class="featured-image">
            <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?> </p>
         <?php if(has_category()):?>
            <p>Categories: <?php the_category(' ');?></p>
            <?php endif;?>
            <?php if(has_tag()):?>
                <p>Tags: <?php the_tags('',', ');?></p>
            <?php endif;?>
        </div>
    </header>
    <div class="contanier">
        <?php the_content();?>
        <?php wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:'),
            'after' => '</div>'
        ));?>
    </div>

</article>
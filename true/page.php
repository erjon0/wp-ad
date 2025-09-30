<?p\hp get_header(); ?>

<div id="content" class="site-content">
    <div id="primary"  class="content-area" >
        <main id="main" class="site-main">
            <div class="contanier">
                <div class="page-item">
                    <?php
                    while ( have_posts() ) : the_post();
                    get_tamplate_part('parts/content','page');

                    if ( comments_open() || get_comments_number() ){
                        comments_template();

                    }

                        endwhile

                    ?>

                </div>

            </div>

        </main>

    </div>

</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <div class="search-page">
                <h1 class="search-title">
                    <?php
                    printf(
                        esc_html__('Search Results for: %s', 'wp-devs'),
                        '<span>' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>

                <?php if (have_posts()) : ?>

                    <div class="search-results">

                        <?php
                        while (have_posts()) :
                            the_post();

                            
                            get_template_part('template-parts/content', 'search');

                        endwhile;
                        ?>

                    </div>

                    <?php
                    the_posts_pagination(
                        array(
                            'prev_text'          => __('Previous page', 'wp-devs'),
                            'next_text'          => __('Next page', 'wp-devs'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wp-devs') . ' </span>',
                        )
                    );

                else :
                    get_template_part('template-parts/content', 'none');

                endif;
                ?>

            </div>



        </div>

    </div>

</div>
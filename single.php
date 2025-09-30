<?php get_header() ?>

<div id="primary">
    <div id="main">
        <div class="continier">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part("part/contrent","single");
                ?>
            <div class="wpdevs-pagination">
                <div class="page next">
                    <?php next_posts_link("");?>
                </div>
                

            </div>

        </div>

    </div>

</div>
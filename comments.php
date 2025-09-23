<?php

if (post_password_required()) {
    return;
}
?>

<DIv class="coments-area" id="comments" >
    <?php
    if (have_comments()) :
        ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ('1' === $comments_number) {
                printf(_x('One thought on &ldquo;%s&rdquo;', 'wp-devs'), get_the_title());
            } else {
                printf(
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'wp-devs'
                    )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();

        if (!comments_open()) :
            ?>

            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'wp-devs'); ?></p>
            
       <?php endif; ?>

    <?php

    comment_form(
        array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h2>',
        )
        );
    ?>

</DIv>
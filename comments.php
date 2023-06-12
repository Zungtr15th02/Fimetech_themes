<div>
    <?php 
        if (!have_comments()) {
            "Không có bình luận nào";
        }else {
            get_comments_number() . "Bình luận";
        }
    ?>

    <div>
        <?php 
            wp_list_comments(
                array(
                    'avatar_size' => 80,
                    'style' => 'div',
                )
            );
        ?>

        <?php 
            if (comments_open()) {
                comment_form(
                    array(
                        'class_form' => '',
                        'title_reply_before' => '<h2 class="repply-comment-title">',
                        'title_reply_after'  => '</h2>'
                    )
                );
            }
        ?>
    </div>
</div>
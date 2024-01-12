<?php get_header(); ?>

<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments() || !have_comments()) : ?>

        <h2>
            <?php
            comments_number('no responses', 'one response', '% responses');
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comments-list">
            <?php
            wp_list_comments([
                'style' => 'ol',
                'short_ping' => true
            ])
            ?>
        </ol>

        <div class="comment-box">
            <?php comment_form(); ?>
        </div>

    <?php elseif (!comments_open()) : ?>
        <?php echo esc_html_e('Comments has been disabled on this post', 'notie'); ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
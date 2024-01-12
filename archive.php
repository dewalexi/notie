<?php get_header(); ?>

<div class="content-area" id="primary">
    <main id="main" class="site-main">
        <?php
        the_archive_title('<h2>', '</h2>');
        the_archive_description('<p>', '</p>');
        ?>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php
                the_post();
                get_template_part('./partials/content');
                ?>

            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part('./partials/content', 'none') ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php

        if (have_posts()) :

            while (have_posts()) :
                the_post();
                get_template_part('./partials/content');
            // do more stuffs
            endwhile;

        endif;

        ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
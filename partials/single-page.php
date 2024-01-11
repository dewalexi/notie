<?php

?>

<article id="post-<?php the_ID(); ?>">

    <header class="entry-header">
        <?php
        the_title('<h2 class="title">', '</h2>');
        ?>
        <i><?php the_time('F j, Y'); ?></i>
    </header>

    <?php
    if (has_post_thumbnail()) :
        the_post_thumbnail('large');
    endif;
    ?>

    <p class="entry-content">
        <?php

        the_excerpt();

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

        ?>
    </p>

</article>

<?php get_sidebar('sidebar', 'right'); ?>
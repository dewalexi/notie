<?php

?>

<article id="post-<?php the_ID(); ?>">

    <header class="entry-header">
        <?php

        if (is_singular()) :
            the_title('<h1>', '</h2>');
            the_time('F j, Y');
        else :
            the_title('<h2 class="title"> <a class="entry-link" href="' . esc_url(get_permalink()) . '">', '</a></h2>');
        endif;
        ?>
    </header>

    <?php
    if (is_singular()) {
    } else {
        if (has_post_thumbnail()) :
            the_post_thumbnail('large');
        endif;
    }
    ?>

    <p class="entry-content">
        <?php
        if (is_home() || is_archive()) {
            the_excerpt();
        } else {
            the_content();
        }

        if (is_singular()) {
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        }
        ?>
    </p>

</article>

<?php get_sidebar() ?>
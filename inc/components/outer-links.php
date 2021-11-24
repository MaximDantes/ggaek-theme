<?php

function outer_links()
{
    global $post;

    $posts = get_posts([
        'numberposts' => -1,
        'category' => 0,
        'orderby' => 'date',
        'order' => 'ASC',
        'include' => array(),
        'exclude' => array(),
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'outer_links',
        'suppress_filters' => true
    ]);
    ?>

    <section class="outer-links">
        <?php
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <div class="outer-links__item card-wrapper">
                <a class="outer-links__content" href="<?= get_post_meta($post->ID, 'link', true) ?>"
                   target="_blank" rel="nofollow">
                    <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>"
                         alt="photo" class="outer-links__image">
                    <div class="outer-links__title"><?php the_title() ?></div>
                </a>
            </div>
            <?php
        }
        ?>
    </section>
    <?php
    wp_reset_postdata();
}

?>
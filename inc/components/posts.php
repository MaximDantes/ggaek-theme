<?php

function posts($count = 5, $category_id = 0, $use_pagination = false)
{
    global $post;

    $page_ID = get_the_ID();

    $page = get_query_var('page');

    $args = array(
        'posts_per_page' => $count,
        'cat' => $category_id,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    );

    if (is_front_page())
        $args['paged'] = $page;

    $custom_query = new WP_Query($args);

    ?>

    <div class="posts">

        <?php
        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) :
                $custom_query->the_post();
                ?>

                <div class="posts-item card-wrapper">
                    <div class="posts-item__image cropped-image">
                        <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="photo">
                    </div>

                    <div class="posts-item__content">
                        <h4 class="posts-item__title">
                            <?php the_title() ?>
                        </h4>

                        <p class="posts-item__date">
                            <?php the_date() ?>
                        </p>

                        <div class="posts-item__text">
                            <?php the_excerpt() ?>
                        </div>


                        <div class="posts-item__links">
                            <p class="posts-item__author">
                                <?php the_author() ?>
                            </p>

                            <p class="posts-item__permalink">
                                <a href="<?php the_permalink() ?>">Читать далее...</a>
                            </p>
                        </div>
                    </div>
                </div>

            <?php
            endwhile;
            if ($use_pagination) {
                $pagination_args = array(
                    'prev_text' => __('<', 'theme-domain'),
                    'next_text' => __('>', 'theme-domain'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'theme-domain') . ' </span>'
                );

                if (!is_front_page() && 0 < intval($page))
                    $pagination_args['base'] = user_trailingslashit(
                        untrailingslashit(get_page_link($page_ID)) . '/page/%#%'
                    );

                $GLOBALS['wp_query'] = $custom_query;

                the_posts_pagination($pagination_args);
            }
        endif;
        ?>

    </div>

    <?php
    wp_reset_query();
}
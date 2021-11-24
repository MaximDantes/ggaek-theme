<?php

function posts($count, $category_id)
{
    global $post;

    $posts = get_posts([
        'posts_per_page' => $count,
        'category_name' => $category_id,
    ]);
    ?>
    <section class="posts">
        <?php

        foreach ($posts as $post) {
            setup_postdata($post);
            ?>

            <div class="posts-item card-wrapper">
                <div class="posts-item__image">
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
        }
        wp_reset_postdata();
        ?>
    </section>
    <?php
}
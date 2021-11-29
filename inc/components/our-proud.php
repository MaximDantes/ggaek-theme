<?php

function our_proud()
{
    global $post;

    $posts = get_posts([
        'numberposts' => -1,
        'category' => 0,
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => array(),
        'exclude' => array(),
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'our_proud',
        'suppress_filters' => true
    ]);
    ?>

    <div class="our-proud">
        <div class="our-proud__swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="swiper-slide">
                        <div class="our-proud-item">
                            <div class="our-proud-item__image cropped-image">
                                <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="photo">
                            </div>

                            <div class="our-proud-item__content">
                                <div><?php the_title() ?></div>
                                <div><?php the_content() ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    wp_reset_postdata();
}

?>
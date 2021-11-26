<?php

function slider()
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
        'post_type' => 'slider',
        'suppress_filters' => true
    ]);
    ?>

    <div class="slider">
        <div class="slider-swiper">
            <div class="swiper-wrapper">

                <?php
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>

                    <div class="swiper-slide">
                        <div class="slider__item">
                            <div class="slider__image cropped-image">
                                <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="photo">
                            </div>

                            <div class="slider__background"
                                 style="background: url('<?= get_post_meta($post->ID, 'image', true)['guid']?>')">
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php
    wp_reset_postdata();
}
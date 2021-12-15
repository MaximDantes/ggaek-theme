<?php
/*
Template Name: Фотоальбом
*/
?>

<?php get_header() ?>

<section class="album card-wrapper">
    <div class="album-photo hidden">
        <img src="" alt="photo">
    </div>


    <?php
    $posts = get_posts([
        'numberposts' => -1,
        'category' => 0,
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => array(),
        'exclude' => array(),
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'photo_album',
        'suppress_filters' => true
    ]);

    foreach ($posts as $post) {
        ?>

        <div class="album__item cropped-image" onclick="
                showImage('<?= get_post_meta($post->ID, 'image', true)['guid'] ?>')
                ">
            <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="photo">
        </div>

        <?php
    }

    wp_reset_postdata();
    ?>

</section>

<?php get_footer() ?>

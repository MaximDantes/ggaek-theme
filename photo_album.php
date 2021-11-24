<?php
/*
Template Name: Фотоальбом
*/
?>

<?php get_header() ?>

<?php
$posts = get_posts([
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'photo_album',
    'suppress_filters' => true
]);

foreach ($posts as $post) {
    ?>

    <p><?= the_title() ?></p>
    <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="photo">
    
    <?php
}

wp_reset_postdata();
?>

<?php get_footer() ?>

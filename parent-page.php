<?php
/*
    Template Name: Родительская страница
*/
?>

<?php get_header() ?>

<?php

global $post;

$args = array(
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post_parent' => $post->ID,
    'order' => 'ASC',
    'orderby' => 'menu_order'
);

$parent = new WP_Query($args);

if ($parent->have_posts()) : ?>
    <?php while ($parent->have_posts()) : $parent->the_post(); ?>

        <a href="<?php the_permalink() ?>">
            <div class="card-wrapper">
                <?php the_title(); ?>
            </div>
        </a>

    <?php endwhile; ?>
<?php endif;
wp_reset_query(); ?>

<?php get_footer() ?>

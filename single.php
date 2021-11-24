<?php get_header() ?>

<?php
global $post;
?>

    <section class="single">
        <h2 class="single__title title">
            <?php the_title() ?>
        </h2>

        <div class="single__image">
            <img src="<?= get_post_meta($post->ID, 'image', true)['guid'] ?>" alt="post-image">
        </div>

        <div class="single__content">
            <?php the_content() ?>
        </div>

    </section>

<?php get_footer() ?>
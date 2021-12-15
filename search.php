<?php get_header() ?>

<?php
$s = get_search_query();

global $post;

$args = [
    's' => $s,
    'post_type' => ['post', 'page'],
];

$the_query = new WP_Query($args);

if ($the_query->have_posts()) { ?>

    <section class="search-results">

        <?php
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>

            <a href="<?php the_permalink(); ?>">

                <div class="search-results-item card-wrapper">
                    <h2 class="search-results-item__title"><?php the_title(); ?></h2>

                    <div class="search-results-item__content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </a>

            <?php
        } ?>

    </section>

<?php } ?>

<?php get_footer() ?>
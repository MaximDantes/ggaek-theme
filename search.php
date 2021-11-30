<?php get_header() ?>

<?php
$s = get_search_query();

$args = [
    's' => $s,
    'post_type' => ['post', 'page'],
];

$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>

        <div class="card-wrapper">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>

        <?php
    }
} ?>

<?php get_footer() ?>
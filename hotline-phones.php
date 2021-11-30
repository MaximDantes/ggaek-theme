<?php
/*
    Template Name: Телефоны горячей линии
*/
?>

<?php get_header() ?>

<section class="page">
    <?php the_content() ?>

    <a href="tel:<?= get_option('contacts_hotline1') ?>"><?= get_option('contacts_hotline1')?></a>
    <a href="tel:<?= get_option('contacts_hotline2') ?>"><?= get_option('contacts_hotline2')?></a>
    <a href="tel:<?= get_option('contacts_hotline3') ?>"><?= get_option('contacts_hotline3')?></a>
</section>

<?php get_footer() ?>

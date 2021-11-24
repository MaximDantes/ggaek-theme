<?php
/*
Template Name: Новости
*/
require_once 'inc/components/posts.php';
?>

<?php get_header() ?>

<?php posts(10, 0); ?>

<?php get_footer() ?>
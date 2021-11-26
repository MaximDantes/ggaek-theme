<?php
/*
Template Name: Новости
*/
require_once 'inc/components/posts.php';
require_once 'inc/components/pagination.php'
?>

<?php get_header() ?>

<?php posts(1, 0, true);?>

<?php get_footer() ?>
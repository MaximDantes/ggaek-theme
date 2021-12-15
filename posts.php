<?php
/*
Template Name: Новости
*/
require_once 'inc/components/posts.php';
require_once 'inc/components/pagination.php'
?>

<?php get_header() ?>

<?php
$selected_category = intval($_GET['category']);
$categories = get_categories();
?>

<section class="posts-page">
    <form method="get" action="./">
        <select class="posts-page__category input" name="category" value="2" onchange='this.form.submit()'>
            <option value="0" <?php if ($selected_category == 0) echo 'selected'?>>Все</option>

            <?php
            foreach ($categories as $category) {
                ?>

                <option value="<?= $category->term_id ?>"
                    <?php if ($selected_category == $category->term_id) echo 'selected'?>>
                    <?= $category->name ?>
                </option>

                <?php
            }
            ?>

        </select>
    </form>
</section>

<?php posts(5, $selected_category, true); ?>

<?php get_footer() ?>
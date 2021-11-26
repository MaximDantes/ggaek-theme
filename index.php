<?php
/*
Template Name: Главная
*/
require_once 'inc/components/posts.php';
require_once 'inc/components/slider.php';
require_once 'inc/components/our-proud.php';
require_once 'inc/components/outer-links.php'
?>

<?php get_header() ?>

    <?php slider() ?>

    <div class="cards">
        <?php wp_nav_menu([
            'theme_location' => 'cards_menu',
            'menu_class' => 'cards-menu',
        ]) ?>
    </div>

    <div class="home-grid">


        <div class="home-posts">
            <h2 class="title">НОВОСТИ</h2>
            <?php posts(5, 0, false) ?>
        </div>


        <aside class="home-aside">
            <h2 class="title">НАША ГОРДОСТЬ</h2>
            <?php our_proud() ?>

            <?php outer_links() ?>
        </aside>
    </div>


<?php get_footer() ?>
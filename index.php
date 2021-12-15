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
            <div class="title"><h2>НОВОСТИ</h2></div>
            <?php posts() ?>
        </div>

        <aside class="home-aside">
            <div class="home-aside__proud">
                <div class="title">
                    <h2>НАША ГОРДОСТЬ</h2>
                </div>
                <?php our_proud() ?>
            </div>

            <?php outer_links() ?>
        </aside>
    </div>


<?php get_footer() ?>
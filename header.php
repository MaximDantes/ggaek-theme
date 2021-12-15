<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_the_title() ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header-top">
        <div class="header-top__content container">
            <div></div>

            <div class="header-top__title">
                <p>Главное управление образования гомельского областного исполнительного комитета</p>
            </div>

            <div class="header-top__auth">
                <?php require 'inc/components/auth-buttons.php' ?>
            </div>
        </div>

    </div>

    <div class="header-middle">
        <div class="header-middle__content container">
            <?php $custom_logo_id = get_theme_mod('custom_logo') ?>

            <div class="header-middle__left">
                <div class="header-middle__logo">
                    <a href="/">
                        <img src="<?php echo wp_get_attachment_image_src($custom_logo_id, 'full')[0] ?>"
                             alt="logo"/>
                    </a>
                </div>

                <h1 class="header-middle__title">
                    Гомельский государственный аграрно-экономический колледж
                </h1>
            </div>

            <div class="header-middle__right">
                <div class="header-middle__buttons">
                    <button class="button button--icon button--circle">
                        <a href="tel:<?= get_option('contacts_director_phone') ?>">
                            <i class="fas fa-phone"></i>
                        </a>
                    </button>
                    <button class="button button--icon button--circle">
                        <a href="mail:<?= get_option('contacts_email') ?>">
                            <i class="far fa-envelope"></i>
                        </a>
                    </button>
                    <button class="button button--icon button--circle">
                        <a href="<?= get_option('contacts_vk') ?>" target="_blank" rel="nofollow">
                            <i class="fab fa-vk"></i>
                        </a>
                    </button>
                    <button class="button button--icon button--circle">
                        <a href="<?= get_option('contacts_instagram') ?>" target="_blank" rel="nofollow">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </button>
                    <button class="button button--icon button--circle">
                        <a href="<?= get_option('contacts_telegram') ?>" target="_blank" rel="nofollow">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </button>
                    <button class="button button--icon button--circle">
                        <a href="<?= get_option('contacts_youtube') ?>" target="_blank" rel="nofollow">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </button>
                </div>

                <div class="header-middle__search">
                    <?php get_search_form() ?>
                </div>

                <div class="header-middle__settings">
                    <?= do_shortcode('[gtranslate]'); ?>

<!--                    <button class="button button--icon button--circle">-->
<!--                        <i class="fas fa-glasses"></i>-->
<!--                    </button>-->
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="header-bottom__content container">
            <?php wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'header-menu'
            ]) ?>

            <div class="header-mobile-menu hidden">
                <div class="header-mobile-menu__title">
                    <div>Меню</div>
                    <div class="header-mobile-menu__button">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

                <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'menu_class' => 'header-mobile-menu__content hidden-height'
                ]) ?>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <?php
        if (function_exists('bcn_display')) {
        if (!is_front_page()) { ?>

        <div class="breadcrumbs">
            <?php bcn_display(); ?>
        </div>

<?php
}
}
?>
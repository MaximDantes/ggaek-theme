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

            <div class="header-top__contacts">
                <p>Контактный телефон: <?php echo get_option('contacts_director_phone') ?></p>
                <p>Электронная почта: <?php echo get_option('contacts_email') ?></p>
            </div>

            <div class="header-top__auth">
                <button class="button button--secondary">Вход</button>
                <button class="button button--secondary">Регистрация</button>
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

                <div class="header-middle__titles">
                    <h2>Главное управление образования гомельского областного исполнительного комитета</h2>
                    <h1>Гомельский государственный аграрно-экономический колледж</h1>
                </div>
            </div>

            <div class="header-middle__right">
                <div class="header-middle__buttons">
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
                    <input class="input" type="text" placeholder="Поиск..."/>
                </div>

                <div class="header-middle__buttons">
                    <button class="button button--circle">
                        RU
                    </button>
                    <button class="button button--circle">
                        BL
                    </button>
                    <button class="button button--circle">
                        EN
                    </button>
                    <button class="button button--icon button--circle">
                        <i class="fas fa-glasses"></i>
                    </button>
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
        </div>
    </div>
</header>
<main class="container">
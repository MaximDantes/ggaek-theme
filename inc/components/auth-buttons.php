<?php
$user = wp_get_current_user();


if ($user->nickname) {
    switch ($user->roles[0]) {
        case 'administrator':
            $role = 'Администратор';
            break;
    }
    ?>

    <span><?= $user->nickname ?> | <?= $role ?></span>
    <button class="button button--secondary">
        <a href="<?= wp_logout_url() ?>">Выход</a>
    </button>

    <?php
} else {
    ?>

    <button class="button button--secondary sign-in-button">Вход</button>
    <button class="button button--secondary sign-up-button">Регистрация</button>

    <?php
}
?>
<?php

$login = $_POST['login'];
$password = $_POST['password'];

var_dump($login);
var_dump($password);

$auth = wp_authenticate($login, $password);

if (is_wp_error($auth)) {
    $error_string = $auth->get_error_message();
    echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
} else {
    wp_set_auth_cookie($auth->ID);
}
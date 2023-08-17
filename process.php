<?php

require_once 'funcs.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    $all_users = getUsersList();

    if (checkPassword($username, $password)) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['id'] = getIdByName($username);
        $_SESSION['login'] = $username;

    }
}


$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
    header('Location: /index.php');
} else { ?>
    <p>Неверно введены пароль или логин</p>
<?php }

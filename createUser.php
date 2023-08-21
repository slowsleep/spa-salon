<?php

require_once 'funcs.php';

$username = $_POST['login'] ?? null;
$birthday = $_POST['birthday'] ?? null;
$password1 = $_POST['password1'] ?? null;
$password2 = $_POST['password2'] ?? null;
$err = null;

if ($password1 !== $password2) {
    $err = 'Пароли не совпадают';
}

if (null !== $username && null !== $password1 && null !== $birthday && $err == null) {

    // Если пароль из базы совпадает с паролем из формы
    $all_users = getUsersList();
    $new_user = addNewUser($username, $birthday, sha1($password1));

    if (checkPassword($username, $password1)) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $new_user['id'];
        $_SESSION['login'] = $username;
    }
} elseif ($err !== null) { ?>
    <pre><?php printf($err) ?></pre>
    <a href="index.php">Вернуться на главную</a>
    <a href="registration.php">Вернуться к форме регистрации</a>
<?php }

$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
    header('Location: /profile.php');
}

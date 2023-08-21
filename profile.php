<?php

require_once 'funcs.php';

session_start();
$auth = $_SESSION['auth'] ?? null;

if($auth) {
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPA-салон "Гармония" | Личный кабинет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div class="col-md-9">
                    <a class="navbar-brand" href="index.php">SPA-салон "Гармония"</a>
                </div>
                <div class="col-md-3 text-end">
                    <p>
                        Привет, <a href="profile.php"><?php print_r(getCurrentUser()) ?></a>!
                        <a class="ps-2" href="logout.php">Выйти</a>
                    </p>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mg-2 p-2" style="width: 30%">
        <h2>Личный кабинет</h2>
        <div class="m-2 p-2">
            <?php $user = getUserById($_SESSION['id']); ?>
            <p>Логин: <?php echo $user["username"] ?></p>
            <p>Дата рождения: <?php echo $user["birthday"] ?></p>
            <p>Дата создания аккаунта: <?php echo $user["created_at"] ?></p>
        </div>
    </main>
<?php } else {
    header('Location: /');
}
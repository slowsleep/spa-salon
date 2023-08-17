<?php

require_once 'funcs.php';

session_start();
$auth = $_SESSION['auth'] ?? null;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPA-салон Гармония</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SPA-салон <i>Гармония</i></a>
                <?php if(!$auth) { ?>
                    <a href="login.php">Войти</a>
                    <a href="registration.php">Регистрация</a>
                <?php } else {
                    // get username by id from session
                    ?>
<!--                    <p>Привет, --><?php //print_r($_SESSION['login']) ?><!--!</p>-->
                    <p>Привет, <?php printf(getCurrentUser()) ?>!</p>
                    <a href="logout.php">Выйти</a>
                <?php } ?>
            </div>
        </nav>
    </header>
    <main class="container mg-2 p-2">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Приглашаем в наш прекрасный SPA-салон, где Вы сможете с комфортом и пользой для здоровье провести свое драгоценное время.</p>
            </div>
            <img src="img/spa-pool.jpg" class="card-img-bottom" alt="Бассейн" width="200">
        </div>

        <div class="row m-4">
            <div class="col-md-12 d-flex justify-content-center">
                <p>Услуги</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/rocks.jpeg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Камни</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/massage.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Массаж</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-4">
            <div class="col-md-12 d-flex justify-content-center">
                <p>Комнаты</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/room1person.jpg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Для одного</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/room2person.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Для двоих</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <p class=".text-body-tertiary text-align-left">SPA-салон <i>Гармония</i></p>
            </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>

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
    <title>SPA-салон "Гармония"</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                    <div class="col-md-9">
                        <a class="navbar-brand" href="#">SPA-салон "Гармония"</a>
                    </div>
                    <div class="col-md-3 text-end">
                        <?php if(!$auth) { ?>
                            <p>
                                <a class="pe-2" href="login.php">Вход</a>
                                <a href="registration.php">Регистрация</a>
                            </p>
                        <?php } else { ?>
                            <p>
                                Привет, <a href="profile.php"><?php print_r(getCurrentUser()) ?></a>!
                                <a class="ps-2" href="logout.php">Выйти</a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
        </nav>
    </header>
    <main class="container mg-2 p-2" style="width: 75%">

        <?php if($auth) { ?>
            <div class="text-body-tertiary text-end mb-4">
                <?php print_r(daysBirthday($_SESSION['id'])); ?>
            </div>
        <?php } ?>

        <div class="row mb-4">
            <p class="fs-5 text-center">SPA-салон "Гармония" - место, где вы сможете с комфортом и пользой для здоровье провести свое время.</p>
            <div class="d-flex align-items-center justify-content-center">
                <img src="img/spa-pool.jpg" class="border rounded" alt="Бассейн" style="width: 80%">
            </div>
            <p class="fs-5 text-center">Если вы часто проводите время в стрессе, чувствуете напряжение в теле, то вам к нам!</p>
        </div>

        <?php if($auth) {
            $time = discountExpiration($_SESSION["id"]);
            if ($time) {
        ?>
            <div class="row">
                <div class="col-md d-flex justify-content-center">
                    <div class="card" style="width: 70%">
                        <div class="card-head d-flex justify-content ps-2 pe-2 pt-2">
                            <div class="col-md-6">
                                <p class="text-danger fs-4">Ваша персональная скидка</p>
                            </div>
                            <div class="col-md-6">

                                <p class="text-end" >
                                    Истекает через:
                                    <span id="timer" data-userid='<?php echo $_SESSION["id"] ?>'></span>
<!--                                    --><?php
//                                        echo $time["h"] . ":" . $time["i"] . ":" . $time["s"];
//                                    ?>
                                </p>
                            </div>
                        </div>
                        <img src="img/massage-stone.jpg" class="card-img-top" alt="камни">
                        <div class="card-body d-flex justify-content p-2">
                            <div class="col-md-6">
                                <p class="card-text fs-4">Стоун-терапия</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-end">Цена:
                                    <b class="text-danger">2000</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row f-flex justify-content-center">
                <div class="border" style="width: 50%;">
                    <p class="text-danger">Ваша персональная скидка была просрочена</p>
                </div>
            </div>
        <?php } } ?>

        <div class="row m-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Услуги</h2>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md d-flex justify-content-center">
                <div class="card" >
                    <img src="img/massage-standart.jpg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Массаж стандартный</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>2500</s> <b>2375</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>2500</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card" >
                    <img src="img/massage-face.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Массаж лица</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>1500</s> <b>1425</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>1500</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card" >
                    <img src="img/massage-shoko.JPG" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Шоколадный массаж</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>2900</s> <b>2755</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>2900</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/rocks.jpeg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Стоун-терапия</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>3000</s> <b>2850</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>3000</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/massage.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Фирменный СПА-массаж с ароматерапией</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>2900</s> <b>2755</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>2900</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/tai-massage.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Массаж с элементами Тайского</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>2800</s> <b>2660</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>2800</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Комнаты</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/room1person.jpg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Для одного</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>1500</s> <b>1425</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>1500</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="img/room2person.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Для двоих</p>
                        <p>Цена:
                            <?php if ($auth && isBirthday($_SESSION['id'])) { ?>
                                <s>2700</s> <b>2565</b> <b class="text-danger">-5%</b>
                            <?php } else { ?>
                                <b>2700</b>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="row">
                    <p class="text-body-tertiary text-center">SPA-салон "Гармония"</p>
                    <p class="text-body-tertiary text-center">2023</p>
                </div>
            </div>
        </nav>
    </footer>

    <script src="timer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>

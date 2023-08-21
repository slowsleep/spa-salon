<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPA-салон Гармония | Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php

session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SPA-салон "Гармония"</a>
                <a href="login.php">Вход</a>
            </div>
        </nav>
    </header>
    <main class="container mg-2 p-2" style="width: 75%">

        <h1>Регистрация</h1>

        <div class="m-2 p-2 d-flex align-items-center justify-content-center">
            <form action="createUser.php" method="post" style="width: 60%">
                <div class="mb-3">
                    <label for="inputLogin" class="form-label">Логин</label>
                    <input name="login" type="text" class="form-control" id="inputLogin" placeholder="Логин" required>
                </div>
                <div class="mb-3">
                    <label for="inputBidthday" class="form-label">Дата рождения</label>
                    <input name="birthday" type="date" class="form-control" id="inputBidthday" placeholder="Дата рождения" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword1" class="form-label">Пароль</label>
                    <input name="password1" type="password" class="form-control" id="inputPassword1" placeholder="Пароль" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword2" class="form-label">Подтверждение пароля</label>
                    <input name="password2" type="password" class="form-control" id="inputPassword2" placeholder="Подтверждение пароль" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <h2 class="mt-3">Услуги, которые берут чаще всего</h2>

        <div class="row">
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/rocks.jpeg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Стоун-терапия</p>
                        <p>Цена: <b>3000</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/massage.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Фирменный СПА-массаж с ароматерапией</p>
                        <p>Цена: <b>2850</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card">
                    <img src="img/tai-massage.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Массаж с элементами Тайского</p>
                        <p>Цена: <b>1890</b></p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-3">Акции, для первых посетителей</h2>

        <div class="row">
            <div class="col-md d-flex justify-content-center">
                <div class="card" >
                    <img src="img/massage-standart.jpg" class="card-img-top" alt="камни">
                    <div class="card-body">
                        <p class="card-text">Массаж стандартный</p>
                        <p>Цена: <s>2500</s> <b>2399</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card" >
                    <img src="img/massage-face.jpg" class="card-img-top" alt="масссаж">
                    <div class="card-body">
                        <p class="card-text">Массаж лица</p>
                        <p>Цена: <s>1500</s> <b>1199</b></p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-3">Фотографии салона</h2>

        <div id="carouselIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/salon.jpg" class="d-block w-100" alt="Кабинет spa-салона">
                </div>
                <div class="carousel-item">
                    <img src="img/salon-1.jpg" class="d-block w-100" alt="Кабинет spa-салона">
                </div>
                <div class="carousel-item">
                    <img src="img/room1person.jpg" class="d-block w-100" alt="Комната на 1 персону">
                </div>
                <div class="carousel-item">
                    <img src="img/room2person.jpg" class="d-block w-100" alt="Комната на 2 персоны">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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

<?php } else {
//    redirect to index
    header('Location: /');
} ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>

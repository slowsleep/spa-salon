<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPA-салон Гармония | Вход</title>
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
                <a href="registration.php">Регистрация</a>
            </div>
        </nav>
    </header>
    <main class="container mg-2 p-2 min-vh-100" style="width: 75%">

        <h1>Вход</h1>

        <div class="d-flex align-items-center justify-content-center">
            <form action="process.php" method="post" style="width: 60%">
                <div class="mb-3">
                    <label for="inputLogin" class="form-label">Логин</label>
                    <input name="login" type="text" class="form-control" id="inputLogin" placeholder="Логин">
                </div>
                <div class="mb-3">
                    <label for="inputPassword1" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control" id="inputPassword1" placeholder="Пароль">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
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

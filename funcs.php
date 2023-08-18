<?php


// возвращает массив всех пользователей и хэшей их паролей;
function getUsersList() : array
{
    $file = file_get_contents('./users.json');
    $users_json = json_decode($file, true);
    $count_users = count($users_json["users"]);
    $arr_passwords = array();

    for ($i = 0; $i < $count_users; $i++) {
        $arr_passwords[$i]["username"] = $users_json["users"][$i]["username"];
        $arr_passwords[$i]["password"] = $users_json["users"][$i]["password"];
    }

    return $arr_passwords;
}


// проверяет, существует ли пользователь с указанным логином
function existsUser($login) : bool
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user["username"] == $login) {
            return true;
        }
    }
    return false;
}


// пусть возвращает true тогда, когда существует пользователь
// с указанным логином и введенный им пароль прошел проверку, иначе — false
function checkPassword($login, $password) : bool
{

    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user["username"] == $login and $user["password"] == sha1($password)) {
            return true;
        }
    }
    return false;
}


// которая возвращает либо имя вошедшего на сайт пользователя, либо null.
function getCurrentUser() : string|null
{
    $res = null;
    $data = getUserById($_SESSION['id']);
    if ($data) {
        $res = $data["username"];
    }

    return $res;

}


// мои функции
// получение ID пользователя по его логину(юзернейму)
function getIdByName($username) : string|null
{
    $file = file_get_contents('./users.json');
    $users_json = json_decode($file, true);
    $count_users = count($users_json["users"]);
    $res = null;

    for ($i = 0; $i < $count_users; $i++) {
        if ($users_json["users"][$i]["username"] == $username) {
            $res = $users_json["users"][$i]["id"];
        }
    }

    return $res;
}


// получение всех данных пользователя (кроме пароля) по его ID
function getUserById($id) : array|null
{
    $file = file_get_contents('./users.json');
    $users_json = json_decode($file, true);
    $all_users = $users_json["users"];
    $res = null;

    foreach ($all_users as $user) {
        if ($user["id"] == $id) {
            $res = [
                "id" => $id,
                "username" => $user["username"],
                "birthday" => $user["birthday"],
                "created_at" => $user["created_at"]
            ];
        }
    }

    return $res;
}


// добавть нового пользователя в файл json
function addNewUser($username, $birthday, $password) : array|bool
{
    if (existsUser($username)) {
        return false;
    }

    $file_content = file_get_contents('./users.json');
    $users_json = json_decode($file_content, true);
    $count_users = count($users_json["users"]);
    $newId = $count_users + 1;
    $cur_date = date('Y-d-m H:i:s');
    $new_user = [
        "id" => $newId,
        "username" => $username,
        "birthday" => $birthday,
        "password" => $password,
        "created_at" => $cur_date
    ];
    $users_json["users"][$count_users] = $new_user;
    $new_users_json = json_encode($users_json);

    file_put_contents('./users.json', $new_users_json);

    return $new_user;

}

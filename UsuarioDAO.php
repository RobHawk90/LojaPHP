<?php

require_once './conexao.php';

function login($connection, $email, $senha) {
    $email = mysqli_escape_string($connection, $email);

    $senhaMd5 = md5($senha);
    $query = "SELECT * FROM Usuario WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

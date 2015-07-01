<?php

session_start();

function verificaAutenticacao() {
    if (!isLogado()) {
        header("Location: index.php");
        die();
    }
}

function isLogado() {
    return isset($_SESSION["usuarioLogado"]);
}

function getUsuarioLogado() {
    return $_SESSION["usuarioLogado"];
}

function setUsuarioLogado($email) {
    $_SESSION["usuarioLogado"] = $email;
}

function logout() {
    $terminado = session_destroy();
    session_start();
    return $terminado;
}

<?php

require_once './UsuarioDAO.php';
require_once './autenticacao-usuario.php';
require_once './mensagens.php';

$email = filter_input(INPUT_POST, "email");
$senha = filter_input(INPUT_POST, "senha");

$usuario = login($connection, $email, $senha);

if ($usuario == null) {
    redirecionaFalha("Email ou senha inválidas!", "index.php");
} else {
    setUsuarioLogado($email);
    redirecionaSucesso("Logado com sucesso!", "index.php");
}

die();

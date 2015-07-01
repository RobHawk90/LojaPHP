<?php

require_once './autenticacao-usuario.php';
require_once './mensagens.php';

if (logout()) {
    redirecionaSucesso("Logout realizado com sucesso", "index.php");
} else {
    redirecionaFalha("Falha ao realizar o logout", "index.php");
}

die();

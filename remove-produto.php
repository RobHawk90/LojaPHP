<?php

require_once './ProdutoDAO.php';
require_once './autenticacao-usuario.php';

verificaAutenticacao();

$id = filter_input(INPUT_POST, "id");

if (removeProduto($connection, $id)) {
    $_SESSION["success"] = "Produto removido com sucesso!";
} else {
    $_SESSION["danger"] = "Falha ao remover o produto.";
}

header("Location: lista-produto.php");
die();

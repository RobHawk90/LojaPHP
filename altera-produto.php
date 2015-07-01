<?php

require_once("cabecalho.php");
require_once("ProdutoDAO.php");

verificaAutenticacao();

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome");
$preco = filter_input(INPUT_POST, "preco");
$checked = filter_input(INPUT_POST, "usado");
$categoria = filter_input(INPUT_POST, "categoria");

if ($checked) {
    $checked = "true";
} else {
    $checked = "false";
}

if (alteraProduto($connection, $nome, $preco, $checked, $categoria, $id)) :
    mysqli_close($connection);
    sucesso("Produto atualizado com sucesso!");
else :
    $error = mysqli_error($connection);
    mysqli_close($connection);
    falha("Não foi possível alterar o produto: " . $error);
endif;

include 'rodape.php';

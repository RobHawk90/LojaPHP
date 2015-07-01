<?php

require_once("cabecalho.php");
require_once("ProdutoDAO.php");

verificaAutenticacao();

$nome = filter_input(INPUT_POST, "nome");
$preco = filter_input(INPUT_POST, "preco");
$checked = filter_input(INPUT_POST, "usado");
$categoria = filter_input(INPUT_POST, "categoria");

if ($checked) {
    $checked = "true";
} else {
    $checked = "false";
}

if (adicionaProduto($connection, $nome, $preco, $checked, $categoria)) :
    mysqli_close($connection);
    sucesso("O produto " . $nome . " que custa " . $preco . " foi adicionado com sucesso!");
else :
    $error = mysqli_error($connection);
    mysqli_close($connection);
    falha("Não foi possível cadastrar o produto: " + $error);
endif;

include 'rodape.php';

<?php

require_once './conexao.php';

function adicionaProduto($connection, $nome, $preco, $usado, $categoria) {
    $insert = "INSERT INTO Produto VALUES(idProduto, '{$nome}', {$preco}, {$usado}, {$categoria})";
    return mysqli_query($connection, $insert);
}

function alteraProduto($connection, $nome, $preco, $usado, $categoria, $id) {
    $query = "UPDATE Produto SET nome = '{$nome}', preco = {$preco}, "
            . "idCategoria = {$categoria}, usado = {$usado} WHERE idProduto = {$id}";
    return mysqli_query($connection, $query);
}

function removeProduto($connection, $id) {
    $query = "DELETE FROM Produto WHERE idProduto = {$id}";
    return mysqli_query($connection, $query);
}

function encontraProduto($connection, $id) {
    $query = "SELECT * FROM Produto WHERE idProduto = {$id}";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

function listaProdutos($connection) {
    $query = "SELECT p.*, c.descricao AS categoria FROM Produto AS p "
            . "INNER JOIN Categoria AS c ON p.idCategoria = c.idCategoria "
            . "ORDER BY nome";
    $result = mysqli_query($connection, $query);
    $produtos = array();

    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

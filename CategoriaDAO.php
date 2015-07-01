<?php

require_once './conexao.php';

function insereCategoria($connection, $descricao) {
    $query = "INSERT INTO Categoria VALUES(idCategoria, '{$descricao}')";
    return mysqli_query($connection, $query);
}

function listaCategorias($connection) {
    $query = "SELECT * FROM Categoria";
    $result = mysqli_query($connection, $query);
    $categorias = array();

    while ($categoria = mysqli_fetch_array($result)) {
        array_push($categorias, $categoria);
    }

    return $categorias;
}

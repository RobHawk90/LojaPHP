<?php
require_once './mensagens.php';
require_once './autenticacao-usuario.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="bootstrap/css/loja.css" rel="stylesheet" />
        <title></title>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="formulario-produto.php">Adicionar Produto</a></li>
                        <li><a href="lista-produto.php">Lista de Produtos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="principal">
                <?php
                mostraSucesso();
                mostraFalha();
                ?>
<?php

function mostraSucesso() {
    if (isset($_SESSION["success"])) {
        echo '<p class="alert-success">' . $_SESSION["success"] . '</p>';
        unset($_SESSION["success"]);
    }
}

function mostraFalha() {
    if (isset($_SESSION["danger"])) {
        echo '<p class="alert-danger">' . $_SESSION["danger"] . '</p>';
        unset($_SESSION["danger"]);
    }
}

function redirecionaSucesso($mensagem, $pagina) {
    $_SESSION["success"] = $mensagem;
    header("Location: " . $pagina);
}

function redirecionaFalha($mensagem, $pagina) {
    $_SESSION["danger"] = $mensagem;
    header("Location: " . $pagina);
}

function sucesso($mensagem) {
    echo '<p class="alert-success">' . $mensagem . '</p>';
}

function falha($mensagem) {
    echo '<p class="alert-danger">' . $mensagem . '</p>';
}

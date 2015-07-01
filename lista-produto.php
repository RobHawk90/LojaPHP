<?php
require_once 'cabecalho.php';
require_once 'ProdutoDAO.php';

verificaAutenticacao();

$produtos = listaProdutos($connection);
?>

<h1>Produtos</h1>
<table class="table table-bordered table-striped">

    <?php foreach ($produtos as $produto) : ?>

        <tr>
            <td><?= $produto["nome"]; ?></td>
            <td><?= $produto["preco"]; ?></td>
            <td><?= $produto["usado"] ? "usado" : "novo"; ?></td>
            <td><?= $produto["categoria"]; ?></td>
            <td><a class="btn btn-default" 
                   href="formulario-altera-produto.php?id=<?= $produto["idProduto"] ?>">alterar</a></td>
            <td>
                <form method="POST" action="remove-produto.php">
                    <input type="hidden" name="id" value="<?= $produto["idProduto"]; ?>" />
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

<?php include 'rodape.php'; ?>

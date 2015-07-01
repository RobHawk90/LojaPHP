<?php
require_once './cabecalho.php';
require_once './CategoriaDAO.php';
require_once './ProdutoDAO.php';

verificaAutenticacao();

$categorias = listaCategorias($connection);

$id = filter_input(INPUT_GET, "id");
$produto = encontraProduto($connection, $id);
$estaUsado = $produto["usado"];
$checked = $estaUsado ? 'checked="checked"' : '';
?>
<h1>Cadastro de Produtos</h1>
<form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?= $produto["idProduto"] ?>" />
    <table class="table">
        <tr>
            <td><label for="txtNome">Produto</label></td>
            <td><input class="form-control" type="text" name="nome" id="txtNome" value="<?= $produto["nome"] ?>" /></td>
        </tr>
        <tr>
            <td><label for="txtPreco">Preço</label></td>
            <td><input class="form-control" type="text" name="preco" id="txtPreco" value="<?= $produto["preco"] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="usado" 
                       value="true" <?= $checked ?>>Usado</td>
        </tr>
        <tr>
            <td><label for="cmbCategoria">Categoria</label></td>
            <td>
                <select class="form-control" id="cmbCategoria" name="categoria">
                    <?php
                    foreach ($categorias as $categoria) :
                        $mesmaCategoria = $categoria["idCategoria"] == $produto["idCategoria"];
                        $selected = $mesmaCategoria ? 'selected="selected"' : '';
                        ?>
                        <option value="<?= $categoria["idCategoria"]; ?>" <?= $selected ?>> <?= $categoria["descricao"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" value="Alterar" class="btn btn-primary" /></center></td>
        </tr>
</form>
<?php include 'rodape.php'; ?>
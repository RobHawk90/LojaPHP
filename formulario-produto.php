<?php
require_once './cabecalho.php';
require_once './CategoriaDAO.php';

verificaAutenticacao();

$categorias = listaCategorias($connection);
?>
<h1>Cadastro de Produtos</h1>
<form action="adiciona-produto.php" method="POST">
    <table class="table">
        <tr>
            <td><label for="txtNome">Produto</label></td>
            <td><input class="form-control" type="text" name="nome" id="txtNome" value="" /></td>
        </tr>
        <tr>
            <td><label for="txtPreco">Preço</label></td>
            <td><input class="form-control" type="text" name="preco" id="txtPreco" value="" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true">Usado</td>
        </tr>
        <tr>
            <td><label for="cmbCategoria">Categoria</label></td>
            <td>
                <select class="form-control" id="cmbCategoria" name="categoria">
                    <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?= $categoria["idCategoria"]; ?>"> <?= $categoria["descricao"]; ?> </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" value="Cadastrar" class="btn btn-primary" /></center></td>
        </tr>
</form>
<?php include 'rodape.php'; ?>
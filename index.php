<?php require_once './cabecalho.php'; ?>

<h1>Bem vindo!</h1>

<?php
if (isLogado()) {
    sucesso("Você está logado como " . getUsuarioLogado());
    echo '<a href="logout.php">logout</a>';
} else {
    ?>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="txtEmail">Email</label></td>
                <td><input class="form-control" type="text" name="email" id="txtEmail" value="" /></td>
            </tr>
            <tr>
                <td><label for="txtSenha">Senha</label></td>
                <td><input class="form-control" type="password" name="senha" id="txtSenha" value="" /></td>
            </tr>
            <tr>
                <td colspan="2"><center><input class="btn btn-primary" type="submit" value="Login" /></center></td>
            </tr>
        </table>
    </form>

<?php } include 'rodape.php'; ?>
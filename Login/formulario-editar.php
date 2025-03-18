<!DOCTYPE html>
<html lang="pt-br">


<?php
$dsn = 'mysql:dbname=bd_login;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);

// Obtém o id_pessoa da URL
$id_pessoa = $_GET['id_pessoa'];


$select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha FROM tb_usuario INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.id_pessoa = $id_pessoa";



$dados = $banco->query($select)->fetch();
?>




<head>
    <form action="./usuario-editar.php" method="post">

        <input type="hidden" name="id" value="<?= $dados['id'] ?>">


        <div>


            <label>Telefone 1:</label>
            <input type="text" name="telefone_1" value="<?= $dados['telefone_1'] ?>" required>

            <label>Telefone 2:</label>
            <input type="text" name="telefone_2" value="<?= $dados['telefone_2'] ?>">

            <label>Logradouro:</label>
            <input type="text" name="logradouro" value="<?= $dados['logradouro'] ?>" required>

            <label>Número da Casa:</label>
            <input type="text" name="n_casa" value="<?= $dados['n_casa'] ?>" required>

            <label>Bairro:</label>
            <input type="text" name="bairro" value="<?= $dados['bairro'] ?>" required>

            <label>Cidade:</label>
            <input type="text" name="cidade" value="<?= $dados['cidade'] ?>" required>
        </div>

        <div class="row mt-2">
            <div class="col">
                <label for="usuario">Usuário:</label>
                <input type="text" class="form-control" name="usuario" value="<?= $dados['usuario'] ?>" disabled>
            </div>
            <div class="col">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" name="senha" value="<?= $dados['senha'] ?>">
            </div>
        </div>

        <input type="submit" class="btn btn-success mt-3" value="Salvar Alterações">



    </form>

    <style></style>

    <a href="usuario.php">Voltar</a>, initial-scale=1.0">

</head>

<body>

</body>

</html>
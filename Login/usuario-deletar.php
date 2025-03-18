<?php
echo '<h1>Deletar Usuário</h1>';

$dsn = 'mysql:dbname=bd_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$id_usuario = $_GET['id'];

$del_usuario = 'DELETE FROM tb_usuario WHERE id = ' . $id_usuario;
$banco->query($del_usuario);

$del_pessoa = 'DELETE FROM tb_pessoa WHERE id = ' . $id_usuario;
$banco->query($del_pessoa);

echo '<script>
alert("Usuário apagado com sucesso!!!");
window.location.replace("usuario.php");
</script>';
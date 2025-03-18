<?php

echo '<pre>';
var_dump($_POST);

$nomeFormulario = $_POST['nome'];
$anoNascimentoFormulario = $_POST['ano_nascimento'];
$cpfFormulario = $_POST['cpf'];
$telefone1Formulario = $_POST['telefone_1'];
$telefone2Formulario = $_POST['telefone_2'];
$logradouroFormulario = $_POST['logradouro'];
$n_casaFormulario = $_POST['n_casa'];
$bairroFormulario = $_POST['bairro'];
$cidadeFormulario = $_POST['cidade'];
$usuarioFormulario = $_POST['user'];
$senhaFormulario = $_POST['password'];

$dsn = 'mysql:dbname=bd_login;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insertPessoa = 'INSERT INTO tb_pessoa (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) 
                 VALUES (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)';

$boxPessoa = $banco->prepare($insertPessoa);
$boxPessoa->execute([
    ':nome' => $nomeFormulario,
    ':ano_nascimento' => $anoNascimentoFormulario,
    ':cpf' => $cpfFormulario,
    ':telefone_1' => $telefone1Formulario,
    ':telefone_2' => $telefone2Formulario,
    ':logradouro' => $logradouroFormulario,
    ':n_casa' => $n_casaFormulario,
    ':bairro' => $bairroFormulario,
    ':cidade' => $cidadeFormulario
]);

$id_pessoa = $banco->lastInsertId();



$insertUsuario = 'INSERT INTO tb_usuario (id_pessoa, usuario, senha) VALUES (:id_pessoa, :usuario, :senha)';

$boxUsuario = $banco->prepare($insertUsuario);
$boxUsuario->execute([
    ':id_pessoa' => $id_pessoa,
    ':usuario' => $usuarioFormulario,
    ':senha' => $senhaFormulario
]);
?>

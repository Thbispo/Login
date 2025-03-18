<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

$dsn = 'mysql:dbname=bd_login;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_usuario";

$resultado = $banco->query($select)->fetchAll();

?>

<main class="container my-5">
    <table class="table table-striped">
        
        <tr>
            <td>    ID  </td>
            <td>    Usuários  </td>
            <td class="text-center">  Ação </td>
        </tr>

        <?php foreach($resultado as $linha) { ?>
            <tr>
                <td>  <?=$linha['id'] ?> </td>
                <td>  <?php echo $linha['usuario'] ?> </td>
                <td class="text-center">
                    <a class="btn btn-outline-primary" href="./usuario-abrir.php?id_pessoa=<?=$linha['id'] ?>">Abrir</a>
                    <a class="btn btn-outline-warning" href="./usuario-editar.php?id=<?=$linha['id']?>">Editar</a>
                    <a class="btn btn-outline-danger" href="./usuario-deletar.php?id=<?=$linha['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>

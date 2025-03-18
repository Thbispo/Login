<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mostrar Informações</title>
</head>

<body>
    <style>
        body{
            background: linear-gradient(135deg, transparent, #09070D);
        }
        
        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, transparent, #09070D);
        }

        /* Estiliza o card do formulário */
        .card-form {
            width: 50%;
            background: #fff;
            padding: 30px;
            
            background: linear-gradient(135deg, transparent, #09070D);
        }

        
        .card-form h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        
    </style>

    <main class="container text-center my-5">
        <h2>Mostrar Informações</h2>
        <br>

        <?php
        // Conexão com o banco de dados
        $dsn = 'mysql:dbname=bd_login;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $banco = new PDO($dsn, $user, $password);


        $id_pessoa = $_GET['id_pessoa'];

        // Consulta SQL para buscar os dados da pessoa e do usuário
        $select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha 
                   FROM tb_usuario 
                   INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id 
                   WHERE tb_usuario.id_pessoa = $id_pessoa";

        // Executa a consulta
        $dados = $banco->query($select)->fetch();
        ?>

        <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-lg" style="width: 50%; background: linear-gradient(135deg, transparent, #09070D);">
        <form>
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">

            <h3 class="text-center mb-3">Detalhes do Usuário</h3>

            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>

            <div class="row mt-2">
                <div class="col">
                    <label for="telefone_1">Telefone 1:</label>
                    <input type="text" class="form-control" name="telefone_1" value="<?= $dados['telefone_1'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="telefone_2">Telefone 2:</label>
                    <input type="text" class="form-control" name="telefone_2" value="<?= $dados['telefone_2'] ?>" disabled>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" value="<?= $dados['logradouro'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="n_casa">Número:</label>
                    <input type="number" class="form-control" name="n_casa" value="<?= $dados['n_casa'] ?>" disabled>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" value="<?= $dados['bairro'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" value="<?= $dados['cidade'] ?>" disabled>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" class="form-control" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>" disabled>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" name="usuario" value="<?= $dados['usuario'] ?>" disabled>
                </div>
                <div class="col">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" name="senha" value="<?= $dados['senha'] ?>" disabled>
                </div>
            </div>

            <div class="text-center">
                <a href="usuario.php" class="btn btn-light mt-3">Voltar</a>
            </div>
        </form>
    </div>
</div>

    </main>
</body>

</html>
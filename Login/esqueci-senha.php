<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Esqueci a senha</title>
</head>

<body>

<style>
    * {
        margin: 0;
        padding: 0;
        
    }

    body{
        background: linear-gradient(135deg,transparent, #09070D);
    }

    html {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        background: linear-gradient(135deg, transparent, #09070D,transparent);
        width: 300px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        color: #09070D;
    }

    label {
        color: white;
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-align: center;
    }

    .btn-success {
        background: black;
        color: white;
        cursor: pointer;
        border: none;
        padding: 10px;
        width: 100%;
        font-size: 16px;
        border-radius: 4px;
        transition: background 0.3s;
    }

    .btn-success:hover {
        background: #333;
    }
</style>


    <main class="container text-center my-5">

        <h2>ESQUECI A SENHA</h2>
        <br>
        <form action="./nova-senha.php" method="post">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" name="cpf" required>

            <label for="senha">ALTERAR SENHA:</label>
            <input type="password" class="form-control" name="senha" required>

            <input type="submit" class="btn btn-dark">
        </form>
    </main>

</body>

</html>
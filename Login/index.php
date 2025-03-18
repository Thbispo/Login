<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>






    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 400;
            height: 100vh;
            background: linear-gradient(135deg, transparent, #09070D,transparent);
            margin: 0;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(135deg, transparent, #09070D,transparent);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: white;
        }

        label{
            color: white;
        }



        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-success {
            background: rgb(0, 0, 0);
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px;
            width: 250px;

        }

        a {
            display: block;
            margin-top: 5px;
            color: rgb(224, 228, 233);
            text-decoration: none;
            font-size: 15px;

        }

        a:hover {
            text-decoration: none;
            color: white;

        }
    </style>


    <form action="./auxlogin.php" method="post" class="mt-5">
        <h1>Login</h1>
        <label class="form-label">Usuário</label>
        <input type="text" name="user" class="form-control" required>

        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>

        <a href="esqueci-senha.php" class="links">Esqueci a senha</a>
        <a href="cadastro.php" class="links">Cadastrar-se</a>


        <input class="btn btn-success mt-3" type="submit">
    </form>

</body>

</html>
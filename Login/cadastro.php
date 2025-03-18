<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
</body>
</html>

<body>


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;  
            background: linear-gradient(135deg, transparent, #09070D);      
            display: flex;
            padding: auto;
            justify-content: center;
            
            
        }


        h2 {
            color: black;
            text-align: center;
        }

        form {
            border-radius: 8px;
            background: linear-gradient(135deg, transparent, #09070D);
            width: 500px;    
            align-items: center;

            
        }


        input {
            width: 80%;
            padding: 10px;
            margin: 10px ;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding-left: 50px;
        }

        

        button {
            background-color:rgb(0, 0, 0);
            color: #ccc;
            width: 475px;
            height: 50px;
            border-radius: 5px;
            font-size: 14px;
            align-items: center;

        }

       
    </style>

    <form action="./cadastro-usuario.php" method="post">
        <h2>Cadastro</h2>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="date" name="ano_nascimento" placeholder="Ano de Nascimento" required>
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="telefone_1" placeholder="Telefone 1" required>
        <input type="text" name="telefone_2" placeholder="Telefone 2">
        <input type="text" name="logradouro" placeholder="Logradouro" required>
        <input type="text" name="n_casa" placeholder="Número da Casa" required>
        <input type="text" name="bairro" placeholder="Bairro" required>
        <input type="text" name="cidade" placeholder="Cidade" required>
        <input type="text" name="user" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit">Cadastrar-se</button>
    </form>

  
   
</body>
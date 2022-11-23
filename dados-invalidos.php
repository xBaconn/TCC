<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
     <h1> HELPER </h1>

    <form action="verifica_login.php" method="post">        
   
        <h2>Login</h2>

        <div class="input-group">
            <img class="input-icon" src="img/user.png">
            <input type="email" placeholder="Digite seu email" name="email" required>
        </div>
       
        <div class="input-group">
            <img class="input-icon" src="img/lock.png">
            <input type="password" placeholder="Digite sua senha" name="senha" required>
        </div>
       
        <div style=color:white > Senha ou email incorreto(s)!! </div>
       
        <button class="btn-blue" type="submit">Fazer Login</button>
        <a href="cadastrar.php">Ainda não tenho cadastro</a>
    </form>
</body>
</html>


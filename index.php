<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="box_form">
        <form action="validacao.php" method="post">
            <fieldset>
                <legend> Dados de Login</legend>
    
                <label for="txUsuario">Usuário</label><br>
                <input type="text" name="usuario" id="txUsuario" maxlength="25"><br><br>
    
                <label for="txSenha">Usuário</label><br>
                <input type="password" name="senha" id="txSenha" maxlength="25"><br><br>
    
                <input type="submit" value="Entrar">
            </fieldset>
        </form>
    </div>
    
</body>
</html>


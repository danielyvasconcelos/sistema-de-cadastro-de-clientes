

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Imagens/logozin.png" />
    <link rel="stylesheet" href="CSS/indexStyle.css">
    <title>Tela de Login</title>
</head>
<body>

    <header class="cabecalho">
        <img class="area-logo" src="Imagens/logo.png">
    </header>

    <section class="area-login">
        <div class="login">
            <div>
                <p>Acessar o Sistema</p>
            </div>
            
            <form action="testLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email" autofocus required
                id="inputUsuarioLogin">
                <input type="password" name="senha" placeholder="Senha" required
                id="inputSenhaLogin">
                <input type="submit" name="submit" value="Entrar" id="btnEntrar">
            </form>
        </div>

</body>
</html>
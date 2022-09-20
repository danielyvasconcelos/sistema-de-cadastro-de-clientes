<?php 
if( isset($_POST['submit'])){
     //print_r($_['nome']);
     //print_r($_['<br>']);
     //print_r($_['email']);
     //print_r($_['<br>']);
     //print_r($_['telefone']);
     //print_r($_['<br>']);
     //print_r($_['data_nascimento']);
     //print_r($_['<br>']);
     //print_r($_['<br>']);
     // print_r($_['estado']);
     // print_r($_['endereco']);
     // print_r($_['cidade']);

     include_once('configF.php');
     $nome= $_POST['nome'];
     $email= $_POST['email'];
     $usuario= $_POST['usuario'];
     $senha= $_POST['senha'];
     $data_nasc= $_POST['data_nascimento'];
     $cidade= $_POST['cidade'];
     $estado= $_POST['estado'];
     $endereco= $_POST['endereco'];

     $result= mysqli_query($conexao, "INSERT INTO funcionarios(nome,email, usuario, senha, data_nasc,cidade,estado,endereco)
     VALUES('$nome','$email', '$usuario','$senha','$data_nasc', '$cidade','$estado','$endereco')");
     
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Imagens/logozin.png" />
    <link href="CSS/funcionarioStyle.css" rel="stylesheet">
    <title>Cadastro de Funcioários</title>
    
</head>
<body>

    <header class="cabecalho">
        <img class="area-logo" src="Imagens/logo.png">
    </header>

    <div class="box">
        <form action="formularioFuncionario.php" method="POST" >
                <legend><b>Cadastro de funcionarios</b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>
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

     include_once('config.php');
     $nome= $_POST['nome'];
     $email= $_POST['email'];
     $telefone= $_POST['telefone'];
     $data_nasc= $_POST['data_nascimento'];
     $cidade= $_POST['cidade'];
     $estado= $_POST['estado'];
     $endereco= $_POST['endereco'];

     $result= mysqli_query($conexao, "INSERT INTO clientes(nome, email,telefone, data_nasc,cidade,estado,endereco)
     VALUES('$nome','$email','$telefone','$data_nasc', '$cidade','$estado','$endereco')");


}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>Formulário | GN</title>
    
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST" >
            <fieldset>
                <legend><b>Fórmulário de Clientes</b> </legend>
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
                    <input type="telefone" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
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
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>


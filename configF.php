<?php 

$dbHost='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='cadastro-de-clientes';

$conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao -> conect_errno){
    echo "erro";

}else{
    echo "conexão feita";
}*/
?>
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
     $senha= $_POST['senha'];
     $data_nasc= $_POST['data_nascimento'];
     $cidade= $_POST['cidade'];
     $estado= $_POST['estado'];
     $endereco= $_POST['endereco'];

     $result= mysqli_query($conexao, "INSERT INTO funcionarios(nome,email, senha, data_nasc,cidade,estado,endereco)
     VALUES('$nome','$email','$senha','$data_nasc', '$cidade','$estado','$endereco')");

header('location: formularioFuncionario.php');
}
?>
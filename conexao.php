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
    
     include_once('conexao.php');

     $email= $_POST['email'];
     $senha= $_POST['senha'];


     $result= mysqli_query($conexao, "INSERT INTO funcionarios(email, senha)
     VALUES('$email','$senha')");


}
?>
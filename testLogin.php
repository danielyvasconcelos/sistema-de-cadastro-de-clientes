<?php



session_start();
//print_r($_REQUEST); //!aceito 
if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
    

    //acessa
    include_once('configF.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

   //print_r('Usuario:' . $usuario);
   // print_r('Senha:' . $senha);

    $sql= "SELECT * FROM funcionarios WHERE usuario='$usuario' and senha='$senha' ";
    $result = $conexao->query($sql);//conexao feita no confingF.php
   
    //print_r($result);

    if(mysqli_num_rows($result)<1){
        $sql= "SELECT * FROM funcionarios WHERE usuario='$usuario' and senha='$senha' ";
    $result = $conexao->query($sql);
        //print_r('não existe');
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location : login.php');
    }else{
        //print_r('existe');
        $_SESSION['usuario']=$usuario;
        $_SESSION['senha']=$senha;
        header('Location : sistema.php');
    }
} else {
    // die("sextou 2");
    //nao acessa
    header('Location : login.php');
}









?>

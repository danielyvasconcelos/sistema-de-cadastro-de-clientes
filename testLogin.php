<?php

//session_start();
//print_r($_REQUEST); //!aceito 
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    

    //acessa
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   //print_r('Email:' . $email);
   //print_r('Senha:' . $senha);

    $sql= "SELECT * FROM funcionarios WHERE email='$email' and senha='$senha' ";
    $result = $conexao->query($sql);//conexao feita no conexao.php
   
    print_r($result);
 

    /*if(mysqli_num_rows($result)<1){
        $sql= "SELECT * FROM funcionarios WHERE email='$email' and senha='$senha' ";
    $result = $conexao->query($sql);
        //print_r('não existe');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location : index.php');
    }else{
        //print_r('existe');
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        header('Location : sistema.php');
    }*/
} else {
    // die("sextou 2");
    //nao acessa
    header('Location : index.php');
}









?>

<?php

include './painel/conexao/conexao.php';
include './painel/script/password.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);

$senhaBanco = $array['SENHA']; //Senha recuperada no banco
$ativo = $array['ATIVO']; 

$senhaEncriptada = sha1($senha); //Encriptando a senha passada
//$senhaEncriptada = $senha ; //Encriptando a senha passada


//Verifica se as senhas e se o usuário está ativo 
if($senhaEncriptada == $senhaBanco && $ativo =='S')
{
    session_start();
    $_SESSION['emailx'] = $email;
    header('Location: ./painel/index.php');
}

elseif($senhaEncriptada == $senhaBanco && $ativo =='N')
{
    header('Location: index.php?msg=3');
}

else
{
    header('Location: index.php?msg=2');
    
}

?>
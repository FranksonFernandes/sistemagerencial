<?php

include './conexao/conexao.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuario`( `NOME`,`EMAIL`,`SENHA`) VALUES ('$nome','$email','$senha')";

$insert = mysqli_query($conexao, $sql);







?>
<?php

include './conexao/conexao.php';
include './script/password.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuario`( `NOME`,`EMAIL`,`SENHA`) VALUES ('$nome','$email',sha1('$senha'))";

$insert = mysqli_query($conexao, $sql);

header('Location: ../index.php?msg=1');





?>
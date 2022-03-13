<?php

include 'conexao.php';

 $id_cliente = $_POST['id_cliente'];
 $ativo = $_POST['ativo'];
 $nome = $_POST['nome'];
 

$sql = "UPDATE `clientes` SET 
`ATIVO`='S'
 WHERE `ID_CLIENTE`= $id_cliente";

$insert = mysqli_query($conexao, $sql);

header('Location: lista_clientes_inativos.php?msg=1')

?>
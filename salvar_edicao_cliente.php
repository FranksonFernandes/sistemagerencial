<?php

include 'conexao.php';

 $id_cliente = $_POST['id_cliente'];
 $ativo = $_POST['ativo'];
 $nome = $_POST['nome'];
 $fantasia = $_POST['fantasia'];
 $email = $_POST['email'];
 $celular = $_POST['celular'];
 $telefone = $_POST['telefone'];
 $dt_nascimento = $_POST['dt_nascimento'];
 $sexo = $_POST['sexo'];
 $cpf = $_POST['cpf'];
 $cnpj = $_POST['cnpj'];
 $ie_rg = $_POST['ie_rg'];
 $cep = $_POST['cep'];
 $cidade = $_POST['cidade'];
 $bairro = $_POST['bairro'];
 $endereco = $_POST['endereco'];
 $observacao = $_POST['observacao'];

$sql = "UPDATE `clientes` SET 
`ATIVO`='$ativo',
`NOME`='$nome',
`FANTASIA`='$fantasia',
`EMAIL`='$email',
`CELULAR`='$celular',
`TELEFONE`='$telefone',
`DT_NASCIMENTO`='$dt_nascimento',
`SEXO`='$sexo',
`CPF`='$cpf',
`CNPJ`='$cnpj',
`CIDADE`='$cidade',
`CEP`='$cep',
`BAIRRO`='$bairro',
`ENDERECO`='$endereco',
`IE_RG`='$ie_rg',
`OBSERVACAO`='$observacao' WHERE `ID_CLIENTE`= $id_cliente";

$insert = mysqli_query($conexao, $sql);

header('Location: lista_clientes.php?msg=1')

?>
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

 //Atribuindo nulo para valores vazios
 
 $nome = !empty($nome) ? "'$nome'" : "NULL";
 $fantasia = !empty($fantasia) ? "'$fantasia'" : "NULL";
 $email = !empty($email) ? "'$email'" : "NULL";
 $celular = !empty($celular) ? "'$celular'" : "NULL";
 $telefone = !empty($telefone) ? "'$telefone'" : "NULL";
 $dt_nascimento = !empty($dt_nascimento) ? "'$dt_nascimento'" : "NULL";
 $sexo = !empty($sexo) ? "'$sexo'" : "NULL";
 $cpf = !empty($cpf) ? "'$cpf'" : "NULL";
 $cnpj = !empty($cnpj) ? "'$cnpj'" : "NULL";
 $ie_rg = !empty($ie_rg) ? "'$ie_rg'" : "NULL";
 $cidade = !empty($cidade) ? "'$cidade'" : "NULL";
 $cep = !empty($cep) ? "'$cep'" : "NULL";
 $bairro = !empty($bairro) ? "'$bairro'" : "NULL";
 $endereco = !empty($endereco) ? "'$endereco'" : "NULL";
 $observacao = !empty($observacao) ? "'$observacao'" : "NULL";


$sql = "UPDATE `clientes` SET 
`ATIVO`='$ativo',
`NOME`=$nome,
`FANTASIA`=$fantasia,
`EMAIL`=$email,
`CELULAR`=$celular,
`TELEFONE`=$telefone,
`DT_NASCIMENTO`=$dt_nascimento,
`SEXO`=$sexo,
`CPF`=$cpf,
`CNPJ`=$cnpj,
`CIDADE`=$cidade,
`CEP`=$cep,
`BAIRRO`=$bairro,
`ENDERECO`=$endereco,
`IE_RG`=$ie_rg,
`OBSERVACAO`=$observacao WHERE `ID_CLIENTE`= $id_cliente";

$update = mysqli_query($conexao, $sql);

header('Location: lista_clientes.php?msg=1')

?>
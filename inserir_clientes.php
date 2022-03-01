<?php
    include 'conexao.php';

    $nome     = $_POST['nome'];
    $fantasia = $_POST['fantasia'];
    $email    = $_POST['email'];
    $celular  = $_POST['celular']; 
    $telefone = $_POST['telefone'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $sexo    = $_POST['sexo'];
    $cpf     = $_POST['cpf'];
    $cnpj    = $_POST['cnpj'];
    $IE_RG   = $_POST['IE_RG'];
    $cidade  = $_POST['cidade']; 
    $cep     = $_POST['cep'];
    $bairro  = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $observacoes = $_POST['observacoes'];

    
     $sql = "INSERT INTO clientes
    (`NOME`, 
    `FANTASIA`, 
    `EMAIL`,
    `CELULAR`,
    `TELEFONE`, 
    `DT_NASCIMENTO`, 
    `SEXO`, 
    `CPF`, 
    `CNPJ`, 
    `CIDADE`, 
    `CEP`, 
    `BAIRRO`, 
    `ENDERECO`, 
    `IE_RG`, 
    `OBSERVACAO`) 
     VALUES 
     ('$nome','$fantasia','$email','$celular','$telefone','$dt_nascimento','$sexo','$cpf','$cnpj','$cidade','$cep','$bairro','$endereco','$IE_RG','$observacoes');";

     $insert = mysqli_query($conexao, $sql);

     header('Location: formulario_cadCliente.php?msg=1');

?>
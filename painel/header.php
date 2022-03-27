<?php
include './conexao/conexao.php';

session_start();

$emailHeader = $_SESSION['emailx']; 


// Verificando se usuario esta logado (sessão e-mail):
if(!isset($_SESSION['emailx'])){
    header('Location: ../index.php');
}

else{



$sql = "select * from USUARIO where EMAIL ='$emailHeader' ";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $id_usuario   = $array['ID_USUARIO'];
    $nome_usuario = $array['NOME'];
    $cadastro     = $array['DT_CADASTRO'];
    $atualizado   = $array['DT_ALTERACAO'];
    $telefone     = $array['TELEFONE'];
    $celular      = $array['CELULAR'];
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestão Comercial - GED </title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
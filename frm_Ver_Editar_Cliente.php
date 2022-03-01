<?php include 'header.php';
include 'conexao.php';

$id = $_GET['id'];

?>

<body class="adminbody">

    <div id="main">

        <?php include 'topbar.php'; ?>
        <?php include 'menu.php'; ?>

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Visualizar/Editar</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>



                        </div>
                    </div>


                    <!-- download -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="far fa-check-square"></i> Visualizar/Editar Clientes</h3>

                            </div>

                            <div class="card-body">

                                <?php

                                if (isset($_GET['msg'])) { ?>

                                    <div class="alert alert-success" role="alert">
                                        Registro alterado com sucesso!
                                    </div>

                                <?php }

                                ?>

                                <?php

                                $sql = "SELECT * FROM CLIENTES WHERE ID_CLIENTE = $id";
                                $buscar = mysqli_query($conexao, $sql);

                                while ($array = mysqli_fetch_array($buscar)) {
                                    $id_cliente = $array['ID_CLIENTE'];
                                    $ativo = $array['ATIVO'];
                                    $nome = $array['NOME'];
                                    $fantasia = $array['FANTASIA'];
                                    $email = $array['EMAIL'];
                                    $celular = $array['CELULAR'];
                                    $telefone = $array['TELEFONE'];
                                    $dt_nascimento = $array['DT_NASCIMENTO'];
                                    $dt_cadastro = $array['DT_CADASTRO'];
                                    $sexo = $array['SEXO'];
                                    $cpf = $array['CPF'];
                                    $cnpj = $array['CNPJ'];
                                    $cep = $array['CEP'];
                                    $bairro = $array['BAIRRO'];
                                    $endereco = $array['ENDERECO'];
                                    $cidade = $array['CIDADE'];
                                    $ie_rg = $array['IE_RG'];
                                    $observacao = $array['OBSERVACAO'];






                                ?>

                                    <form action="salvar_edicao_cliente.php" method="post">

                                        
                                            <div class="col-md-2 mb-2">
                                                <label>Código Interno</label>
                                                <input type="text" class="form-control" value="<?php echo  $id_cliente?>" readonly name="id_cliente">

                                                <label>Ativo</label>

                                            
                                            </div>

                                            <div class="col-md-1 mb-1">

                                            <select class="form-control" name="ativo">
                                                <option><?php echo $ativo ?> </option>
                                                <option>N</option>
                                            </select>
                                            
                                           </div>

                                        



                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome/Razão Social</label>
                                            <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control" placeholder="Informe o nome do Cliente" maxlength="200" required autocomplete="off">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome Fantasia/Apelido</label>
                                            <input type="text" name="fantasia" value="<?php echo $fantasia ?>" class="form-control" placeholder="Informe o nome do Cliente" maxlength="200" autocomplete="off">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" name="email" value="<?php echo $email ?>" class="form-control" id="exampleInputNumber1" aria-describedby="numberlHelp" maxlength="100" placeholder="Informe o e-mail do Cliente" autocomplete="off">

                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">Celular</label>
                                            <input id="celular" name="celular" value="<?php echo $celular ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="(99)9 9999-9999" autocomplete="off">
                                        </div>



                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">Telefone</label>
                                            <input id="telefone" name="telefone" value="<?php echo $celular ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="(99)9999-9999" autocomplete="off">
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">Data de Nascimento</label>
                                            <input id="data" type="text" value="<?php echo $dt_nascimento ?>" name="dt_nascimento" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/AAAA" autocomplete="off">
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">Data de Cadastro</label>
                                            <input id="data" type="date" value="<?php echo $dt_cadastro ?>" name="dt_cadastrado" class="form-control" readonly>
                                        </div>

                                        <!--Sexo -->
                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">Sexo</label>

                                            <select class="form-control" name="sexo">
                                                <option><?php echo $sexo ?></option>
                                                <option>Homem</option>
                                                <option>Mulher</option>
                                                <option>LGBTQIA+</option>
                                                <option>Não declarado</option>
                                            </select>
                                        </div>


                                        <br>
                                        <div class="col-md-3 mb-3">
                                            <label for=" exampleInputPassword1">CPF</label>
                                            <input id="cpf" name="cpf" value="<?php echo $cpf ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="999.999.999-99" autocomplete="off">
                                        </div>


                                        <div class="col-md-3 mb-3">
                                            <label for=" exampleInputPassword1">CNPJ</label>
                                            <input name="cnpj" id="cnpj" value="<?php echo $cnpj ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="99.999/9999-99" autocomplete="off">
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">IE/RG</label>
                                            <input name="IE_RG" type="text" value="<?php echo $ie_rg ?>" class="form-control" id="IE_RG" placeholder="Informe o RG ou IE" maxlength="20" autocomplete="off">
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <label for="exampleInputPassword1">Cidade</label>
                                            <input name="cidade" type="text" value="<?php echo $cidade ?>" class="form-control" id="exampleInputPassword1" maxlength="100" placeholder="Informe a Cidade">
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="exampleInputPassword1">CEP</label>
                                            <input name="cep" id="cep" type="text" class="form-control" id="exampleInputPassword1" placeholder="Informe o CEP" maxlength="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bairro</label>
                                            <input name="bairro" type="text" value="<?php echo $bairro ?>" class="form-control" id="exampleInputPassword1" maxlength="100" placeholder="Informe o Bairro">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Endereço</label>
                                            <input name="endereco" type="text" value="<?php echo $endereco ?>" class="form-control" id="exampleInputPassword1" maxlength="200" placeholder="Informe o Endereço">
                                        </div>

                                        <div class="form-group">
                                            <label for="validationTextarea">Observações</label>
                                            <textarea name="observacoes" class="form-control" id="validationTextarea" placeholder="Observações sobre o cliente"><?php echo $observacao ?></textarea>

                                        </div>

                                        <div style="text-align: center">

                                            <button type="submit" class="btn btn-block btn-primary btn-lg">Atualizar Cadastro</button>
                                            <a type="button" href="lista_clientes.php" class="btn btn-block btn-danger btn-lg">Cancelar Atualização</a>



                                        <?php } ?>
                                    </form>

                            </div>
                        </div><!-- end card-->
                    </div>

                    <!-- Mascaras utilizadas-->
                    <script type="text/javascript">
                        $("#telefone").mask("(00) 0000-0000");
                        $("#celular").mask("(00) 00000-0000");
                        $("#cep").mask("00.000-000");
                        $("#cpf").mask("000.000.000-00");
                        $("#cnpj").mask("00.000.000/0000-00");
                        $("#data").mask("00/00/0000");
                    </script>


                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <?php include 'footer.php'; ?>
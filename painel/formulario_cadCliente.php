<?php include 'header.php'; ?>

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
                                    <li class="breadcrumb-item active">Adicionar Clientes</li>
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
                                <h3><i class="far fa-check-square"></i> Cadastro de Clientes</h3>

                            </div>

                            <div class="card-body">

                                <?php

                                if (isset($_GET['msg'])) { ?>

                                    <div class="alert alert-success" role="alert">
                                        Registro cadastrado com sucesso!
                                    </div>

                                <?php }

                                ?>

                                <form action="inserir_clientes.php" method="post">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome/Razão Social</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Informe o nome do Cliente" maxlength="200" required autocomplete="off">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome Fantasia/Apelido</label>
                                        <input type="text" name="fantasia" class="form-control" placeholder="Informe o nome do Cliente" maxlength="200"  autocomplete="off">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputNumber1" aria-describedby="numberlHelp" maxlength="100" placeholder="Informe o e-mail do Cliente" autocomplete="off">

                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">Celular</label>
                                        <input id="celular" name="celular" type="text" class="form-control" id="exampleInputPassword1" placeholder="(99)9 9999-9999"  autocomplete="off">
                                    </div>



                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">Telefone</label>
                                        <input id="telefone" name="telefone" type="text" class="form-control" id="exampleInputPassword1" placeholder="(99)9999-9999"  autocomplete="off">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">Data de Nascimento</label>
                                        <input id="data" type="text" name="dt_nascimento" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/AAAA" autocomplete="off">
                                    </div>

                                    <!--Sexo -->
                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">Sexo</label>

                                        <select class="form-control" name="sexo">
                                            <option></option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                            <option>LGBTQIA+</option>
                                            <option>Não declarado</option>
                                        </select>
                                    </div>


                                    <br>
                                    <div class="col-md-3 mb-3">
                                        <label for=" exampleInputPassword1">CPF</label>
                                        <input id="cpf" name="cpf" type="text" class="form-control" id="exampleInputPassword1" placeholder="999.999.999-99" autocomplete="off">
                                    </div>


                                    <div class="col-md-3 mb-3">
                                        <label for=" exampleInputPassword1">CNPJ</label>
                                        <input name="cnpj" id="cnpj" type="text" class="form-control" id="exampleInputPassword1" placeholder="99.999/9999-99" autocomplete="off">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">IE/RG</label>
                                        <input name="IE_RG" type="text" class="form-control" id="IE_RG" placeholder="Informe o RG ou IE" maxlength="20" autocomplete="off">
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputPassword1">Cidade</label>
                                        <input name="cidade" type="text" class="form-control" id="exampleInputPassword1" maxlength="100" placeholder="Informe a Cidade">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="exampleInputPassword1">CEP</label>
                                        <input name="cep" id="cep" type="text" class="form-control" id="exampleInputPassword1" placeholder="Informe o CEP" maxlength="10">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Bairro</label>
                                        <input name="bairro" type="text" class="form-control" id="exampleInputPassword1" maxlength="100" placeholder="Informe o Bairro">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Endereço</label>
                                        <input name="endereco" type="text" class="form-control" id="exampleInputPassword1" maxlength="200" placeholder="Informe o Endereço">
                                    </div>

                                    <div class="form-group">
                                        <label for="validationTextarea">Observações</label>
                                        <textarea name="observacoes" class="form-control" id="validationTextarea" placeholder="Observações sobre o cliente"></textarea>

                                    </div>

                                    <div style="text-align: center">

                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Salvar Cadastro</button>
                                        <button type="button" class="btn btn-block btn-danger btn-lg">Cancelar Cadastro</button>




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
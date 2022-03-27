<?php include 'header.php';

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
                                    <li class="breadcrumb-item active">Adicionar Clientes</li>
                                </ol>
                                <!--<div class="clearfix"></div>-->
                            </div>



                        </div>
                    </div>


                    <!-- download -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i>Perfil de Usuário</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                <input class="form-control" name="id_usuario" type="number" value="<?php echo $id_usuario ?>" style='display:none' >
                                                    <label>E-mail</label>
                                                    <input class="form-control" name="email" type="text" value="<?php echo $emailHeader ?>" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input class="form-control" name="nome" type="text" value="<?php echo $nome_usuario ?>" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Telefone</label>
                                                    <input class="form-control" id="telefone" name="telefone" type="text" value="<?php echo $id_usuario ?>" />
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                    <input class="form-control" id="celular" name="celular" type="text" value="<?php echo $celular ?>" />
                                                </div>
                                            </div>



                                        </div>




                                        <div class="col-md-3 mb-3">
                                            <label>Data de Cadastro : <?php echo ' ' . date('d/m/Y', strtotime($cadastro)); ?></label>

                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label>Data de Alteração : <?php echo ' ' . date('d/m/Y', strtotime($atualizado)); ?> </label>

                                        </div>










                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="button" class="btn btn-primary">Atualizar Perfil</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->



                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-file-image"></i> Avatar</h3>
                                </div>

                                <div class="card-body text-center">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img alt="avatar" class="img-fluid" src="assets/images/avatars/avatar.png">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-danger btn-block mt-3">Delete avatar</button>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-info btn-block mt-3">Change avatar</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i>Resetar Senha</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                    <input class="form-control" name="id_usuario" type="number" value="<?php echo $id_usuario ?>" style='display:none' >    

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Nova SSenha</label>
                                                    <input class="form-control" name="senha" type="password"/>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Confirmar Senha</label>
                                                    <input class="form-control" name="nova_senha" type="password"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">



                                        </div>







                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="button" class="btn btn-danger">Alterar Senha</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                        <!-- Mascaras utilizadas-->
                        <script type="text/javascript">
                            $("#telefone").mask("(00) 0000-0000");
                            $("#celular").mask("(00) 00000-0000");
                            $("#cep").mask("00.000-000");
                            $("#cpf").mask("000.000.000-00");
                            $("#cnpj").mask("00.000.000/0000-00");
                            $("#data").mask("00/00/0000");
                            $("#data1").mask("00/00/0000");
                        </script>


                    </div>
                    <!-- END container-fluid -->

                </div>
                <!-- END content -->

            </div>
            <!-- END content-page -->

            <?php include 'footer.php'; ?>
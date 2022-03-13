<?php include 'header.php'; ?>


<!-- jquery para modal --> 
<script>
    $(function() {

        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var recipientID = button.data('id_cliente')
            var recipientDescricao = button.data('descricao')
            var recipientAtivo = button.data('ativo')
            
            var modal = $(this)
            modal.find('.modal-title').text('Ativar Cliente: ')
            modal.find('#recipient-id_cliente').val(recipientID)
            modal.find('#recipient-descricao').val(recipientDescricao)
            modal.find('#recipient-ativo').val(recipientAtivo)
            


        });

    });
</script>

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
                                    <li class="breadcrumb-item active">Lista de Clientes Inativos</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                            



                        </div>
                    </div>

                    <!-- download -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



                    <div class="card-header">
                        <h3><i class="far fa-check-square"></i> Lista de Clientes</h3>

                        <!-- DataTable -->


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <!-- Sucesso alteração  -->
                            <?php

                                if (isset($_GET['msg'])) { ?>

                                    <div class="alert alert-success" role="alert">
                                        Registro ativado com sucesso!
                                    </div>

                                <?php }

                                ?>
                                <!-- Fim Sucesso alteração   -->
                            <div class="card mb-3">


                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nome/Razão Social</th>
                                                    <th>Apelido/Fantasia</th>
                                                    <th>Celular</th>
                                                    <th>Telefone</th>
                                                    <th>E-mail</th>
                                                    <th>Cidade</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                include 'conexao.php';

                                                $sql = "SELECT * FROM CLIENTES WHERE ATIVO IN ('N','')";
                                                $busca = mysqli_query($conexao, $sql);

                                                while ($array = mysqli_fetch_array($busca)) {
                                                    $ativo = $array['ATIVO'];
                                                    $id_cliente = $array['ID_CLIENTE'];
                                                    $nome = $array['NOME'];
                                                    $fantasia = $array['FANTASIA'];
                                                    $celular = $array['CELULAR'];
                                                    $telefone = $array['TELEFONE'];
                                                    $email = $array['EMAIL'];
                                                    $cidade = $array['CIDADE'];
                                                    $bairro = $array['BAIRRO'];
                                                    $endereco = $array['ENDERECO'];
                                                    $observacao = $array['OBSERVACAO'];

                                                ?>

                                                    <tr>
                                                        <td> <?php echo $nome ?> </td>
                                                        <td> <?php echo $fantasia ?> </td>
                                                        <td> <?php echo $celular ?> </td>
                                                        <td> <?php echo $telefone ?> </td>
                                                        <td> <?php echo $email ?> </td>
                                                        <td> <?php echo $cidade ?> </td>
                                                        <td>
                                                            <!-- Modal botão alteração rápida --> 
                                                            <button type="button" class="btn btn-warning btn-sm" title="Editar" data-toggle="modal" data-target="#exampleModal"  
                                                            data-id_cliente="<?php echo $id_cliente ?>" 
                                                            data-descricao="<?php echo $nome ?>" 
                                                            data-ativo="<?php echo $ativo ?>" 
                                                           >
                                                                <i class="fas fa-user-edit"></i></button> 
                                                                
                                                              
                                                        </td>

                                                    </tr>

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="ativar_cliente.php" method="post">
                                                                    <div class="form group">
                                                                            
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Código Interno</label>
                                                                            <input type="text" class="form-control" id="recipient-id_cliente" readonly name="id_cliente">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Descrição</label>
                                                                            <input type="text" class="form-control" id="recipient-descricao" readonly name="nome" >
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Gostaria de ativar novamente o cliente ?</label>
                                                                        </div>
                                                                    

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-primary">Sim</button>
                                                                </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <!-- Fim Modal Edit -->

                                                    

                                                <?php }  ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->

                            </div>
                            <!-- end card-->

                        </div>


                        <!-- Fim DataTable -->

                    </div>



                </div>
            </div><!-- end card-->







        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
    <!-- END content-page -->

    <script type="text/javascript">
        $(".id_cliente").mask("00000");
        $(".telefone").mask("(00) 0000-0000");
        $(".celular").mask("(00) 00000-0000");
        $(".cep").mask("00.000-000");
        $(".cpf").mask("000.000.000-00");
        $(".cnpj").mask("00.000.000/0000-00");
        $(".data").mask("00/00/0000");
    </script>

    <?php include 'footer.php'; ?>

    <!-- Mascaras utilizadas-->
    


    <!-- Plugin de busca e paginação Data Table -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                    }
                }

            )


        });
    </script>

    <script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"></script>
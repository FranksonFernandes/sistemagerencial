<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body{
            background-color:  #073a79;
        }

        form{
            border: solid 1px lightgray;
		    border-radius: 20px;
            padding: 20px;
           
            
        }

        
    </style>

    <title>Autenticação</title>
</head>



<!-- Custom styles for this template -->

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top: 150px">

                <form action="index1.php" method="POST">
                
                <!-- Retorno de validação de senha para alertas  -->
                    <?php

        
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        if ($msg == 1)
                         { ?>
                            <div class="alert alert-warning" role="alert">
                                Solicitação feita! Por favor aguarde o administrador aprovar.
                            </div>

                    <?php } elseif ($msg == 2) { ?>

                        
                        <div class="alert alert-danger" role="alert">
                                Senha incorreta, ou E-mail não cadastrado.
                        </div>

                    <?php } else { ?>
                        
                        <div class="alert alert-danger" role="alert">
                               E-mail inativo, favor procurar administrador do sistema!
                        </div>

                                
                       <?php } } ?>


                    <!-- Colocar imagem <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
                    <div class="form-group">
                        <label for="inputEmail" class="form-group" style="color: lightgoldenrodyellow;">E-Mail</label>
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="" autofocus="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputPassword" class="form-group" style="color: lightgoldenrodyellow;">Senha</label>
                        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                    </div>


                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                    
                </form>


                <br>

                <center><a href="frm_cadastrar_usuario.php">Criar uma conta?</a> </center>




            </div>
            <div class="col-md-3"></div>
        </div>

    </div>




</body>

</html>
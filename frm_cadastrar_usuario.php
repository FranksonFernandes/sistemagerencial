<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Autenticação</title>
</head>

    <style>
        body{
            background-color:  #073a79;
        }

        form{
            border: solid 1px lightgray;
		    border-radius: 20px;
            padding: 20px;
           
            
        }

        label{
            color: lightgoldenrodyellow;
        }

        
    </style>

<!-- Custom styles for this template -->

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin-top: 150px">

                <form action="./painel/inserir_usuario.php" method="post">
                    <!-- Colocar imagem <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
                    <div class="form-group">
                        <label for="inputEmail" class="form-group">E-Mail</label>
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="form-group">Nome</label>
                        <input name="nome" type="text" id="inputEmail" class="form-control" placeholder="Nome" required="" autofocus="">
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="inputPassword" class="form-group">Senha</label>
                        <input name="senha" type="password" id="password" class="form-control" placeholder="Senha" required="">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="form-group">Confirmar Senha</label>
                        <input name="confirmar_senha" type="password" id="confirm_password" class="form-control"  placeholder="Confirmar senha" required="">
                    </div>


                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Enviar Solicitação</button>

                </form>

                <br>

                <center> 
                    <a href="index.php">Voltar</a>
                </center>

                </div>
            <div class="col-md-4"></div>
        </div>

    </div>

</body>

</html>

<!-- Validando se a senha informada é igual na confirmação -->


<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
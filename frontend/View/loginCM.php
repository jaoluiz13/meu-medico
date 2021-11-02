<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login|Meu medico</title>
    <link rel="icon" href="../src/medico2.png">
</head>
<body>
    <!--Inicio do cabecalho-->
    <header>
        <nav class="navbar  navbar-expand-md navbar-light navbar-transparente cabecalho">
        <div class="container">
            <a href="index.php" class="navbar brand cabecalho1">
                <img  src="../src/medico2.png" alt="logo" width="80">
                <span class="cabecalho2">Meu Médico</span> 
            </a>
        </div>
    </nav>
    </header>
    <!--Fim do cabecalho-->

    <!--Inicio do corpo-->
    <section >
       <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center checkout">
                    <form id="formLoginCM" action="../../backend/sistema/logar.php?opcao=cm" method="post">
                        <small id="hf" class="hf">Por favor preencha todos os campos corretamente</small>
                        <div class="form-group">
                          <br>
                          <label for="cpf">Seu CNPJ/CPF</label>
                          <input type="text"  name="cpfLoginCM" class="form-control" id="cpfLoginCM" aria-describedby="cpfcnpj" placeholder="Seu CNPJ/CPF">
                          <small id="cpfcnpj" class="form-text text-muted">Nunca vamos compartilhar seus dados com ninguém.</small>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="senha">Senha</label>
                          <input type="password" name="senhaLoginCM"  class="form-control" id="senhaLoginCM" placeholder="Sua Senha">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                        <br>
                        <small id="cpf" class="form-text text-muted "><a class="linkLogin" href="./cadastroPaciente.html">Esqueci minha senha</a></small>
                        <br>
                        <small id="cpf" class="form-text text-muted">Ainda não possui conta ? clique <a class="linkLogin" href="./cadastroCM.php">aqui</a></small>
                    </form>
                </div>
            </div>
       </div>
    </section>
     <!--Fim do corpo-->
</body>
<script type="text/javascript">
   //var cpfcnpj = document.getElementById('cpfLoginCM').value;
   //var senha = document.getElementById('senhaLoginCM').value;
   var form =  document.getElementById("formLoginCM");

   form.onsubmit  = function travaForm(){
    if(document.getElementById('cpfLoginCM').value == '' &&  document.getElementById('senhaLoginCM').value == '' ){
            document.getElementById('cpfLoginCM').style.border = "1px solid red";
            document.getElementById('senhaLoginCM').style.border = "1px solid red";
            
            document.getElementById('hf').style.display = 'inline';

            return false;
    }
    if(document.getElementById('cpfLoginCM').value == ''){

            document.getElementById('cpfLoginCM').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';

            return false;
    }
    if(document.getElementById('senhaLoginCM').value == ''){

            document.getElementById('senhaLoginCM').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';

            return false;
    }
    if(document.getElementById('cpfLoginCM').value != '' && document.getElementById('senhaLoginCM').value != '' ){

              return true;
    }


  
}

</script>
</html>
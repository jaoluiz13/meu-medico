<?php



?>
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
    <title>Cadastro|Meu Medico</title>
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
                <div class="d-flex justify-content-center checkout" >
                    <form id="formCadCM" action="../../backend/sistema/mm.controller.php?opcao=cm" method="post">

                            <input type="hidden" id="nomeCM" name="nomeCM" value="<?php echo $_POST['nomeCM']; ?>">
                            <input type="hidden" id="sobrenomeCM" name="sobrenomeCM" value="<?php echo $_POST['sobrenomeCM']; ?>">
                            <input type="hidden" id="nascimentoCM" name="nascimentoCM" value="<?php echo $_POST['nascimentoCM']; ?>">
                            <input type="hidden" id="emailCM" name="emailCM" value="<?php echo $_POST['emailCM']; ?>">
                            <input type="hidden" id="senhaCM" name="senhaCM" value="<?php  echo $_POST['senhaCM']; ?>">
                            <input type="hidden" id="senhaCM2" name="senhaCM2" value="<?php echo $_POST['senhaCM2']; ?>">
                            <input type="hidden" id="telefoneCM" name="telefoneCM" value="<?php echo $_POST['telefoneCM']; ?>">
                            <input type="hidden" id="cpfcnpjCM" name="cpfcnpjCM" value="<?php echo $_POST['cpfcnpjCM']; ?>">
                            <input type="hidden" id="termoUsoCM" name="termoUsoCM" value="<?php echo $_POST['termoUso']; ?>">
                            <br>
                        <h3 class="tituloCad">Cadastre-se e faça parte</h3>
                        <small id="nome" class="form-text text-muted">Caro Paciente, nunca vamos compartilhar seus dados com ninguém.</small>
                        <br>
                        <small id="hf" class="hf">Por favor preencha todos os campos corretamente</small>
                        <div class="form-group">
                          <br>
                          <label for="CEP">CEP</label>
                          <input type="text" name="cepCM" class="form-control" id="cepCMCad" aria-describedby="cep" placeholder="Seu Cep">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="Rua">Rua</label>
                          <input type="text" name="ruaCM" class="form-control" id="ruaCMCad" placeholder="Sua Rua">
                        </div>
                        <br>
                          <div class="form-group">
                            <label for="Número">Número</label>
                            <input type="text" name="numeroCM" class="form-control" id="numeroCMCad" placeholder="Número">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Logradouro">Logradouro</label>
                            <input type="text" name="logradouroCM" class="form-control" id="logradouroCMCad" placeholder="Ex:Casa, Ap">
                        </div>
                        <br>
                           
                            <button type="submit" class="btn btn-dark btCad" >Cadastrar</button>
                            <br>
                            <small id="hf2" class="hf2">As senhas precisam ser iguais</small>
                            <br>
                            <small id="hf8" class="hf8">A rua precisa ter 5 ou mais caracteres</small>
                            <br>
                            <small id="hf4" class="hf4">O CEP precisa  ter 5 ou mais caracteres</small>
                            <br>
                            <small id="hf5" class="hf5">O numero precisa ser maior que 1 caracter</small>
                            <br>
                            <small id="hf6" class="hf6">O logradouro precisa ser maior ou igual que 5 caracteres </small>
                            <br>
                            <small id="hf7" class="hf7">O CPF deve ter mais que 10 digitos</small>
                          </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </section>
     <!--Fim do corpo-->
     <footer>
         <br>
     </footer>
</body>
<!--INICIO DO SCRIPT-->
<script>
    var form =  document.getElementById("formCadCM");

    
    form.onsubmit = function travaForm(){

        var cepval = document.getElementById('cepCMCad').value; 
        var ruaval = document.getElementById('ruaCMCad').value ;
        var numeroval = document.getElementById('numeroCMCad').value ;
        var logradouroval = document.getElementById('logradouroCMCad').value ;
        

        var cep = cepval.length;
        var rua = ruaval.length;
        var numero = numeroval.length;
        var logradouro = logradouroval.length;

        //nao deixa enviar se TODOS os campos estiverem vazios ao mesmo tempo
        if(document.getElementById('cepCMCad').value == '' && 
        document.getElementById('ruaCMCad').value == '' &&
        document.getElementById('numeroCMCad').value == '' &&
        document.getElementById('logradouroCMCad').value == ''){

            document.getElementById('cepCMCad').style.border = "1px solid red";
            document.getElementById('ruaCMCad').style.border = "1px solid red";
            document.getElementById('numeroCMCad').style.border = "1px solid red";
            document.getElementById('logradouroCMCad').style.border = "1px solid red";
            
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
        //nao deixa enviar se o campo CEP estiver vazio
        if(document.getElementById('cepCMCad').value == ''){

            document.getElementById('cepCMCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
         //nao deixa enviar se o campo RUA estiver vazio
        if(document.getElementById('ruaCMCad').value == ''){

            document.getElementById('ruaCMCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;

        }
        //nao deixa enviar se o campo NUMERO estiver vazio
        if(document.getElementById('numeroCMCad').value == ''){

            document.getElementById('numeroCMCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;


        }
        //nao deixa enviar se o campo LOGRADOURO estiver vazio
        if( document.getElementById('logradouroCMCad').value == ''){
            
            document.getElementById('logradouroCMCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;

        }
        
        if( cep < 5){
            document.getElementById('cepCMCad').style.border = "1px solid red";
            document.getElementById('hf4').style.display = 'inline';
            return false;
        }if( rua < 5){
            document.getElementById('ruaCMCad').style.border = "1px solid red";
            document.getElementById('hf8').style.display = 'inline';
            return false;
        }if(numero < 1){
            document.getElementById('numeroCMCad').style.border = "1px solid red";
            document.getElementById('hf5').style.display = 'inline';
            return false;
        }if(logradouro < 2){
            document.getElementById('logradouroCMCad').style.border = "1px solid red";
            
            document.getElementById('hf6').style.display = 'inline';
            return false;
        }
        if(cep >= 5 && rua >= 5 && numero >=1 && logradouro >=2 ){
            return true;
        }
        //deixa enviar se os campos  estiver preenchidos 
        if(document.getElementById('cepCMCad').value != '' && 
        document.getElementById('ruaCMCad').value != '' &&
        document.getElementById('logradouroCMCad').value != '' &&
        document.getElementById('numeroCMCad').value != ''){
            return true;
        }
       
    }
   
</script>
</html>
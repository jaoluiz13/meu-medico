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
                    <form id="formCadPaciente" action="../View/enderecoCadPaciente.php" method="post">
                        <h3 class="tituloCad">Cadastre-se e faça parte</h3>
                        <small id="nome" class="form-text text-muted">Caro Paciente, nunca vamos compartilhar seus dados com ninguém.</small>
                        <br>
                        <small id="hf" class="hf">Por favor preencha todos os campos corretamente</small>
                        <div class="form-group">
                          <br>
                          <label for="nome">Nome</label>
                          <input type="text" name="nomePaciente" class="form-control" id="nomePacienteCad" aria-describedby="nome" placeholder="Seu nome">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="sobrenome">Sobrenome</label>
                          <input type="text" name="sobrenomePaciente" class="form-control" id="sobrenomePacienteCad" placeholder="Seu sobrenome">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dataNascimento">Data de Nascimento</label>
                            <input type="date" name="nascimentoPaciente" class="form-control" id="nascimentoPacienteCad" placeholder="Seu aniversário">
                        </div>
                          <br>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="emailPaciente" class="form-control" id="emailPacienteCad" placeholder="Seu email">
                        </div>
                        <br>
                          <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senhaPaciente" class="form-control" id="senhaPacienteCad" placeholder="Sua senha deve ser maior que 6 caracteres">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="senha">Digite novamente sua senha</label>
                            <input type="password" name="senhaPaciente2" class="form-control" id="senhaPacienteCad2" placeholder="Sua senha deve ser maior que 6 caracteres">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" name="telefonePaciente" class="form-control" id="telefonePacienteCad" placeholder="Seu numero de telefone">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="cpf" name="cpfPaciente" class="form-control" id="cpfPacienteCad" placeholder="Seu CPF">
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" name="termoUso" type="checkbox" id="termoUso" value="sim">
                            <label class="form-check-label" for="termoUso">
                            Aceito os <a class="linkCad"  id="termos">termos de uso</a>
                            </label>
                            <br>
                            <br>
                            <button type="submit"  class="btn btn-dark btCad" >PROXIMO</button>
                            <br>
                            <small id="hf2" class="hf2">As senhas precisam ser iguais</small>
                            <br>
                            <small id="hf8" class="hf8">O email precisa ser um email valido</small>
                            <br>
                            <small id="hf4" class="hf4">O nome e o sobrenome precisam ter 3 ou mais caracteres</small>
                            <br>
                            <small id="hf5" class="hf5">A senha precisa ser  igual ou maior que 6 caracteres</small>
                            <br>
                            <small id="hf6" class="hf6">O telefone precisa ser maior que 6 numeros</small>
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
    var form =  document.getElementById("formCadPaciente");

    
    form.onsubmit = function travaForm(){

        var nomeval = document.getElementById('nomePacienteCad').value; 
        var sobrenomeval = document.getElementById('sobrenomePacienteCad').value ;
        var emailval = document.getElementById('emailPacienteCad').value ;
        var senha1val = document.getElementById('senhaPacienteCad').value ;
        var senha2val =  document.getElementById('senhaPacienteCad2').value;
        var telefoneval =  document.getElementById('telefonePacienteCad').value ;
        var cpfval =  document.getElementById('cpfPacienteCad').value ;

        var nome = nomeval.length;
        var sobrenome = sobrenomeval.length;
        var email = emailval.length;
        var senha1 = senha1val.length;
        var senha2 = senha2val.length;
        var telefone = telefoneval.length;
        var cpf = cpfval.length;

        //nao deixa enviar se TODOS os campos estiverem vazios ao mesmo tempo
        if(document.getElementById('nomePacienteCad').value == '' && 
        document.getElementById('sobrenomePacienteCad').value == '' &&
        document.getElementById('nascimentoPacienteCad').value == '' &&
        document.getElementById('emailPacienteCad').value == '' &&
        document.getElementById('senhaPacienteCad').value == '' &&
        document.getElementById('senhaPacienteCad2').value == '' &&
        document.getElementById('telefonePacienteCad').value == '' &&
        document.getElementById('cpfPacienteCad').value == '' &&
        document.getElementById('termoUso').checked == false){

            document.getElementById('nomePacienteCad').style.border = "1px solid red";
            document.getElementById('sobrenomePacienteCad').style.border = "1px solid red";
            document.getElementById('nascimentoPacienteCad').style.border = "1px solid red";
            document.getElementById('emailPacienteCad').style.border = "1px solid red";
            document.getElementById('senhaPacienteCad').style.border = "1px solid red";
            document.getElementById('senhaPacienteCad2').style.border = "1px solid red";
            document.getElementById('telefonePacienteCad').style.border = "1px solid red";
            document.getElementById('cpfPacienteCad').style.border = "1px solid red";
            document.getElementById('termoUso').style.border = "1px solid red";

            document.getElementById('hf').style.display = 'inline';
            return false;
        }
        //nao deixa enviar se o campo NOME estiver vazio
        if(document.getElementById('nomePacienteCad').value == ''){

            document.getElementById('nomePacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
         //nao deixa enviar se o campo SOBRENOME estiver vazio
        if(document.getElementById('sobrenomePacienteCad').value == ''){

            document.getElementById('sobrenomePacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;

        }
        //nao deixa enviar se o campo DATA DE NASCIMENTO estiver vazio
        if(document.getElementById('nascimentoPacienteCad').value == ''){

            document.getElementById('nascimentoPacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;


        }
        //nao deixa enviar se o campo EMAIL estiver vazio
        if( document.getElementById('emailPacienteCad').value == ''){
            
            document.getElementById('emailPacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;

        }
        //nao deixa enviar se o campo SENHA estiver vazio
        if( document.getElementById('senhaPacienteCad').value == ''){

            document.getElementById('senhaPacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;


        }
        //nao deixa enviar se o campo CONFIRMAR SENHA estiver vazio
        if( document.getElementById('senhaPacienteCad2').value == ''){

            document.getElementById('senhaPacienteCad2').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
        //nao deixa enviar se o campo TELEFONE estiver vazio 
        if(document.getElementById('telefonePacienteCad').value == ''){

            document.getElementById('telefonePacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        } //nao deixa enviar se o campo CPF estiver vazio 
        if( document.getElementById('cpfPacienteCad').value == ''){

            document.getElementById('cpfPacienteCad').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
         //nao deixa enviar se o campo TEMO DE USO estiver desmarcado 
        if(document.getElementById('termoUso').checked == false){

            document.getElementById('termoUso').style.border = "1px solid red";
            document.getElementById('hf').style.display = 'inline';
            return false;
        }
         //nao deixa enviar se os campos  estiver vazio 
         if( document.getElementById('senhaPacienteCad').value != document.getElementById('senhaPacienteCad2').value){
            
            document.getElementById('senhaPacienteCad').style.border = "1px solid red";
            document.getElementById('senhaPacienteCad2').style.border = "1px solid red";
            document.getElementById('hf2').style.display = 'inline';
            
            return false;
        }
        if( nome < 3){
            document.getElementById('nomePacienteCad').style.border = "1px solid red";
            document.getElementById('hf4').style.display = 'inline';
            return false;
        }if(sobrenome < 3){
            document.getElementById('sobrenomePacienteCad').style.border = "1px solid red";
            document.getElementById('hf4').style.display = 'inline';
            return false;
        }if(email <= 10){
            document.getElementById('emailPacienteCad').style.border = "1px solid red";
            document.getElementById('hf5').style.display = 'inline';
            return false;
        }if(senha1 < 6 || senha2 < 6){
            document.getElementById('senhaPacienteCad').style.border = "1px solid red";
            document.getElementById('senhaPacienteCad2').style.border = "1px solid red";
            document.getElementById('hf6').style.display = 'inline';
            return false;
        }if(cpf <=10){
            document.getElementById('cpfPacienteCad').style.border = "1px solid red";
            document.getElementById('hf7').style.display = 'inline';
            return false;

        }if(telefone < 6){
            document.getElementById('telefonePacienteCad').style.border = "1px solid red";
            document.getElementById('hf8').style.display = 'inline';
            return false;
        }
        if(nome > 3 && sobrenome > 3 && email >=10 && senha1 >5 && senha2 >5 && cpf >=10 && telefone > 6){
            return true;
        }
        //deixa enviar se os campos  estiver preenchidos 
        if(document.getElementById('nomePacienteCad').value != '' && 
        document.getElementById('sobrenomePacienteCad').value != '' &&
        document.getElementById('nascimentoPacienteCad').value != '' &&
        document.getElementById('emailPacienteCad').value != '' &&
        document.getElementById('senhaPacienteCad').value != '' &&
        document.getElementById('senhaPacienteCad2').value != '' &&
        document.getElementById('telefonePacienteCad').value != '' &&
        document.getElementById('cpfPacienteCad').value != '' &&
        document.getElementById('termoUso').checked == true){
            return true;
        }
       
    }
   
</script>
</html>
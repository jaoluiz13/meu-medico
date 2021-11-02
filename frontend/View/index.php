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
    <title>Meu Medico</title>
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
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto menu" id="menu">
                    <li class="nav-item">
                        <a href="./sobreNos.php" class=" cabecalhoMenu">
                            Sobre Nós 
                        </a>
                    </li>
                    <li class="nav-item divisor">
                    
                    </li>
                    <li class="nav-item">
                        <a href="./verificacao2.php" class=" cabecalhoMenu">
                            Cadastra-se 
                        </a>
                    </li>
                    <li class="nav-item divisor">
                    
                    </li>
                    <li class="nav-item">
                        <a href="./verificacao.php" class=" cabecalhoMenu">
                            Entrar 
                        </a>
                    </li>
                                
                </ul>
            </div>
            
        </div>
    </nav>
    </header>
    <!--Fim do cabecalho-->

    <!--Inicio do corpo-->
    <section id="home"><!--Inicio da seção-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex"> <!--Textos sa seção-->
                    <div class="align-self-center">
                        <h1 class="display-5">Meu Médico, seu software para marcar e administrar suas reservas médicas </h1>
                        <br/>
                        <p>
                            Reservas médicas para novas consultas e revisões
                        </p>
                        <form class="mt-4 mb-4">
                            <div class="input-group ">
                                <input type="text" placeholder="Digite seu email para receber nossa newsletter" class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-dark ">Cadastre-se</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div  class="col-md-6 d-none d-md-block">
                    <img class="imgIndex1" src="../src/medico1.png" width="450">
                </div>
            </div>
        </div>
    </section><!--Fim da seção-->

     <!--Fim do corpo-->
</body>
</html>
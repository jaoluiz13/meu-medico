<?php

    require_once '../sistema/mm.model.php';
    require_once '../sistema/mm.service.php';
    require_once '../sistema/conexao.php';

    $opcao = $_GET['opcao'];

    if($opcao == 'paciente'){

        $paciente = new Paciente();
        $endereco = new Endereco();
        $cm = new CM();
        $conecta = new Conexao();

        $paciente->__set('nome',$_POST['nomePaciente']);
        $paciente->__set('sobrenome',$_POST['sobrenomePaciente']);
        $paciente->__set('nascimento',$_POST['nascimentoPaciente']);
        $paciente->__set('email',$_POST['emailPaciente']);
        $paciente->__set('senha',$_POST['senhaPaciente']);
        $paciente->__set('telefone',$_POST['telefonePaciente']);
        $paciente->__set('cpf',$_POST['cpfPaciente']);


        $mmService = new MmService($conecta,$paciente,$endereco,$cm);
        $mmService->cadastrarPaciente();
        header('Location: ../../View/cadastrado.php');


    }
    if($opcao == 'cm'){

    }




?>
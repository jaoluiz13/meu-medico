<?php

 class Paciente {
    private $nome;
    private $sobrenome;
    private $nascimento;
    private $email;
    private $senha;
    private $telefone;
    private $cpf;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
 }

 class CM {
    private $nome;
    private $sobrenome;
    private $nascimenoFundacao;
    private $email;
    private $senha;
    private $telefone;
    private $cpfcnpj;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

 }

 class Endereco{
    
    private $cep;
    private $rua;
    private $numero;
    private $logradouro;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

 }


?>
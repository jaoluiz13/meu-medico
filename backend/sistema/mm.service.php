<?php

require '../sistema/conexao.php';

class MmService{

    private $conectar;
    private $paciente;
    private $endereco;
    private $cm;

    public function __construct(Conexao $conexao,Paciente $paciente,Endereco $endereco,CM $cm){

        $this->conectar = $conexao->conectar();
        $this->paciente = $paciente;
        $this->endereco = $endereco;
        $this->cm = $cm;
    }

    public function cadastrarPaciente(){

        $query = 'insert into pacientes (nomePaciente,sobrenomePaciente,dataNascimentoPaciente,emailPaciente,
        telefonePaciente,cpfPaciente,senhaPaciente)values(:nome,:sobrenome,:dataNascimento,:email,:telefone,:cpf,:senha)';

        $stmt = $this->conectar->prepare($query);

        $stmt->bindValue(':nome',$this->paciente->__get('nome'));
        $stmt->bindValue(':sobrenome',$this->paciente->__get('sobrenome'));
        $stmt->bindValue(':dataNascimento',$this->paciente->__get('nascimento'));
        $stmt->bindValue(':email',$this->paciente->__get('email'));
        $stmt->bindValue(':telefone',$this->paciente->__get('telefone'));
        $stmt->bindValue(':cpf',$this->paciente->__get('cpf'));
        $stmt->bindValue(':senha',$this->paciente->__get('senha'));

        $stmt->execute();

        $query2 = 'insert into enderecos (cep,rua,numero,logradouro) values (:cep,:rua,:numero,:logradouro)';

        $stmt2 = $this->conexao->prepare($query2);

        $stmt2->bindValue(':cep', $this->endereco->__get('cep'));
        $stmt2->bindValue(':rua', $this->endereco->__get('rua'));
        $stmt2->bindValue(':numero', $this->endereco->__get('numero'));
        $stmt2->bindValue(':logradouro', $this->endereco->__get('logradouro'));

        $stmt2->execute();
        
    }
    public function cadastrarCM(){

        $query = 'insert into medicos_clinicas (nomeMC,sobrenomeMC,dataFundacao/Nascimento,emailMC,
        telefoneMC,cpf/cnpj,senhaMC)values(:nome,:sobrenome,:data,:email,:telefone,:cpf,:senha)';

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':nome',$this->cm->__get('nome'));
        $stmt->bindValue(':sobrenome',$this->cm->__get('sobrenome'));
        $stmt->bindValue(':dataNascimento',$this->cm->__get('nascimentoFundacao'));
        $stmt->bindValue(':email',$this->cm->__get('email'));
        $stmt->bindValue(':telefone',$this->cm->__get('telefone'));
        $stmt->bindValue(':cpf',$this->cm->__get('cpfcnpj'));
        $stmt->bindValue(':senha',$this->cm->__get('senha'));

        $stmt->execute();

        $query2 = 'insert into enderecos (cep,rua,numero,logradouro) values (:cep,:rua,:numero,:logradouro)';

        $stmt2 = $this->conexao->prepare($query2);

        $stmt2->bindValue(':cep', $this->endereco->__get('cep'));
        $stmt2->bindValue(':rua', $this->endereco->__get('rua'));
        $stmt2->bindValue(':numero', $this->endereco->__get('numero'));
        $stmt2->bindValue(':logradouro', $this->endereco->__get('logradouro'));

        $stmt2->execute();
        
    }

}

?>

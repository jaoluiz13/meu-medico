<?php
    class Conexao{

     private $host = 'localhost';
     private $dbname ='meumedico';
     private $port = '3306';
     private $user = 'root';
     private $pass = '';

     public function conectar(){
         try{
            $conexao = new PDO("mysql:host=localhost;port=3306;dbname=meumedico","root","") or die;
            echo 'conexao realizada';

         }catch(PDOException $e){
            echo '<p>'. $e->getMessage(). '</p>';
         }
     }
    }

?>
<?php
    declare(strict_types=1);
    require_once('Cpf.php');
    class Cliente {
        protected Cpf $cpf;
        protected string $nome;

        public function __construct(string $nome, Cpf $cpf){
            $this->setNome($nome);
            $this->cpf = $cpf;
        }
        public function getCpf():Cpf{
            return $this->cpf;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function setNome(string $nome):void{
            if(strlen($nome)<4)
                die("Nome inválido. A aplicação será encerrada");
            $this->nome = $nome;
        }
    }
?>
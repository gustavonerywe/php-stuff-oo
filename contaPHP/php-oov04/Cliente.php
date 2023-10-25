<?php
    declare(strict_types=1);
    require_once('Cpf.php');
    class Cliente {
        private Cpf $cpf;
        private string $nome;

        public function __construct(string $nome, Cpf $cpf){
            $this->cpf = $cpf;
            $this->setNome($nome);
        }
        public function getCpf():Cpf{
            return $this->cpf;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }
    }
?>
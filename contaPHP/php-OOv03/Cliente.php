<?php
    declare(strict_types=1);
    class Cliente {
        private string $cpf;
        private string $nome;

        public function __construct(string $nome, string $cpf){
            $this->setCpf($cpf);
            $this->setNome($nome);
        }
        public function getCpf(){
            return $this->cpf;
        }

        private function setCpf(string $cpf):void{
            if($this->validaCpf($cpf)===false){
                die("Cpf invalido. A aplicação será encerrada");
            }
            $this->cpf = $cpf;
        }

        private function validaCpf(string $cpf):bool{
            if(strlen($cpf)===14 && strpos($cpf, '.')===3 && strpos($cpf, '.', 4)===7 && strpos($cpf, '-')===11)
                return true;
            else{
                return false;
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }
    }
?>
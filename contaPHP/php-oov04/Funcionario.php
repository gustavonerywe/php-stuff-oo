<?php
    declare(strict_types=1);
    require_once('Cpf.php');

    class Funcionario{
        private Cpf $cpf;
        private string $nome;
        private float $salario = 0.0;

        public function __construct(string $nome, Cpf $cpf, float $salario){
            $this->setNome($nome);
            $this->cpf = $cpf;
            $this->setSalario($salario);
        }

        public function getCpf():Cpf{
            return $this->cpf;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function setNome(string $nome):void{
            if(strlen($nome) < 4)
                die("O nome é inválido. A aplicação será encerrada.");
            $this->nome = $nome;
        }

        public function setSalario(float $salario){
            if($salario < 1375.45)
                die("O salário é menor que o salário mínimo. A aplicação será encerrada");
            $this->salario = $salario;
        }

        public function getSalario():float{
            return $this->salario;
        }
    }
?>
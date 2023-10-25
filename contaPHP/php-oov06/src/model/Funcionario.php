<?php
    declare(strict_types=1);
    namespace cefet\projeto\model;
    use cefet\projeto\model\Pessoa;

    class Funcionario extends Pessoa{
        private float $salario = 0.0;

        public function __construct(string $nome, Cpf $cpf, float $salario){
            parent::__construct($nome, $cpf);
            $this->setSalario($salario);
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
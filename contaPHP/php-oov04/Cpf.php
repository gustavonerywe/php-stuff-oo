<?php
    declare(strict_types=1);

    class Cpf{
        private string $numero;

        public function __construct(string $numero){
            if($this->validaCpf($numero)===false){
                die("O CPF é inválido. Dessa forma, a aplicação será encerrada :(");
            }
            $this->numero = $numero;
        }

        private function validaCpf(string $numero):bool{
            if(strlen($numero)===14 && strpos($numero, '.')===3 && strpos($numero, '.', 4)===7 && strpos($numero, '-')===11)
                return true;
            else
                return false; 
        }

        public function getNumero():string{
            return $this->numero;
        }
    }
?>
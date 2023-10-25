<?php

    class Conta{
        private int $numero = 0;
        private string $cpf = "";
        private string $titular = "";
        private float $saldo = 0;
        // metodos

        public function obtemNumero():float{
            return $this->numero;
        }

        public function modificaNumero(int $numero):void{
            if($numero<=0)
                die("Numero invalido. Aplicacao encerrada");
            $this->numero = $numero;

        }

        public function obtemCpf():string{
            return $this->cpf;
        }

        // metodo encapsulado
        private function validaCpf(string $cpf):bool{
            if(strlen($cpf)===14 && strpos($cpf, '.')===3 && strpos($cpf, '.', 4)===7 && strpos($cpf, '-')===11)
                return true;
            return false;
        }
        
        public function modificaCpf(string $cpf):void{
            // if(strlen($cpf)!=11)
            //     die("cpf invalido. aplicacao encerrada");
            if($this->validaCpf($cpf)===false)
                die("Cpf invalido. aplicacao encerrada");
            $this->cpf = $cpf;
        }

        // public function modificaCpf(string $cpf):void{
        //     if($this->validaCpf($cpf)===false)
        //         die("Cpf invalido. aplicacao encerrada");
        // }



        public function obtemTitular():string{
            return $this->titular;
        }

        public function modificaTitular(string $titular):void{
            if(strlen($titular)<5)
                die("titular precisa ter ao menos 5 caracteres. aplicacao encerrada");
            $this->titular = $titular;
        }

        public function obtemSaldo():float{
            return $this->saldo;
        }

        public function mostraDados():void{
            echo "A conta de {$this->titular} possui o cpf {$this->cpf} e tem o saldo de R\${$this->saldo}<br>";
        }

        function saca(float $valor):void{
            if($valor>$this->saldo){
                //o this referencia o proprio objeto
                echo "Valor R\${$valor} alto demais para saque.<br>";
                return; //Early return = tramontina
            }
            $this->saldo -=$valor;
        }
        function deposita(float $valor){
            if(! ($valor>0)){
                echo "Valor R\${$valor} precisa ser positivo p/ depóstivo.<br>";
                return; //Early return
            }
            $this->saldo += $valor;
        }
        function transferePara(Conta $contaDestino, float $valor){
            $this->saca($valor);
            $contaDestino->deposita($valor);
        }
    }

?>
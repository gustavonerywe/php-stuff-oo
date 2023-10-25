<?php
    declare(strict_types=1);
    namespace cefet\projeto\model;
    use cefet\projeto\model\Conta;

    class ContaCorrente extends Conta{
        public function transferePara(Conta $contaDestino, float $valor):bool{
            // $this->saca($valor);
            // $contaDestino->deposita($valor);
            if($this->saca($valor)===true)
                return $contaDestino->deposita($valor);
            else
                return false;
        }

        protected function obterTaxaSaque():float{
            return 0.10;
        }

    }
?>
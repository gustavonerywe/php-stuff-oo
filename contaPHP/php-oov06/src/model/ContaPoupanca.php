<?php
    declare(strict_types=1);
    namespace cefet\projeto\model;
    use cefet\projeto\model\Conta;

    class ContaPoupanca extends Conta{
        protected function obterTaxaSaque():float{
            return 0.08;
        }
    }
?>
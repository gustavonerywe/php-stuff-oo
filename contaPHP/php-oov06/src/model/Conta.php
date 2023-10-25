<?php

    declare(strict_types=1);
    namespace cefet\projeto\model;
    use cefet\projeto\model\Cliente;
        abstract class Conta{
            // atributos
            protected int $numero;
            protected Cliente $titular;
            protected float $saldo;
            // metodos
            public function __construct(int $numero, Cliente $titular){
                $this->setNumero($numero);
                $this->titular = $titular;
                $this->saldo = 0;
            }

            public function getNumero():float{
                return $this->numero;
            }

            public function setNumero(int $numero):void{
                if($numero<=0){
                    die("Numero invalido. Aplicacao encerrada");
                // $this->numero = $numero;
                exit();
                }
                $this->numero = $numero;
            }

            public function getTitular():Cliente{
                return $this->titular;
            }

            public function getSaldo():float{
                return $this->saldo;
            }

            public function mostraDados():void{
                echo "A conta {$this->getNumero()} de {$this->getTitular()->getNome()} com cpf {$this->getTitular()->getCpf()->getNumero()} e tem o saldo de R\${$this->getSaldo()}<br>";
            }

            protected abstract function obterTaxaSaque():float;

            public function saca(float $valor):bool{
                $taxaDeSaque = $valor * $this->obterTaxaSaque();
                $valor += $taxaDeSaque;
                if($valor<=0 || $valor>$this->saldo){
                    return false;
                }
                $this->saldo-=$valor;
                return true;
            }

            public function deposita(float $valor):bool{
                if($valor<=0)
                    // echo "Depósito não efetuado. O valor deve ser maior que 0.<br>";
                    // return; //Early return
                        return false; 
                    $this->saldo+=$valor;
                    return true;

                // $this->saldo += $valor;
            }
        }
?>
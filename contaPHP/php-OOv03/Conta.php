<?php

    declare(strict_types=1);
    require_once("Cliente.php");
        class Conta{
            // atributos
            private int $numero;
            private Cliente $titular;
            private float $saldo;
            private static int $totalDeContas = 0; //o static serve para o valor não ser reiniciado a cada chamada
            // metodos
            public function __construct(int $numero, Cliente $titular){
                // "__" magia né pae
                $this->setNumero($numero);
                $this->titular = $titular;
                $this->saldo = 0;
                self::$totalDeContas++; // contabilizando quando eu crio uma conta
            }

            public function __destruct(){
                echo "Destruindo uma conta que estava em memória...<br>";
                Conta::$totalDeContas--;
            }

            public static function getTotalDeContas(){
                return Conta::$totalDeContas;
                //métodos estáticos só podem acessar membros estáticos
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
       

            // public function modificaCpf(string $cpf):void{
            //     if($this->validaCpf($cpf)===false)
            //         die("Cpf invalido. aplicacao encerrada");
            // }



            public function getTitular():Cliente{
                return $this->titular;
            }

            public function getSaldo():float{
                return $this->saldo;
            }

            public function mostraDados():void{
                echo "A conta {$this->getNumero()} de {$this->getTitular()->getNome()} com cpf {$this->getTitular()->getCpf()} e tem o saldo de R\${$this->getSaldo()}\\<br>";
            }

            public function saca(float $valor):bool{
                if($valor<=0 || $valor>$this->saldo){
                    //o this referencia o proprio objeto
                    // echo "Valor R\${$valor} alto demais para saque.<br>";
                    // return; //Early return = tramontina
                    return false;
                }else{
                    $this->saldo-=$valor;
                    return true;
                }
                // $this->saldo -=$valor;
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

            public function transferePara(Conta $contaDestino, float $valor):bool{
                // $this->saca($valor);
                // $contaDestino->deposita($valor);
                if($this->saca($valor)===true)
                    return $contaDestino->deposita($valor);
                else
                    return false;
            }
        }
?>

<!-- 12 - Porque invocamos métodos set em vez de simplesmente fazer atribuições?  -->
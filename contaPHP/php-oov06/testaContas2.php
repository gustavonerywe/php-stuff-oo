<?php
    require_once('autoload.php');
    use cefet\projeto\model\ContaCorrente;
    use cefet\projeto\model\ContaPoupanca;
    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\ContaUniversitaria;
    use cefet\projeto\model\Cpf;

        $umaContaCorrente = new ContaCorrente(5, new Cliente('Nery', new Cpf("123.456.789-01")));
        $umaContaPoupanca = new ContaPoupanca(6, new Cliente('Caio', new Cpf("123.456.789-02")));
        $contaUniversitaria = new ContaUniversitaria(7, new Cliente("João", new Cpf("123.456.789-03")));
        $umaContaCorrente->deposita(2000);
        $umaContaPoupanca->deposita(1000);
        $contaUniversitaria->deposita(50);

  
        // $umaContaCorrente->transferePara($umaContaPoupanca, 500);

        $umaContaCorrente->saca(100);
        $umaContaPoupanca->saca(100);
        $contaUniversitaria->saca(10);
        
        $umaContaCorrente->mostraDados();
        $umaContaPoupanca->mostraDados();
        $contaUniversitaria->mostraDados();
?>
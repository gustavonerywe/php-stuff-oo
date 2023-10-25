<?php

    require_once('Conta.php');
    $conta1 = new Conta(1, "Dhiovanna", "123.456.789-10");#1
    // $conta1->setNumero(1);
    // $conta1->numero = 1;
    // $conta1->setCpf("123.456.789-10");
    
    $conta1->deposita(3000);
    $conta1->setTitular("Dhiovana Lyssa"); 


    // echo "A conta {$conta1->getNumero()} de {$conta1->getTitular()} possui um saldo de R\${$conta1->getSaldo()}<br>";
    $conta1->mostraDados();

    $conta2 = new Conta(2, "Kayllane", "123.456.789-11" );#2
    // $conta2 -> setNumero(2);
    // $conta2 -> setCpf("123.456.789-11");
    $conta2 -> deposita(4000);
    // $conta2 -> setTitular("Kayllane"); 

    // echo "A conta {$conta2->getNumero()} de {$conta2->getTitular()} possui um saldo de R\${$conta2->getSaldo()}<br>";
    $conta2->mostraDados();
    
    // $conta3 = new Conta();#3
    // $conta3->mostraDados();

    // echo "A conta {$conta3->getNumero()} de {$conta3->getTitular()} possui um saldo de R\${$conta3->getSaldo()}<br>";

    // $conta3 = new Conta();#3
    // $conta3 -> setNumero(3);
    // $conta3 -> setCpf("123.456.789-13");
    // $conta3 -> setTitular("Marcolino"); $conta3 -> deposita(2500);

    // echo "A conta {$conta1->getNumero()} de {$conta1->getTitular()} possui um saldo de R\${$conta1->getSaldo()}<br>";

    // echo "<br>";
    
    // echo "A conta {$conta2->getNumero()} de {$conta2->getTitular()} possui um saldo de R\${$conta2->getSaldo()}<br>";
    
    // echo "<br>";
    
    // $conta2->saca(1000);

    // echo "Após sacar 1000<br>";
    
    // echo "<br>";    

    // echo "A conta {$conta2->getNumero()} de {$conta2->getTitular()} possui um saldo de R\${$conta2->getSaldo()}<br>";

    // echo "<br>";

    // echo "A conta {$conta3->getNumero()} de {$conta3->getTitular()} possui um saldo de R\${$conta3->getSaldo()}<br>";

?>
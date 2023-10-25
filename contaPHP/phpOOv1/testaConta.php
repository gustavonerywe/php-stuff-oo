<?php

    require_once('Conta.php');
    $conta1 = new Conta();#1
    $conta1->modificaNumero(1);
    // $conta1->numero = 1;
    $conta1->modificaCpf("123.456.789-10");
    $conta1->modificaTitular("Dhiovana"); $conta1->deposita(3000);

    $conta2 = new Conta();#2
    $conta2 -> modificaNumero(2);
    $conta2 -> modificaCpf("123.456.789-11");
    $conta2 -> modificaTitular("Kayllane"); $conta2 -> deposita(4000);

    $conta3 = new Conta();#3
    $conta3 -> modificaNumero(3);
    $conta3 -> modificaCpf("123.456.789-13");
    $conta3 -> modificaTitular("Marcolino"); $conta3 -> deposita(2500);

    echo "A conta {$conta1->obtemNumero()} de {$conta1->obtemTitular()} possui um saldo de R\${$conta1->obtemSaldo()}<br>";

    echo "<br>";
    
    echo "A conta {$conta2->obtemNumero()} de {$conta2->obtemTitular()} possui um saldo de R\${$conta2->obtemSaldo()}<br>";
    
    echo "<br>";
    
    $conta2->saca(1000);

    echo "Após sacar 1000<br>";
    
    echo "<br>";    

    echo "A conta {$conta2->obtemNumero()} de {$conta2->obtemTitular()} possui um saldo de R\${$conta2->obtemSaldo()}<br>";

    echo "<br>";

    echo "A conta {$conta3->obtemNumero()} de {$conta3->obtemTitular()} possui um saldo de R\${$conta3->obtemSaldo()}<br>";

?>
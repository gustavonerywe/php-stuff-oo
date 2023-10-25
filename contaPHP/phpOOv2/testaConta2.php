<?php

    require_once('Conta.php');
    $conta1 = new Conta();#1
    $conta1->modificaNumero(1);
    // $conta1->numero = 1;
    $conta1->modificaCpf("123.456.789-10");
    $conta1->modificaTitular("Dhiovana"); $conta1->deposita = 3000;

    $conta2 = new Conta();#2
    $conta2 -> modificaNumero(2);
    $conta2 -> modificaCpf("123.456.789-11");
    $conta2 -> modificaTitular("Kayllane"); $conta2 -> deposita = 4000;

    $conta1->mostraDados();
    echo "<br>";
    $conta2->mostraDados();
    echo "<br> Vou transferir 2000 da Dhiovana para a Kayllane<br>";

    echo "<br>";

    $conta1->transferePara($conta2, 5000);

    $conta1->mostraDados();
    $conta2->mostraDados();

?>
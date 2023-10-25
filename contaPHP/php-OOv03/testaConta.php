<?php

    require_once('Conta.php');
    echo "Nesse momento, há ".Conta::getTotalDeContas()." objeto(s) do tipo Conta em memória!<br>";
    $conta1 = new Conta(1, new Cliente("Dhiovana", "123.456.789-10"));
    $conta1->deposita(3000);

    $conta2 = new Conta(2, new Cliente("Rodrigo", "123.456.789-11"));
    $conta2->getTitular()->setNome("Gustavo");
    $conta2 -> deposita(4000);

    $myClient = new Cliente("Rafael", "123.456.789-12");
    $conta3 = new Conta(3, $myClient);
    $conta3->deposita(3000);
    echo "Nesse momento, há ".Conta::getTotalDeContas()." objeto(s) do tipo Conta em memória!<br>";

    // $conta3 = $conta2;
    // echo "Nesse momento, há ".Conta::getTotalDeContas()." objeto(s) do tipo Conta em memória!<br>";

    $conta1->mostraDados();
    echo "<hr>";
    unset($conta1);
    echo "Nesse momento, há ".Conta::getTotalDeContas()." objeto(s) do tipo Conta em memória!<br>";
    $conta2->mostraDados();
    echo "<hr>";
    $conta3->mostraDados();
    echo "Nesse momento, há ".Conta::getTotalDeContas()." objeto(s) do tipo Conta em memória!<br>";
    
  
?>
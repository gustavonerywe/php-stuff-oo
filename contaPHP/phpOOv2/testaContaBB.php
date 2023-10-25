<?php

    require_once('Conta.php');
    $conta1 = new Conta(1, "Dhiovanna", "123.456.789-10");#1

    if ($conta1->deposita(3000)===false)
        echo "Valor inválido para depósito.<br>";
    else 
        echo "Depósito efetuado com sucesso.<br>";
    if($conta1->saca(2000)===false)
        echo "Saque não efetuado. Saldo insuficiente.<br>";
    else    
        echo "Saque efetuado com sucesso!<br>";
    $conta1->mostraDados();

    $conta2 = new Conta(2, "Kayllane", "123.456.789-11");#2
    echo "Ao tentar transferir R\$1000  de Dhiovanna para Kallane....<br>";
    if($conta1->transferePara($conta2,1000)===true)
        echo "Transferencia concluida com sucesso!<br>";
    else 
        echo "não foi possivel completar a transacao. procure seu gerente.";
    $conta1->mostraDados();
    $conta2->mostraDados();
?>
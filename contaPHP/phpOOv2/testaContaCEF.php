<?php

    require_once('Conta.php');
    $conta1 = new Conta(1, "Dhiovanna", "123.456.789-10")

    if($conta1->deposita(3000)===false)
        echo "Valor invalido para deposito. o valor precisa ser maior q zero<br>";
    else 
        echo "Depostivo efetuado com sucesso!<br>";
    
    if($conta1->saca(3001)===false){
        echo "nao foi possivel sacar. saldo insuficiente.<br>";
        echo "seu saldo atual é de R\{$conta1->getSaldo()}.<br>";
    }else
        echo "Saque efetuado com sucesso! volte sempre!";
    $conta1->mostraDados();

    $conta2 = new Conta(2, "Kayllane", "123.456.789-11");#2
    echo "ao tentar transferir R\$4000 de Dhiovanna para Kayllane....<br>";
    if($conta1->transferePara($conta2,4000)===true)
        echo "Transferencia concluida com sucesso<br>";
    else
        echo "não foi possivel completar a transacao. seu saldo atual é de R\${$conta1->getSaldo()}<br>";

?>
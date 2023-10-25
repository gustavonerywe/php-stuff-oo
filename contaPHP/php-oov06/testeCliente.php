<?php
    require_once('autoload.php');
    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Funcionario;

    $cliente1 = new Cliente('Gugão', new Cpf('123.456.789-15'));

    $cpfDoCliente2 = new Cpf('123.456.789-16');
    $cliente2 = new Cliente('Vitor', $cpfDoCliente2);

    echo "O cliente 1 possui os seguintes atributos: <ul><li>{$cliente1->getNome()}</li><li>{$cliente1->getCpf()->getNumero()}</li></ul><hr>";
    echo "O cliente 2 possui os seguintes atributos: <ul><li>{$cliente2->getNome()}</li><li>{$cliente2->getCpf()->getNumero()}</li></ul><hr>";

    $funcionario1 = new Funcionario("Luiz", new Cpf("123.456.789-17"), 3000);
    $funcionario2 = new Funcionario("Gabriel", new Cpf("123.456.789-18"), 4000);

    $funcionario2->setSalario(2000);

    echo "O cliente 1 possui os seguintes atributos: <ul><li>{$funcionario1->getNome()}</li><li>{$funcionario1->getCpf()->getNumero()}</li><li>R\$ {$funcionario1->getSalario()}</li></ul><hr>";
    echo "O cliente 2 possui os seguintes atributos: <ul><li>{$funcionario2->getNome()}</li><li>{$funcionario2->getCpf()->getNumero()}</li><li>R\$ {$funcionario2->getSalario()}</li></ul><hr>";
?>
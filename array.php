<?php
    $contas = array(
        510 => array(510, "000.000.000-00", 20000.50),
        511 => array(511, "111.111.111-11", 32332.11),
        512 => array(512, "222.222.222-22", 32332.11),
    );

    $numeroConta = (int) readline("Digite o número da conta: ");

    if (isset($contas[$numeroConta])) {
        $conta = $contas[$numeroConta];

        // Exibir as informações da conta
        echo "\nInformações da Conta $numeroConta:\n";
        echo "Número da Conta: $conta[0]\n";
        echo "CPF do Proprietário: " . $conta[1] . "\n";
        echo "Saldo: R$ " . number_format($conta[2], 2, ',', '.') . "\n";  // Exibe saldo com 2 casas decimais
    } else {
        // Caso o número da conta não exista
        echo "Conta não encontrada.\n";
    }
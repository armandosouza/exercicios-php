<?php
    require_once "./funcoes.php";

    // contas bancárias
    $conta1 = [
        "titular" => "Vinicius",
        "saldo" => 1000,
    ];

    $conta2 = [
        'titular'=> 'Maria',
        'saldo'=> 10000
    ];
    
    $conta3 = [
        'titular'=> 'Alberto',
        'saldo'=> 300
    ];

    $contasCorrentes = [$conta1, $conta2, $conta3];
    /* for ($i = 0; $i < count($contasCorrentes); $i++) {
        echo $contasCorrentes[$i]['titular'] . PHP_EOL;
    }
    */
    
    $contasCorrentes[] = [
        'titular' => 'Claudio',
        'saldo' => 890
    ];

    unset($contasCorrentes[2]);

    // exibir informações
    foreach ($contasCorrentes as $k => $conta) {
        // exibeMensagem("$conta[titular] - R$$conta[saldo]");
        list('titular' => $titular, 'saldo' => $saldo) = $conta;
        exibeMensagem("$titular - R$$saldo");
    }
    
    sacar($contasCorrentes[1], 200);
    $contasCorrentes[1] = depositar($contasCorrentes[1],700);
    print_r($contasCorrentes);
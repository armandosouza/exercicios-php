<?php
// definição da funções
    function exibeMensagem($mensagem) 
    {
        echo $mensagem . PHP_EOL;
    }

    function sacar(array $conta, float $valorASacar): array 
    {
        if ($valorASacar > $conta['saldo']) {
            exibeMensagem("Saque recusado! Valor excede o saldo!");
        } else {
            $conta['saldo'] -= $valorASacar;
        }
        return $conta;
    }

    function depositar($conta, $valorADepositar) 
    {
        $conta['saldo'] += $valorADepositar;
        return $conta;
    }
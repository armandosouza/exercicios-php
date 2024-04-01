<?php
// definição da funções
    function exibeMensagem(string $mensagem) 
    {
        echo $mensagem . PHP_EOL;
    }

    function sacar(array &$conta, float $valorASacar): void
    {
        if ($valorASacar > $conta['saldo']) {
            exibeMensagem("Saque recusado! Valor excede o saldo!");
        } else {
            $conta['saldo'] -= $valorASacar;
        }
    }

    function depositar(array $conta, float $valorADepositar) 
    {
        $conta['saldo'] += $valorADepositar;
        return $conta;
    }
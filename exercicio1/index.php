<?php

    require_once 'Calculadora.php';

    $calc = new Calculadora();

    $calc->somar(12);
    $calc->somar(2);
    $calc->subtrair(1);
    $calc->multiplicar(3);
    $calc->dividir(2);
    $calc->somar(0.50);

    echo 'Total: ' . $calc->getTotal();
    $calc->zerar();
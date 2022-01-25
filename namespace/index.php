<?php

    require 'classe1.php';
    require 'classe2.php';
    require './pasta1/classe3.php';
    require './pasta1/classe4.php';

    use pasta1\classe4\MinhaClasse;

//Com require sem namespace irá retornar erro, pois o 'MinhaClasse' é igual nos dois arquivos e o php não sabe de qual arquivo chamar o MinhaClasse
    // $classe = new MinhaClasse();
    // $classe->testar();

    $classe1 = new classe1\MinhaClasse();
    $classe1->testar();

    $classe2 = new classe2\MinhaClasse();
    $classe2->testar();

    $classe3 = new pasta1\classe3\MinhaClasse();
    $classe3->testar();

    $classe4 = new MinhaClasse();
    $classe4->testar();
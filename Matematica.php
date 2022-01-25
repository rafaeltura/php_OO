<?php
    namespace matematica;

    class Matematica 
    {

        public static string $teste = 'Testando atributo estático';

        public static function somar(int $x, int $y): int
        {
            return $x + $y;
        }
    }

echo Matematica::somar(10, 30);
echo '<br/>' . Matematica::$teste . '<br/>';

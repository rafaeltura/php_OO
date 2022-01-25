<?php

use Matematica as GlobalMatematica;

interface MatematicaBasica {
        public function somar($x, $y):float;
    }

    class Basico1 implements MatematicaBasica{

        public function somar($x, $y): float
        {
            return $x + $y;
        }
    }

    class Basico2 implements MatematicaBasica{

        public function somar($x, $y): float
        {
            $res = $x;
            for($i = 0; $i < $y; $i++){
                $res++;
            }

            return $res;
        }
    }

    class Basico3 {
        public function somar($x, $y)
        {
            return $x + $y;
        }
    }

    class Matematica {

        private $bascia;

        public function __construct(MatematicaBasica $basica)
        {
            $this->basica = $basica;
        }
        
        public function somar($x, $y)
        {
            return $this->basica->somar($x, $y);
        }
    }

    $mat1 = new Matematica(new Basico1());
    $mat1->somar(2,2);

    $mat2 = new Matematica(new Basico2());
    $mat2->somar(3,3);

    //Aqui irá retornar erro pq se espera class com implementação a partir da interface MatematicaBasica
    // $mat3 = new Matematica(new Basico3());
    // $mat3->somar(4,4);
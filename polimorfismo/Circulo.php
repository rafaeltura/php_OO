<?php

class Circulo implements Forma{

        public function __construct(float $raio)
        {
            $this->raio = $raio;
        }

        public function getTipo(): string
        {
            return 'Circulo';
        }

        public function getArea(): float
        {
            return ( $this->raio * 2 ) * pi() ;
        }
    }
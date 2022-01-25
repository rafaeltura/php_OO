<?php

    class Quadrado implements Forma {

        public function __construct(float $largura, float $altura)
        {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function getTipo(): string
        {
            return 'Quadrado';
        }

        public function getArea(): float
        {
            return ( $this->largura * $this->altura );
        }
    }
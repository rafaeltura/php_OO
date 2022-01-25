<?php

    class Calculadora 
    {
        private float $totalizador = 0.00;

        public function somar( float $value ):void
        {
            $this->totalizador += $value;
        }

        public function subtrair( float $value ):void
        {
            $this->totalizador -= $value;
        }

        public function multiplicar( float $value ): void
        {
            $this->totalizador *= $value;
        }

        public function dividir( float $value ): void
        {
            $this->totalizador /= $value;
        }

        public function getTotal(): float
        {
            return $this->totalizador;
        }

        public function zerar(): void
        {
            $this->totalizador = 0.00;
        }
    }
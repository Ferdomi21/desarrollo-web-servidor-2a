<?php
    function potencia(int $base, int $exponente): int
    {
        $resultado = 1;

        if ($exponente >= 0) {

            for ($i = 1; $i <= $exponente; $i++) {
                $resultado *= $base; # $resultado = $resultado * $base
            }
            return $resultado;
        }
        return 0;
    }
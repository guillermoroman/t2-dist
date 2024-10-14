<?php

    function calcularPrecioFinal($precio, $descuento = 10): float{
        return $precio - ($precio * ($descuento/100));
    }
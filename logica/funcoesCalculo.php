<?php
    function adicao ($num1, $num2)
    {
        return ($num1 + $num2);
    }
    function subtracao ($num1, $num2)
    {
        return ($num1 - $num2);
    }
    function divisao ($num1, $num2)
    {
        return ($num1 / $num2);
    }
    function multiplicacao ($num1, $num2)
    {
        return ($num1 * $num2);
    }
    //temperatura
    function celsiusToFahrenheit($temperature) {
        return ($temperature * 9/5) + 32;
    }

    function fahrenheitToCelsius($temperature) {
        return ($temperature - 32) * 5/9;
    }
    //conversor
    function converterCentimetrosParaMetros($medida) {
        return $medida / 100;
    }
    
    function converterMetrosParaCentimetros($medida) {
        return $medida * 100;
    }

    function converterMetrosParaQuilometros($medida) {
        return $medida / 1000;
    }

    function converterQuilometrosParaMetros($medida) {
        return $medida * 1000;
    }
?>
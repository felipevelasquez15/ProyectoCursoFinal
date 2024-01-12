<?php

if (!function_exists('money')) {
    function money($value, $currency = 'COP', $symbol = true, $decimals = 2)
    {
        // Lógica de formato de moneda
        $formattedValue = number_format($value, $decimals);

        // Agregar símbolo de moneda si es necesario
        if ($symbol) {
            $formattedValue = $currency . ' ' . $formattedValue;
        }

        return $formattedValue;
    }
}

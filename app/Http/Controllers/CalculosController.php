<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function somar($x, $y) {
        return 'Resultado da Soma: '.$x + $y;
    }

    function subtrair($x, $y) {
        return 'Resultado da Subração: '.$x - $y;
    }

    function quadrado($x) {
        return 'Resultado do Quadrado: '.$x**2;
    }

    // function multiplicar ($x, $y) {
    //     return 'Resultado da Multiplicação: '.$x * $y;
    // }
    
    // function dividir($x, $y) {
    //     return 'Resultado da Divisão: '.$x / $y;
    // }

}

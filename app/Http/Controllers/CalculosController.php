<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function soma($x, $y) {
        return 'Soma: '.$x + $y;
    }
}

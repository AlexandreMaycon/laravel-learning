<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(Int $p1, int $p2){
        return 'O resultado da soma é '. $p1+$p2;
    }
}

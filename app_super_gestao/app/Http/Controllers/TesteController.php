<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(int $p1, int $p2)
    {

        // Isso é um array associativo
        return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        // // Isso é usando o compact
        // return view('site.teste', compact('p1', 'p2'));

        // // Isso é usando o with
        // return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}

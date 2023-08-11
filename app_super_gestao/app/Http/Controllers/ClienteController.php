<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ClienteController extends Controller
{
    public function index(){
        return view('app.cliente');
    }
}

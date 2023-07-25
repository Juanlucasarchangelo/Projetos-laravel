<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Olá, seja bem vindo!!";
});

Route::get('/sobre-nos', function () {
    return "Olá, voCê chegou em Sobre Nós";
});

Route::get('/contato', function () {
    return "Olá, você chegou em Contato";
});

<?php

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

/** Telas */
Route::get('/', 'PrincipalController@index')->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos', 'SobreNosController@index')->name('site.sobre');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

/** Login */
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

/**Agrupamento App */
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', 'app\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

// Route::get('/rota1', function(){
//     echo 'Rota 1';
// })->name('site.rota1');

/** Redireciona a rota2 para a roda1 direto nas rotas*/
// Route::redirect('/rota2', '/rota1');

/** Redirect usando a função de callback */
// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

/** Rota para erro 404 */
Route::fallback(function () {
    echo 'A rota acessada não existe <a href="' . route('site.index') . '">Clique aqui para voltar</a>';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@index')->name('site.teste');

// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     ) {
//         echo 'Me chamo ' . $nome . ' - ' . $categoria_id ;
//     }
// )->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');

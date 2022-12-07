<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
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


Route::get('/Home', [PrincipalController::class, 'principal'])->name('index');
Route::get('/Contato', [ContatoController::class, 'contato'])->name('contato');
Route::post('/Contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/SobreNos', [SobreNosController::class, 'sobreNos'])->name('sobrenos');
Route::get('/Login', function(){
    return "login";
})->name('login');

Route::prefix('/app')->group(function(){
    Route::get('/Produto', function(){
        return 'produto';
    })->name('produto');
    
    Route::get('/Cliente', function(){
        return 'Cliente';
    })->name('cliente');
    
    Route::get('/Fornecedores', [FornecedorController::class, 'index'])->name('fornecedores');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    return 'Pagina não encontrada, volte para pagina principal. <a href="'.route('index').'">clique aqui</a>';
});

// Route::get('/contato/{num1}/{num2}/{num3?}', function(Int $num1, int $num2, int $num3=1){
//     return 'O total da conta é '.$num1+$num2+$num3;
// })->where('num1', '[1-50]+');
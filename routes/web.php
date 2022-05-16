<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\Pagina1Controller;
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
    return view('welcome');
});


Route::get('/base', function () {
    return view('/base/base');
});
Route::get('/base2', function () {
    return view('/base/base2');
});
// paginas
Route::get('/pagina/pagina1', [Pagina1Controller::class,     'index']);
Route::get('/cadastro/create', [CadastroController::class,     'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

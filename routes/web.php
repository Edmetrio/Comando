<?php

use App\Http\Livewire\Anexos;
use App\Http\Livewire\Crimes;
use App\Http\Livewire\Desaparecidos;
use App\Http\Livewire\Distritos;
use App\Http\Livewire\Entidades;
use App\Http\Livewire\Esquadras;
use App\Http\Livewire\Exemplos;
use App\Http\Livewire\Fases;
use App\Http\Livewire\IndiciadoItems;
use App\Http\Livewire\Indiciados;
use App\Http\Livewire\Inicios;
use App\Http\Livewire\Listadesaparecidos;
use App\Http\Livewire\Modals;
use App\Http\Livewire\Permissaos;
use App\Http\Livewire\Processos;
use App\Http\Livewire\Provincias;
use App\Http\Livewire\Relatorios;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Rotas;
use App\Http\Livewire\Utilizadors;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/linkstorage', function () {
    $targetFolder = base_path().'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($targetFolder, $linkFolder); 
});

Route::get('/', Inicios::class)->name('/');

Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
    'accessrole'
]], function () {

Route::get('inicio', Inicios::class)->name('inicio');
Route::get('provincia', Provincias::class)->name('provincia');
Route::get('distrito', Distritos::class)->name('distrito');
Route::get('esquadra', Esquadras::class)->name('esquadra');
Route::get('indiciado', Indiciados::class)->name('indiciado');
Route::get('desaparecido', Desaparecidos::class)->name('desaparecido');
Route::get('relatorio', Relatorios::class)->name('relatorio');
Route::get('relatorio/{id}', Relatorios::class)->name('relatorio');
Route::get('role', Roles::class)->name('role');
Route::get('rota', Rotas::class)->name('rota');
Route::get('permissao', Permissaos::class)->name('permissao');
Route::get('indiciadoitem', IndiciadoItems::class)->name('indiciadoitem');
Route::get('processo/{id}', Processos::class)->name('processo');
Route::get('utilizador', Utilizadors::class)->name('utilizador');
Route::get('entidade', Entidades::class)->name('entidade');
Route::get('fase', Fases::class)->name('fase');
Route::get('crime', Crimes::class)->name('crime');
});
Route::get('anexo/{id}', Anexos::class)->name('anexo');


Route::get('desaparecidos', Listadesaparecidos::class)->name('desaparecidos');
Route::get('modal', Modals::class)->name('modal');

Route::get('exemplo', Exemplos::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

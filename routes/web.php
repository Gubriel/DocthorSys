<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecretariasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(callback: function () {

    Route::get('/dashboard', function () {

        $page = 'index';

        return view('dashboard',compact('page'));
    })->name('dashboard');



    Route::group(['prefix' => 'medico', 'as' => 'medico.'], function () {
        Route::get('/', [MedicosController::class, 'index'])->name('index'); // Listar
        Route::get('/editar/{id}', [MedicosController::class, 'edit'])->name('edit'); // Editar
        Route::get('/excluir/{id}', [MedicosController::class, 'delete'])->name('delete'); // Excluir
        Route::get('/buscar', [MedicosController::class, 'search'])->name('search'); // Buscar
        Route::get('/create', [MedicosController::class, 'create'])->name('create'); // Buscar
        Route::post('/store', [MedicosController::class, 'store'])->name('store'); // Buscar

    });


    Route::get('usuários',[UserController::class, 'index'])->name('index.users');
    Route::get('secretarias',[SecretariasController::class, 'index'])->name('index.secretarias');

    Route::get('sobre', function () {return view('app/pages/sobre/sobre');});
    Route::get('agenda', function () {
        $page = 'agenda';

        return view('app/pages/agenda/agenda',compact('page'));
    })->name('index.agenda');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('app.pages.errors.404');
});

require __DIR__.'/auth.php';

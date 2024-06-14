<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[webController::class, 'inicio'])->name('inicio');
Route::get('/profesionales',[webController::class, 'profesionales'])->name('profesionales');
Route::get('/servicioTecnico',[webController::class, 'servicioTecnico'])->name('servicioTec');
Route::get('/ofertas',[webController::class, 'ofertas'])->name('ofertas');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// // })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth','verified'])->name('dashboard');
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'administrador'])->name('administrador');
    Route::get('/editAdmin', [DashboardController::class, 'editAdministrador'])->name('edit.admin');
    Route::get('/Usuarios', [DashboardController::class, 'Usuarios'])->name('usuarios');
    Route::get('/editUsuarios', [DashboardController::class, 'editUsuarios'])->name('edit.usuarios');
    Route::get('/listarTitulados', [DashboardController::class, 'listarAdministradores'])->name('list.titulados');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('profile/disable/{id}', [ProfileController::class, 'disable'])->name('profile.disable');

});

require __DIR__.'/auth.php';

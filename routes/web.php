<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PreguntaController;
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
    Route::patch('/profile/update-from-modal', [ProfileController::class, 'updateFromModal'])->name('profile.updateFromModal');

});

// Rutas para la gestión de usuarios
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('admin/users', [RegisteredUserController::class, 'index'])->name('admin.users.index');
    Route::post('admin/users', [RegisteredUserController::class, 'storeFromAdmin'])->name('admin.users.storeFromAdmin');
});

Route::middleware('auth')->group(function() {
    Route::get('/encuestas', [EncuestaController::class, 'index'])->name('encuesta.index');
    Route::get('/crear', [EncuestaController::class, 'create'])->name('encuesta.create');
    Route::post('/encuestas', [EncuestaController::class, 'store'])->name('encuesta.store');
    Route::get('/encuestas/{id}/edit', [EncuestaController::class, 'edit'])->name('encuesta.edit');
    Route::put('/encuestas/{id}', [EncuestaController::class, 'update'])->name('encuesta.update');
    Route::delete('encuesta/disable/{id}', [EncuestaController::class, 'disable'])->name('encuesta.disable');
    
    Route::get('/encuesta/{id}/preguntas', [EncuestaController::class, 'addQuestions'])->name('encuesta.addQuestions');
    Route::post('/encuesta/{id}/pregunta', [PreguntaController::class, 'store'])->name('pregunta.store');
});




require __DIR__.'/auth.php';



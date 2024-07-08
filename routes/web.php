<?php

use App\Http\Controllers\BanqueController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pay.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/pay/home',[PayController::class,'home'])->name('pay.index');
Route::get('/pay/about',[PayController::class,'about'])->name('pay.about');
Route::get('/pay/contact',[PayController::class,'contact'])->name('pay.contact');
Route::get('/ecole/accueil',[EcoleController::class,'accueil'])->name('ecole.accueil');
Route::get('/ecole/compte',[EcoleController::class,'compte'])->name('ecole.compte');
Route::get('/ecole/aide',[EcoleController::class,'help'])->name('ecole.help');
Route::post('/ecole/traitement',[EcoleController::class,'traitement']);
Route::get('/banque/login',[BanqueController::class,'login'])->name('banque.login');
Route::get('/banque/sign-up',[BanqueController::class,'sign'])->name('banque.sign-up');
Route::post('/compte/traitement',[BanqueController::class,'compte']);
Route::post('/banque/compte/traitement',[BanqueController::class,'rechercheid']);
Route::get('/banque/paiement',[BanqueController::class,'paiement'])->name('banque.paiement');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\BanqueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\EcolesController;
use App\Http\Controllers\Admin\BanquesController;
use App\Http\Controllers\Admin\ContactsController;

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

Route::view('/Administration','administration.administration');

/*      Admin     */

Route::group(['namespace' => 'Admin'], function () {
     
    Route::get('/admin',[AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

    Route::group(['prefix' => 'ecole'], function () {
        
        Route::get('/addEcole',[EcolesController::class,'addEcole'])->name("add.Ecole");
        Route::get('/showAll',[EcolesController::class,'showAllEcole'])->name("show.all.Ecole");
        Route::post('/saveEcole',[EcolesController::class,'save'])->name('save');
        Route::get('/edit/{id}',[EcolesController::class,'editEcole'])->name('editEcole');
        Route::put('/update/{id}',[EcolesController::class,'updateEcole'])->name('updateEcole');
        Route::get('/delete/{id}',[EcolesController::class,'deleteEcole'])->name('deleteEcole');


    });

    Route::group(['prefix' => 'bank'], function () {
        
        Route::get('/addBanque',[BanquesController::class,'addBank'])->name("add.bank");
        Route::get('/showAll',[BanquesController::class,'showAllBank'])->name("show.all.bank");

        Route::post('/saveBank',[BanquesController::class,'saveBank'])->name("save.bank");
        Route::get('edit/{id}',[BanquesController::class,'editBank'])->name("edit.bank");
        Route::get('delete/{id}',[BanquesController::class,'deleteBank'])->name("delete.bank");
        Route::post('update',[BanquesController::class,'updateBank'])->name("update.bank"); 
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/showAll',[ContactsController::class,'showAllContact'])->name("show.all.Contact");
    });


    


});



require __DIR__.'/auth.php';
Route::get('/pay/home',[PayController::class,'home'])->name('pay.index');
Route::get('/pay/about',[PayController::class,'about'])->name('pay.about');
Route::get('/pay/help',[PayController::class,'aide'])->name('pay.help');
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
Route::get('/banque/reset/password',[BanqueController::class,'reset'])->name('banque.reset-password');
Route::post('/pay/contact/traitement',[PayController::class,'save_contact']);
Route::get('/pay/mail',[PayController::class,'mail'])->name('pay.email');
Route::get('/pay/user_mail',[PayController::class,'usermail'])->name('pay.mailuser');
Route::get('/shool/shool-email',[EcoleController::class,'mailadmin'])->name('ecole.admin-mail');
Route::get('/shool/admin-email',[EcoleController::class,'shoolmail'])->name('ecole.shool-mail');
Route::post('/banque/paiement/traitement',[BanqueController::class,'valideP']);
Route::get('/search-school', [BanqueController::class, 'searchSchool']);
Route::post('/banque/reset/password', [BanqueController::class, 'resetPassword']);
Route::get('/banque/reset/email-reset-password', [BanqueController::class, 'email_reset'])->name('banque.emailresetp');
Route::get('/banque/reset/email-create-compte', [BanqueController::class, 'email_create_compte'])->name('banque.gest-compte');
Route::get('/pay/email/reset-banque-password', [PayController::class, 'banque_reset_password'])->name('pay.email-banque-resetp');
Route::get('/api/ecolelogin', [EcoleController::class, 'ecolelogin']);
Route::get('/api/payments',[APIController::class,'getPayments']);



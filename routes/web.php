<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Models\Annonce;
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

Route::get('/', [AnnonceController::class,'index'])->name('acceuil');

Route::get('/detail/{id}' ,[AnnonceController::class, 'show'])->name('detail_annonce');

Route::post('/' ,[AnnonceController::class, 'search'])->name('rechercher_traitement');
Route::get('/recherches', [AnnonceController::class, 'resultats'])->name('resultats');
Route::post('/recherches', [AnnonceController::class, 'search2'])->name('rechercher_2');

Route::post('/send-message',[MessageController::class, 'sendmessage'])->name('message_traitement');

Route::middleware(['auth', 'prive'])->group(function () {
    Route::get('/dashboard' , function () {
        return view('Proprietaire.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/properties' , function(){
        return view('Proprietaire.gestion_biens');
    });

    Route::get('/make/annonce',function(){
        return view('Proprietaire.add_pub');
    })->name('faire_une_annonce');

    Route::get('/messages',function(){
        return view('Proprietaire.messages');
    })->name('messages');

    Route::get('/messages/detail',function(){
        return view('Proprietaire.detailMessage');
    })->name('messages_details');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

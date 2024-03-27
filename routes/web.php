<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;



// Route::get('/', function () {
//     return Inertia::render('ClientList');
// });
Route::get('/', [ClientController::class, 'index'])->name('clients.index');


Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');




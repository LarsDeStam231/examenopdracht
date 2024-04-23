<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\CheckRoleAndOwnership;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations/create', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/bestelling', [BestellingController::class, 'makeorder'])->name('bestelling.makeorder');
    Route::get('/bestelling/dranken', [BestellingController::class, 'dranken'])->name('bestelling.dranken');
    Route::get('/bestelling/hapjes', [BestellingController::class, 'hapjes'])->name('bestelling.hapjes');
    Route::get('/bestelling/dranken/{drank}', [BestellingController::class, 'showDrankSubdranken'])->name('bestelling.dranken.subdranken');
    Route::get('/bestelling/hapjes/{drank}', [BestellingController::class, 'showHapjesSubdranken'])->name('bestelling.hapjes.subdranken');
    Route::get('/bestelling/dranken/{drank}/subdranken/{subdrankkort}', [BestellingController::class, 'showDrankSubdrankItems'])->name('bestelling.dranken.subdranken.items');
    Route::get('/bestelling/hapjes/{drank}/subdranken/{subdrankkort}', [BestellingController::class, 'showHapjesSubdrankItems'])->name('bestelling.hapjes.subdranken.items');
    Route::get('/bestelling/items/{subdrank}', [BestellingController::class, 'showItems'])->name('bestelling.items');
    Route::post('/bestelling/add/{itemId}', [BestellingController::class, 'addToOrder'])->name('bestelling.add');
    Route::post('/bestelling/create', [BestellingController::class, 'createOrder'])->name('bestelling.create');
    Route::post('/bestelling/store', [BestellingController::class, 'store'])->name('bestelling.store');
});

// Route voor admins en gebruikers
Route::middleware(['auth', \App\Http\Middleware\CheckRoleAndOwnership::class . ':admin,gebruiker'])->group(function () {
    Route::get('/reservations/overzicht', [ReservationController::class, 'overzicht'])
        ->name('reservations.overzicht');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Auth::routes();

require __DIR__.'/auth.php';

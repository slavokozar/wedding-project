<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvitationController;
use App\Models\NutritionalRequirements;
use App\Models\Invitation;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('homepage');
});

Route::prefix('manag')->middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/guests', function(){
    //     return "guests";
    // });

    Volt::route('/guests', 'guests.index')->name('admin.guests');
    Volt::route('/invitations', 'invitations.index')->name('admin.guests');
});


Route::get('/pozvanka', [InvitationController::class, 'form'])->name('invitation-form');
Route::post('/pozvanka', [InvitationController::class, 'submit'])->name('invitation-submit');
//Route::get('/pozvanka/a', [InvitationController::class, 'generate']);
Route::get('/pozvanka/{invitation}', [InvitationController::class, 'show'])->name('invitation-questionaire');


Route::get('/api/invitation', function () {
    return Invitation::with('mainGuest.children')->first();
});

Route::get('/api/restrictions', function(){
    return NutritionalRequirements::all();
});

require __DIR__ . '/auth.php';

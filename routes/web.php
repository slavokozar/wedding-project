<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvitationController;
use App\Models\Guest;
use App\Models\InvitationAccess;
use App\Models\NutritionalRequirements;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::view('/', 'homepage')->name('dashboard');

Route::view('/harmonogram','harmonogram');
Route::view('/svadobny-den','svadobny-den');
Route::view('/organizacia','organizacia');


Route::get('/ubytovanie', function () {
    return view('ubytovanie');
});

Route::get('/kostol', function () {
    return view('kostol');
})->name('kostol');

Route::prefix('manag')->middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/guests', function(){
    //     return "guests";
    // });

    Volt::route('/guests', 'guests.index')->name('admin.guests');
    Volt::route('/invitations', 'invitations.index')->name('admin.invitations');

    Route::get('/tables', function (Request $request) {
        $tables = [];
        for($i = 1; $i <= 18; $i++){
            $tables[$i] = [];
        }


        foreach(Guest::all() as $guest){
            if($guest->table_id !== null){
                $tables[$guest->table_id][] = $guest;
            }

        }

        return view('manag.tables', compact('tables'));
    })->name('admin.tables');

    Route::get('/accesses', function (Request $request) {
        $accesses = InvitationAccess::with('invitation.mainGuest')->orderBy('created_at', 'desc')->paginate(20);

//        return $accesses;
        return view('manag.accesses', compact('accesses'));
    })->name('admin.accesses');
});


Route::get('/pozvanka', [InvitationController::class, 'form'])->name('invitation-form');
Route::post('/pozvanka', [InvitationController::class, 'submit'])->name('invitation-submit');
Route::get('/pozvanka/a', [InvitationController::class, 'generate']);
Route::get('/pozvanka/{invitation}', [InvitationController::class, 'show'])->name('invitation-questionaire');


Route::post('/api/invitation', function (Request $request) {
    return Invitation::with('nights', 'mainGuest.restrictions', 'mainGuest.children.restrictions')->whereCode($request->input('code'))->firstOrFail();
});
Route::put('/api/invitation', function (Request $request) {
    $i = Invitation::with('nights', 'mainGuest.restrictions', 'mainGuest.children.restrictions')->whereCode($request->input('code'))->firstOrFail();

    // EMAILS

    $i->update(['emails' => $request->input('emails', "")]);

    // RESTRICTIONS
    $guestRestrictions = $request->input('guestRestrictions');

    $i->mainGuest->restrictions()->sync($guestRestrictions[$i->mainGuest->id]);

    foreach($i->mainGuest->children as $guest){
        $guest->restrictions()->sync($guestRestrictions[$guest->id]);
    }

    // NIGHTS

    $nights = $request->input("nights", []);

    $existingNights = [];
    foreach ($i->nights as $night) {
        if (!in_array($night->night, $nights)) {
            $night->delete();
        } else {
            $existingNights[] = $night->night;
        }
    }

    foreach (array_diff($nights, $existingNights) as $nightNumber) {
        $i->nights()->create(['night' => $nightNumber]);
    }

    $i->load('nights', 'mainGuest.restrictions', 'mainGuest.children.restrictions');

    return $i;
});
Route::get('/api/restrictions', function () {
    return NutritionalRequirements::all();
});

require __DIR__ . '/auth.php';

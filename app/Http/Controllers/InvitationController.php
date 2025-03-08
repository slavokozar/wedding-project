<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\GuestRestriction;
use App\Models\Invitation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;

class QuestionaireController extends Controller{
    public function generate(){
        return URL::signedRoute('questionaire', ['invitation' => 1123], absolute: false);

    }

    public function show(Request $request, string $code)
    {
        $invitation = Invitation::where('code', $code)->firstOrFail();

        $restrictions = GuestRestriction::all();

//        return $invitation;

//        if (! $request->hasValidSignature()) {
//            abort(401);
//        }




        return view('dotaznik', ['invitation' => $invitation, 'restrictions' => $restrictions]);
    }
}

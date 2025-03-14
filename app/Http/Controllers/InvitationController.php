<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\NutritionalRequirements;
use App\Models\Invitation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class InvitationController extends Controller
{
    public function generate()
    {
        $i = Invitation::first();

        return URL::signedRoute('invitation-questionaire', ['invitation' => $i->code]);
    }

    public function form(Request $request)
    {
        $request->session()->forget('invitation');

        return view('invitation.form');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptchav3:invitation,0.5',
            'code' => 'required|exists:invitations'
        ], [
            'g-recaptcha-response' => [
                'recaptchav3' => 'Captcha error message',
            ],
            'code' => [
                'exists' => 'Pozvánka s týmto kódom bohužiaľ neexistuje'
            ]
        ]);


        $request->session()->put('invitation', $request->get('code'));

        return redirect(route('invitation-questionaire', [$request->get('code')]));
    }

    public function show(Request $request, string $code)
    {
        $validSessionCode = ($request->session()->has('invitation') && $request->session()->get('invitation') == $code);
        $validSignatute = $request->hasValidSignature();

        if(!$validSessionCode && !$validSignatute){
            abort(403);
        }

        $invitation = Invitation::where('code', $code)->firstOrFail();

        $invitation->accesses()->create([
            'ip_address' => $request->getClientIp(),
            'agent' => $request->userAgent()
        ]);

        return view('dotaznik', ['invitation' => $invitation]);
    }
}

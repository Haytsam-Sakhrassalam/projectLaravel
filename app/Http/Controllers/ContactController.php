<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact'); // sesuaikan path blade
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'message' => 'required|string',
            
        ]);

        $token = $request->input('g-recaptcha-response');

        if ($token) {
            // verifikasi ke Google
            $resp = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => $token,
                'remoteip' => $request->ip(),
            ]);

            $body = $resp->json();

            if (! isset($body['success']) || $body['success'] !== true) {
                return back()->withInput()->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal.']);
            }
        } else {
            return back()->withInput()->withErrors(['recaptcha' => 'Silakan centang reCAPTCHA.']);
        }

        return redirect()->route('contact')->with('success', 'Pesan terkirim (demo).');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  Request  $request
     *
     * @return JsonResponse|RedirectResponse
     */
    public function authenticate(Request $request): JsonResponse|RedirectResponse
    {

        $credentials = $request->validate([
                                              'email' => ['required', 'email'],
                                              'password' => ['required'],
                                          ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json(['status' => true, 'redirect' => route('main')], 200);
        }

        return response()->json(['status' => false,
                                  'error' => 'The provided credentials do not match our records.',
                                  ]);
    }
}

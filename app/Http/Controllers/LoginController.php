<?php

namespace App\Http\Controllers;

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
     */
    public function authenticate(Request $request)
    {
        return 'Done!';
//        $credentials = $request->validate([
//                                              'email' => ['required', 'email'],
//                                              'password' => ['required'],
//                                          ]);
//
//        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();
//
//            return redirect()->intended('dashboard');
//        }
//
//        return back()->withErrors([
//                                      'email' => 'The provided credentials do not match our records.',
//                                  ])->onlyInput('email');
    }
}

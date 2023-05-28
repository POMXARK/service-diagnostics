<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class RegisterController extends BaseController
{
    /**
     * Создает нового пользователя, автоматически авторизуя его
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function register(Request $request): RedirectResponse
    {
        $user = User::create([
                                 'email'    => $request->input('email'),
                                 'name'     => $request->input('name'),
                                 'password' => bcrypt($request->input('password'))
                             ]);

        Auth::loginUsingId($user->id);

        return redirect()
            ->route('home')
            ->with('success', 'Вы успешно зарегистрировались');
    }
}

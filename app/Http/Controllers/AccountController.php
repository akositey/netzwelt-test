<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function signIn()
    {
        return view('sign_in');
    }

    /**
     * @param Request $request
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        session(['username' => $request->username]);
        return redirect()->route('home');
    }

    /**
     * @param Request $request
     */
    public function logout(Request $request)
    {
        $request->session()->forget('username');

        return redirect()->route('home');
    }

}

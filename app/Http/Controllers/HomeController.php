<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        // dd($request->session());
        // if ($request->session()->has('username')) {
        return view('hello', ['username' => session('username')]);
        // }
        // return redirect('login');
    }
}

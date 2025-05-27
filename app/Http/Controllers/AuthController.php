<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Facades\Auth as Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('auth.index');
    }

    public function save(AuthRequest $request) {
        User::create($request->all());
        return redirect()->route('auth.index');
    }

    public function login(Request $request) {
        if ($request->isMethod('POST')) {
            if(Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('auth.index');
            }
        }
        return view('auth.login');
    }
}
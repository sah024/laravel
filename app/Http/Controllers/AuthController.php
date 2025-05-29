<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        $usuarios = User::all();
        return view('auth.index', compact('usuarios'));
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

    public function logout() {
        Auth::logout();
        return redirect()->route('auth.index');
    }
}
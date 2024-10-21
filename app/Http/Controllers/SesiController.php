<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index() {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'kaprodi') {
                return redirect('kaprodi');
            } elseif(Auth::user()->role == 'dosen_wali') {
                return redirect('dosen_wali');
            } elseif(Auth::user()->role == 'mahasiswa') {
                return redirect('mahasiswa');
            }
        } else {
            return redirect()->back()->withErrors('Username dan password yang dimasukkan tidak sesuai!')->withInput();
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}
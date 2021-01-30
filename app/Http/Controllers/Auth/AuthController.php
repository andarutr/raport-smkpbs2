<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('template.auth.login');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['username' => $req->username, 'password' => $req->password]))
        {
            return redirect('/panel/admin/dashboard')->with('welcome', 'Selamat datang admin!');
        }else{
            return redirect()->back()->with('failed', 'Username dan password salah!');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('logout', 'Anda telah logout!');
    }
}

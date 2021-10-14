<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user_model;
    public function __construct()
    {
        $this->user_model = new User();
    }
    public function index()
    {
        $data = [
            'title' => 'Log In'
        ];
        return view('admin.login', $data);
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'

            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong'
            ]
        );

        $username = $request->username;
        $password = $request->password;
        $cek = $this->user_model->getUsername($username);
        if ($cek) {
            if ($cek['password'] == sha1($password)) {
                $this->user_model->where('id', $cek['id'])->update(['login_time' => now()]);
                $request->session()->put('akun-admin', $cek);
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->with('failed', 'Wrong Password!!');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Username not Found!!');
        }
    }

    public function logout_(Request $request)
    {
        $request->session()->forget('akun-admin');
        return redirect()->route('login');
    }
}

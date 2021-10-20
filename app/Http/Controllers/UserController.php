<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_role;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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


    public function list()
    {
        $data = [
            'title' => 'List User',
            'var' => 'users',
            'users' => $this->user_model->all()
        ];
        return view('admin.users.index', $data);
    }

    public function addUser()
    {
        $data = [
            'title' => 'Add User',
            'var' => 'users',
            'roles' => User_role::all()
        ];
        return view('admin.users.create', $data);
    }

    public function storeUser(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'username' => 'required|unique:users,username',
                'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah digunakan',
                'password.required' => 'Password tidak boleh kosong',
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah digunakan',
                'gambar.required' => 'Tidak boleh kosong',
                'gambar.image' => 'Harus tipe gambar'
            ]
        );
        $file = $request->file('gambar');
        if (!$file) {
            $namaGambar = 'default.png';
        } else {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);

            $destinationPath = public_path('assets/admin/images/profile');
            $namaGambar = time() . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $namaGambar);
        }
        $data = [
            'username' => $request->input('username'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'role_id' => $request->input('role'),
            'password' => sha1($request->input('password')),
            'gambar' => $namaGambar,
            'login_time' => now()
        ];
        $save = $this->user_model::create($data);
        if ($save) {
            return redirect()->route('users.list')->with('pesan-berhasil', 'Data Berhasil disimpan');
        } else {
            return redirect()->route('users.list')->with('pesan-gagal', 'Data Gagal disimpan');
        }
    }

    public function myprofile()
    {
        $data = [
            'title' => 'Profil',
            'var' => 'settings'
        ];
        return view('admin.users.myprofile', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    public function change_user()
    {
        //
    }

    public function change(Request $request)
    {
        //
    }
}

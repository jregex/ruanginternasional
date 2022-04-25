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
        return redirect()->route('home');
    }


    public function list()
    {
        $data = [
            'title' => 'List User',
            'var' => 'users',
            'users' => $this->user_model->get()
        ];
        return view('admin.users.index', $data);
    }

    public function addUser()
    {
        $data = [
            'title' => 'Add User',
            'var' => 'users',
            'roles' => User_role::get()
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
            'var' => 'myprofile'
        ];
        return view('admin.users.myprofile', $data);
    }

    public function updateProfil(Request $request, User $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'username' => 'required',
                'gambar' => 'image|mimes:jpg,png,jpeg'
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'username.required' => 'Username tidak boleh kosong',
                'gambar.image' => 'Harus tipe gambar'
            ]
        );

        $file = $request->file('gambar');
        if (!$file) {
            $namaGambar = $id->gambar;
        } else {

            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);
            $destinationPath = public_path('assets/admin/images/profile');
            $namaGambar = time() . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $namaGambar);
            if ($id->gambar != 'default.png') {
                unlink(public_path('assets/admin/images/profile') . '/' . $id->gambar);
            }
        }


        $update = User::where('id', $id->id)->update([
            'username' => $request->input('username'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'gambar' => $namaGambar,
            'login_time' => now()
        ]);
        if ($update) {
            $sesi = $request->session()->get('akun-admin');
            $sesi['nama'] = $request->nama;
            $sesi['username'] = $request->username;
            $sesi['email'] = $request->email;
            $sesi['gambar'] = $namaGambar;
            $sesi['login_time'] = now();
            return redirect()->back()->with('pesan-berhasil', 'Profil Berhasil diupdate');
        } else {
            return redirect()->back()->with('pesan-gagal', 'Profil Gagal diupdate');
        }
    }


    public function change_password()
    {
        $data = [
            'title' => 'Users',
            'var' => 'password_change'
        ];
        return view('admin.users.changepassword', $data);
    }

    public function change(Request $request)
    {
        $request->validate(
            [
                'oldPassword' => 'required',
                'newPassword' => 'min:8|required',
                'confirmPassword' => 'min:8|required|same:newPassword'
            ],
            [
                'newPassword.min' => 'harus lebih dari 8 karakter',
                'oldPassword.required' => 'tidak boleh kosong',
                'newPassword.required' => 'tidak boleh kosong',
                'confirmPassword.required' => 'tidak boleh kosong',
                'confirmPassword.min' => 'harus lebih dari 8 karakter',
                'confirmPassword.same' => 'Konfirmasi password tidak sama dengan password baru',

            ]
        );
        $cek = User::where('id', session()->get('akun-admin.id'))->first();
        if (sha1($request->input('oldPassword')) == $cek['password']) {
            if (sha1($request->input('newPassword')) == $cek['password']) {
                return redirect()->back()->with('message', 'Password tidak boleh sama dengan sebelumnya');
            } else {
                $newPass = sha1($request->input('newPassword'));
                User::where('id', $cek['id'])->update(['password' => $newPass]);
                return redirect()->route('users.profile')->with('pesan-berhasil', 'Password berhasil diubah');
            }
        } else {
            return redirect()->back()->with('message', 'Password salah!!');
        }
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
}

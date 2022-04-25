<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Kontak;
use App\Models\Sub_Gallery;
use App\Models\Tim_creator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'var' => ''
        ];
        return view('admin.index', $data);
    }

    public function galleries()
    {
        $data = [
            'title' => 'List Category Gallery',
            'var' => 'gallery',
            'kategories' => Gallery::latest()->get()
        ];
        return view('admin.gallery.index', $data);
    }
    public function storeKategoriGallery(Request $request)
    {
        $request->validate(
            [
                'kategori' => 'required',
            ],
            [
                'kategori.required' => 'Kategori tidak boleh kosong',
            ]
        );
        $save = Gallery::insert([
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan
        ]);
        if ($save) {
            return redirect()->route('admin.galleries')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin.galleries')->with('failed', 'Data gagal ditambahkan');
        }
    }

    public function deleteKategoriGallery($id)
    {
        $delete = Gallery::where('id', $id)->delete();
        if ($delete) {
            Sub_Gallery::where('category_id', $id)->delete();
            return redirect()->route('admin.galleries')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('admin.galleries')->with('failed', 'Data gagal dihapus');
        }
    }

    public function listTeam()
    {
        $data = [
            'title' => 'List Team Creator',
            'var' => 'team',
            'teams' => Tim_creator::latest()->get()
        ];
        return view('admin.team.index', $data);
    }

    public function createTeam()
    {
        $data = [
            'title' => 'create Team Creator',
            'var' => 'team',

        ];
        return view('admin.team.create', $data);
    }

    public function storeTeam(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:tim_creators,email',
                'jabatan' => 'required',
                'testimoni' => 'required'
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah digunakan',
                'jabatan.required' => 'Jabatan tidak boleh kosong',
                'testimoni.required' => 'Testimoni tidak boleh kosong',
            ]
        );
        $file = $request->file('gambar');
        if (!$file) {
            $namaGambar = "default.png";
        } else {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);
            if (!Storage::exists('/public/teams')) {
                Storage::makeDirectory('public/teams', 0775, true);
            }
            $namaGambar =  $request->nama . '-' . time() . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/teams/' . $namaGambar));
        }
        $save = Tim_creator::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gambar' => $namaGambar,
            'testimoni' => $request->testimoni
        ]);
        if ($save) {
            return redirect()->route('admin.team.list')->with('success', 'Data Berhasil dikirim');
        } else {
            return redirect()->route('admin.team.list')->with('failed', 'Data Gagal dikirim');
        }
    }

    public function editTeam(Tim_creator $tim_creator)
    {
        $data = [
            'title' => 'Edit Team Creators',
            'var' => 'team',
            'team' => $tim_creator
        ];
        return view('admin.team.edit', $data);
    }

    public function updateTeam(Request $request, Tim_creator $tim_creator)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'jabatan' => 'required',
                'testimoni' => 'required'
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'jabatan.required' => 'Jabatan tidak boleh kosong',
                'testimoni.required' => 'Testimoni tidak boleh kosong',
            ]
        );
        if ($request->email != $tim_creator->email) {
            $request->validate(['email' => 'unique:tim_creators,email'], ['email.unique' => 'Email telah sdh terdaftar']);
        }
        $file = $request->file('gambar');
        if (!$file) {
            $namaGambar = $tim_creator->gambar;
        } else {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);
            if (!Storage::exists('/public/teams')) {
                Storage::makeDirectory('public/teams', 0775, true);
            }
            $namaGambar = $request->nama . '-' . time() . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save(Storage::path('public/teams/' . $namaGambar));
            Storage::delete('public/teams/' . $tim_creator->gambar);
        }
        $update = $tim_creator->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gambar' => $namaGambar,
            'testimoni' => $request->testimoni
        ]);
        if ($update) {
            return redirect()->route('admin.team.list')->with('success', 'Data Berhasil diupdate');
        } else {
            return redirect()->route('admin.team.list')->with('failed', 'Data Gagal diupdate');
        }
    }

    public function destroyTeam($id)
    {
        $cek = Tim_creator::where('id', $id)->first();
        $delete = Tim_creator::where('id', $id)->delete();
        if ($delete) {
            Storage::delete('public/teams/' . $cek->gambar);
            return redirect()->route('admin.team.list')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('admin.team.list')->with('failed', 'Data gagal dihapus');
        }
    }

    public function getSubGallery($id)
    {
        $data = [
            'title' => 'Sub Gallery',
            'var' => 'gallery',
            'galleries' => Sub_Gallery::with('gallery')->latest()->get(),
            'id' => $id
        ];
        return view('admin.subgallery.index', $data);
    }

    public function storeSubGallery(Request $request)
    {
        $request->validate(
            [
                'kategori_id' => 'required',
                'nama' => 'required',
                'nama_file' => 'max:2048|image|mimes:jpg,png,jpeg'
            ],
            [
                'kategori_id.required' => 'Kategori id tidak boleh kosong',
                'nama.required' => 'Nama tidak boleh kosong',
                'nama_file.image' => 'Harus tipe gambar'
            ]
        );
        $id_kt = $request->input('kategori_id');
        $file = $request->file('nama_file');
        if (!$file) {
            $namaGambar = "default.png";
        } else {
            $kt = Gallery::where('id', $id_kt)->first();
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);
            if (!Storage::exists('/public/gallery')) {
                Storage::makeDirectory('public/gallery', 0775, true);
            }
            $namaGambar =  $kt['kategori'] . '-' . time() . '.' . $file->getClientOriginalExtension();
            $ukuran = $file->getMaxFilesize();
            $img = Image::make($file->path());
            $img->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/gallery/' . $namaGambar));
        }
        $save = Sub_Gallery::create([
            'category_id' => $id_kt,
            'nama' => $request->nama,
            'nama_file' => $namaGambar,
            'ukuran' => $ukuran,
            'tgl_upload' => now()
        ]);
        if ($save) {
            return redirect()->route('admin.subgalleries', ['id' => $id_kt])->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('admin.subgalleries', ['id' => $id_kt])->with('failed', 'Data gagal ditambahkan');
        }
    }

    public function deleteSubGallery($id)
    {
        $cek = Sub_Gallery::where('id', $id)->first();
        $delete = Sub_Gallery::where('id', $id)->delete();
        if ($delete) {
            Storage::delete('public/gallery/' . $cek->nama_file);
            return redirect()->route('admin.subgalleries', ['id' => $cek->category_id])->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('admin.subgalleries', ['id' => $cek->category_id])->with('failed', 'Data gagal dihapus');
        }
    }

    public function listContact()
    {
        $data = [
            'title' => 'List Contact',
            'var' => 'contact',
            'contacts' => Kontak::latest()->get()
        ];
        return view('admin.contact.index', $data);
    }
    public function deleteContact($id)
    {
        $delete = Kontak::where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('list-contact')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('list-contact')->with('failed', 'Data gagal dihapus');
        }
    }
}

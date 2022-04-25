<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Post',
            'var' => 'post',
            'posts' => Post::with('category')->get(),
        ];
        return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Create Post',
            'var' => 'createpost',
            'category' => Category::all()
        ];
        return view('admin.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'sumber' => 'required',
                'gambar' => 'required|image|mimes:png,jpg,jpeg',
                'body' => 'required'
            ],
            [
                'title.required' => 'Title Tidak boleh kosong',
                'sumber.required' => 'Sumber Tidak Boleh Kosong',
                'body.required' => 'Isi tidak boleh kosong',
                'gambar.required' => 'Gambar tidak boleh kosong',
                'gambar.image' => 'Harus Tipe Gambar',
            ]
        );
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $file = $request->file('gambar');
        if ($file) {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg|required'], ['gambar.image' => 'Harus tipe gambar']);
            if (!Storage::exists('/public/post')) {
                Storage::makeDirectory('public/post', 0775, true);
            }
            $namaGambar = date('F', strtotime(now())) . "-" . $slug  . "." . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save(Storage::path('public/post/' . $namaGambar));
        }

        $save = Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category,
            'gambar' => $namaGambar,
            'sumber' => $request->sumber,
            'body' => $request->body,
            'published' => 0,
            'penulis' => $request->session()->get('akun-admin.nama')
        ]);
        if ($save) {
            return redirect()->route('posts.index')->with('success', 'Data Berhasil dikirim');
        } else {
            return redirect()->route('posts.index')->with('failed', 'Data Gagal dikirim');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data = [
            'title' => 'Detail Post',
            'var' => 'post',
            'post' => $post->load('category')
        ];

        return view('admin.post.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = [
            'title' => 'Edit Post',
            'var' => 'post',
            'post' => $post,
            'categories' => Category::all()
        ];

        return view('admin.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate(
            [
                'title' => 'required',
                'sumber' => 'required',
                'body' => 'required'
            ],
            [
                'title.required' => 'Title Tidak boleh kosong',
                'sumber.required' => 'Sumber Tidak Boleh Kosong',
                'body.required' => 'Isi tidak boleh kosong'
            ]
        );
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $file = $request->file('gambar');
        if (!$file) {
            $namaGambar = $post->gambar;
        } else {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg'], ['gambar.image' => 'Harus tipe gambar']);
            if (!Storage::exists('/public/post')) {
                Storage::makeDirectory('public/post', 0775, true);
            }
            $namaGambar = date('F', strtotime(now())) . "-" . $slug  . "." . $file->getClientOriginalExtension();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save(Storage::path('public/post/' . $namaGambar));
            Storage::delete('public/post/' . $post->gambar);
        }

        $update = $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category,
            'gambar' => $namaGambar,
            'sumber' => $request->sumber,
            'body' => $request->body,
            'published' => 0,
            'penulis' => $request->session()->get('akun-admin.nama')
        ]);
        if ($update) {
            return redirect()->route('posts.index')->with('success', 'Data Berhasil diupdate');
        } else {
            return redirect()->route('posts.index')->with('failed', 'Data Gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $delete = Post::where(['id' => $post->id])->delete();
        if ($delete) {
            Storage::delete('public/post/' . $post->gambar);
            return redirect()->route('posts.index')->with('success', 'Data Berhasil dihapus');
        } else {
            return redirect()->route('posts.index')->with('failed', 'Data Gagal dihapus');
        }
    }


    public function listCategory()
    {
        $data = [
            'title' => 'List Category',
            'var' => 'category_post',
            'categories' => Category::all()
        ];
        return view('admin.category.index', $data);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:categories,category'
        ], [
            'kategori.required' => 'Kategory tidak boleh kosong',
            'kategori.unique' => 'Kategori Sudah Terisi dengan nama yang sama'
        ]);
        $slug = SlugService::createSlug(Category::class, 'slug', $request->kategori);
        $save = Category::create([
            'category' => $request->kategori,
            'slug' => $slug,
        ]);
        if ($save) {
            return redirect()->route('categorypost.index')->with('success', 'Data Berhasil dikirim');
        } else {
            return redirect()->route('categorypost.index')->with('failed', 'Data Gagal dikirim');
        }
    }

    public function deleteCategory(Category $category)
    {
        $delete = $category->delete();
        if ($delete) {
            return redirect()->route('categorypost.index')->with('success', 'Data Berhasil dihapus');
        } else {
            return redirect()->route('categorypost.index')->with('failed', 'Data Gagal dihapus');
        }
    }
    public function published(Post $post)
    {
        $update = $post->update([
            'published' => 1,
        ]);
        if ($update) {
            return redirect()->route('posts.show', ['post' => $post->id])->with('success', 'Post Berhasil dipublish');
        } else {
            return redirect()->route('posts.show', ['post' => $post->id])->with('failed', 'Post gagal dipublish');
        }
    }
}

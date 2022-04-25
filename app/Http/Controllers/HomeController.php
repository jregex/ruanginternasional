<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Kontak;
use App\Models\Post;
use App\Models\Sub_Gallery;
use App\Models\Tim_creator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $m_gallery;
    public function __construct()
    {
        $this->m_gallery = new Sub_Gallery();
    }
    public function index()
    {
        $data = [
            'var' => 'home',
            'teams' => Tim_creator::limit(8)->latest()->get(),
            'subgalleries' => $this->m_gallery->getLimitGal(),
            'galleries' => Gallery::latest()->get(),
            'posts' => Post::with('category')->limit(6)->latest()->where('published', 1)->get()
        ];

        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'var' => 'about'
        ];
        return view('about', $data);
    }
    public function team()
    {
        $data = [
            'var' => 'about',
            'teams' => Tim_creator::latest()->get()
        ];
        return view('team', $data);
    }
    public function gallery()
    {
        $data = [
            'var' => 'gallery',
            'subgalleries' => $this->m_gallery->getAll(),
            'galleries' => Gallery::latest()->get()
        ];
        return view('gallery', $data);
    }
    public function contact()
    {
        $data = [
            'var' => 'contact'
        ];
        return view('contact', $data);
    }

    public function storeContact(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email',
                'subjek' => 'required',
                'pesan' => 'required'
            ]
        );

        $save = Kontak::create(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'subjek' => $request->subjek,
                'pesan' => $request->pesan
            ]
        );
        if ($save) {

            return redirect()->route('contact')->with('success', 'Data Berhasil dikirim');
        } else {
            return redirect()->route('contact')->with('failed', 'Data Gagal dikirim');
        }
    }

    public function blogs()
    {
        $data = [
            'title' => 'Our Blogs',
            'var' => 'post',
            'posts' => Post::with('category')->where('published', 1)->latest()->filter(request(['search', 'category']))->paginate(10),
            'categories' => Category::get()
        ];
        return view('posts', $data);
    }

    public function detail_post($slug)
    {
        $data = [
            'title' => 'Detail Blog',
            'var' => 'post',
            'post' => Post::with('category')->firstWhere(['slug' => $slug]),
            'categories' => Category::get(),
            'recents' => Post::with('category')->latest()->limit(8)->get()
        ];
        $data['posts'] = Post::where('category_id', $data['post']->category_id)->get();
        return view('single-post', $data);
    }
}

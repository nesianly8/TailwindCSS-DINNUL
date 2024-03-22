<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index() {
        $blog = Blog::all();

        return view('index', [
            'blogs' => $blog ,
        ]);

    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail(); // Mengambil blog berdasarkan slug

        return view('blog-show', [
            'blog' => $blog
        ]);
    }
}

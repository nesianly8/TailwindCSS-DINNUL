<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index() {
        $blogs = Cache::remember('blogs', now()->addMinutes(5), function () {
            return Blog::all();
        });

        return view('index', [
            'blogs' => $blogs,
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

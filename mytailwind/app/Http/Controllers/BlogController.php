<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index() {
        $blog = Blog::all();

        return view('blog', [
            'blog' => $blog ,
        ]);
    }

    public function create() {
        $blog = Blog::all();

        return view('blog-create', [
            'blog' => $blog ,
        ]);
    }

    public function show() {
        $blog = Blog::all();

        return view('blog-show', [
            'blog' => $blog ,
        ]);
    }
}

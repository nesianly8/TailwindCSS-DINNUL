<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Events\BlogProcessed;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::all();

        return view('blog', [
            'blog' => $blog ,
        ]);

    }

    public function create() {

        return view('blog-create', [
            'Blog' => Blog::all()
        ]);

    }


    public function store(Request $request)
    {

        $validatedData = [
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'image' => $request->input('image'),
            'body' => strip_tags($request->input('body')),
        ];

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        Blog::create($validatedData);

        return redirect('/blog-admin')->with('success', 'New Post Has Been Added');
    }


    public function blog($id)
    {
        $blog = Blog::findOrFail($id); // Mengambil data blog berdasarkan ID

        return view('index', [
            'blog' => $blog
        ]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Mengambil data blog berdasarkan ID

        return view('blog-show', [
            'blog' => $blog
        ]);
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $rules = [
            'title' => 'required|string',
            'slug' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the validation rules for the image
            'body' => 'required|string',
        ];

        $validatedData = $request->validate($rules);
        // Clean HTML tags from body content
        $validatedData['body'] = strip_tags($validatedData['body']);

        // Handling image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            // Store new image
            $validatedData['image'] = $request->file('image')->store('blog-images');
        } else {
            // If no new image is uploaded, keep the old image
            $validatedData['image'] = $blog->image;
        }

        // Update the blog post
        $blog->update($validatedData);

        return redirect('/blog-admin')->with('success', 'Post Has Been Updated');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if($blog->image){
            Storage::delete($blog->image);
        }

        $blog->delete();

        return redirect('/blog-admin')->with('success', 'Post Has Been Deleted!');
    }


}

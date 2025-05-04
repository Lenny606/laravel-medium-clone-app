<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::take(3)->paginate(5);//or ->simplePaginate(5)
        return view('dashboard', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
//            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'title' => 'required',
            "content" => "required",
//            "category_id" => "required|exists:categories,id"
        ]);


        $image = $data['image'];
        unset($data['image']);
        $data['user_id'] = Auth::id();
        $dat["slug"] = Str::slug($data['title']);

        $imagPath = $image->store('posts', 'public');
        $data['image'] = $imagPath;

        Post::create($data);

        return redirect()->route('dashboard');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

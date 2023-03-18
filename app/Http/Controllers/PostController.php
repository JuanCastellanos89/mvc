<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostStore;

class PostController extends Controller
{
    public function __construct()
     {
        $this->middleware(['auth','rol.admin']);
     }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.post.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','category');
        return view('dashboard.post.create', ['post'=>new Post(),'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStore $request)
    {
        Post::create($request->validated());
        return back()->with('status', 'Post creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','category');
        return view('dashboard.post.edit',['post' => $post,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostStore $request, Post $post)
    {
        $post->update($request -> validated());
        return back()->with('status', 'Post modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post Eliminado con exito');
    }
}

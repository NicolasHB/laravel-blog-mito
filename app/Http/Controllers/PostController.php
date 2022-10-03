<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth'])->except(['index', 'show',]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1- Retrieve all post from models Post and saved in variable
        // $posts = Post::where('is_published', 1)->orderBy('updated_at', 'desc')->limit(8)->get();
        $posts = Post::orderBy('updated_at', 'desc')->paginate(4);
        // dd($posts);
        // 2- Send data to view
        return view('pages.homePage', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // dd($request->all());
        // dd($request->file('url_img'));
        $request->validate([
            'title' => 'required|min:5|string|max:180|unique:posts,title',
            'Content' => 'required|min:20|max:350|string',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:2000'
        ]);

        $validateImg = $request->file('url_img')->store('posts');

        Post::create([
            'title' => $request->title,
            'Content' => $request->Content,
            'url_img' => $validateImg,
            'created_at' => now()
        ]);
        return redirect()
        ->route('home')
        ->with('status', 'Le post a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd($post);
        return view('pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dd($post);
        return view('pages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //verify is_published
        $published = 0; 
        if($request->has('is_published')){
            $published = 1;
        }

        // verify is file exist
        // if file exist, to delete previous img
        if($request->hasFile('url_img')){
            // delete previous img 
            Storage::delete($post->url_img);
            // store the new img 
            $post->url_img = $request->file('url_img')->store('posts');
        }
        $request->validate([
            'title' => 'required|min:5|string|max:180',
            'Content' => 'required|min:20|max:350|string',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:2000',
        ]);

        $post->update([
            'title' => $request->title,
            'Content' => $request->Content,
            'url_img' => $post->url_img ,
            'is_published' => $published,
            'updated_at' => now()
        ]);

        return redirect()
        ->route('home')
        ->with('status', 'Le post a bien été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()
            ->route('home')
            ->with('status', "L'article a bien été supprimé");
    }
    public function allPosts()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.all-posts', compact('posts'));
    }
    
}

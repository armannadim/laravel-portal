<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::orderBy('created_at','DESC')->paginate(20);
        return view('admin.post.index', ['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::factory()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->name, '-'),
            'image' => $request->image,
            'category_id' => $request->category_id,
            'user_id' => 1, //Auth::user()->id,
            'description' => $request->description,
            'published_at'=> now()
        ]);

        $post->tags()->attach($request->tags);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/post', $image_new_name);
            $post->image = 'storage/post/' . $image_new_name;
            $post->save();
        }

        Session::flash('success', 'Post created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact(['post','categories', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->slug = Str::slug($request->name, '-');
        $post->category_id = $request->category_id;
        $post->user_id = 1; //Auth::user()->id,
        $post->description = $request->description;
        $post->save();

        $post->tags()->sync($request->tags);

        if($request->has('image')){
            if(file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }
            $image = $request->image;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/post', $image_new_name);
            $post->image = 'storage/post/' . $image_new_name;
            $post->save();
        }

        Session::flash('success', 'Post updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post){
            if(file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }
            $post->delete();
            Session::flash('success', 'Post deleted Successfully');
        }
        return redirect()->route('post.index');
    }
}

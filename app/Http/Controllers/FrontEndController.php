<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontEndController extends Controller
{
    public function home () {
        return view('frontend.index');
    }

    public function about () {
        return view('frontend.about');
    }

    public function blog () {
        $posts = Post::with(['category','user'])->orderBy('created_at', 'DESC')->paginate(5);
        $recentPosts = Post::orderby('created_at', 'DESC')->paginate(9);
        return view('frontend.blog', compact(['posts','recentPosts']));
    }

    public function services () {
        return view('frontend.services');
    }

    public function portfolio() {
        return view('frontend.portfolio');
    }

    public function contact () {
        return view('frontend.contact');
    }

    public function post($slug){
        $post = Post::with('category', 'user', 'tags')->where('slug', $slug)->first();
        $recentPosts = Post::orderby('created_at', 'DESC')->paginate(3);
        if($post){
            return view('frontend.blog-single', compact('post','recentPosts'));
        }
        return redirect()->back();

    }
}

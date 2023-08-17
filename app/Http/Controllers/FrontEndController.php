<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Member;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{
    public function home () {
        return view('frontend.index');
    }

    public function about () {
        return view('frontend.about');
    }

    public function blog () {
        $posts = Post::with(['category','user'])->where('category_id', '=', 4)->orderBy('created_at', 'DESC')->paginate(5);
        $recentPosts = Post::orderby('created_at', 'DESC')->paginate(9);
        $content_type="Blog";
        return view('frontend.blog', compact(['posts','recentPosts','content_type']));
    }

    public function news () {
        $posts = Post::with(['category','user'])->where('category_id', '=', 1)->orderBy('created_at', 'DESC')->paginate(9);
        $recentPosts = Post::orderby('created_at', 'DESC')->paginate(9);
        $content_type="News";
        return view('frontend.blog', compact(['posts','recentPosts','content_type']));
    }


    public function services () {
        return view('frontend.services');
    }

    public function activities() {
        $activities = Post::with(['category','user'])->where('category_id', '=', 8)->orderBy('created_at', 'DESC')->paginate(9);
        $recentActivities = Post::orderby('created_at', 'DESC')->paginate(9);
        $content_type="Activities";
        return view('frontend.activities', compact(['activities','recentActivities','content_type']));
    }

    public function becomeMember() {
        return view('frontend.activities');
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

    public function members(){
        $members = Member::orderby('created_at', 'DESC')->paginate(10);
        $mt = 'Members';
        return view('frontend.members', compact(['members', 'mt']));
    }

    public function governingBody(){
        $members = Member::where('membership_type', 'Governing Body Member')->paginate(10);
        $mt = 'Governing Body';
        return view('frontend.members', compact(['members', 'mt']));
    }

    public function send_message(SendMessageRequest $request){

        $message = Contact::factory()->create([
           'name' => $request->name,
           'email' => $request->email,
           'subject' => $request->subject,
           'message' => $request->message
        ]);

        Session::flash('message-send', 'Your message send successfully');
        return redirect()->back();
    }

    public function membershipInfo(){
        return view('frontend.membership-info');
    }

    public function faq(){
        $faqs = Faq::orderby('order','asc')->get();
        return view('frontend.faq',compact('faqs'));
    }

    public function resources(){
        return view('frontend.resources');
    }

    public function photogallery(){
        return view('frontend.photo-gallery');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Member;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $postCount = Post::where('category_id',1)->count();
        $newsCount = Post::where('category_id',8)->count();
        $memberCount = Member::count();
        $messageCount = Contact::count();
        $posts = Post::where('category_id',1)->orderBy('created_at', 'DESC')->take(10)->get();
        $news = Post::where('category_id', 8)->orderBy('created_at', 'DESC')->take(10)->get();
        return view('admin.dashboard.index', compact(['posts', 'news','postCount','newsCount', 'memberCount', 'messageCount']));
    }

}

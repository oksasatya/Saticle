<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Shetabit\Visitor\Models\Visit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('user.home', compact('posts'));
    }

    public function adminIndex()
    {
        $user =  visitor()->onlineVisitors(User::class)->count();
        $data = [
            'user' => User::orderBy('created_at', 'desc')->get(),
            // get data last created and count
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            'online' => $user,
            'last_online' => Visit::orderBy('created_at', 'desc')->first(),
            'tags' => Tag::latest()->paginate(5),
            'users' => User::latest()->paginate(5),
        ];
        return view('admin.home', $data);
    }
}

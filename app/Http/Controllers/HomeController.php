<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index(){

        $users = User::with('location')->with('posts')->get();

        return view('user.details',[
            'users' => $users
        ]);
    }

    public function location(){
        $location = Location::with('user')->get();
        return view('user.location',[
            'locations' => $location
        ]);
    }

    public function locationes(){

        $users = User::with('location')->get();

        return view('user.locationes',[
            'users'=>$users,

        ]);
    }

    public function Posts(){
        $posts = Post::with('tags','user')->get();
        $tags = Tag::first();

        // dd($posts);

        // $posts->tags()->attach($tags->id);

        return view('post',[
            'posts' => $posts,
        ]);
    }
}

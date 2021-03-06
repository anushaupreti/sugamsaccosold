<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\User;

use Auth;



class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')->with('post_count', Post::all()->count())
                                      ->with('user', Auth::user())
                                      ->with('category_count', Category::all()->count())
                                      ->with('user_count', User::all()->count());
                                  
    }
}

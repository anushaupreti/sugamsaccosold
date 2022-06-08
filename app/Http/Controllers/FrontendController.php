<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

use App\Features;
use App\Post;

use Session;




class FrontendController extends Controller
{
    public function index()
    {
        return view('front.index')
            ->with('title', Setting::first())
            ->with('featured', Features::orderBy('created_at', 'desc')->take(6)->get())
            ->with('settings', Setting::first());
    }

    public function board()
    {
        return view('front.board');
    }

    public function gallery()
    {
        return view('front.gallery');
    }

    public function events()
    {
        $events = Post::all();
        return view('front.events', compact('events'));
    }

    public function singleevents($id)
    {

        $singleevent = Post::find($id);

        return view('front.singleevent', compact('singleevent'));
    }

    public function singlePost($id)
    {
        $post = Post::where('id', $id)->first();

        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey, 1);
        }

        return view('front.single')->with('post', $post)
            ->with('title', $post->title)
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('four_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('five_post', Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('six_post', Post::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
            ->with('seven_post', Post::orderBy('created_at', 'desc')->skip(6)->take(1)->get()->first())
            ->with('eight_post', Post::orderBy('created_at', 'desc')->skip(7)->take(1)->get()->first())
            ->with('nine_post', Post::orderBy('created_at', 'desc')->skip(8)->take(1)->get()->first())
            ->with('ten_post', Post::orderBy('created_at', 'desc')->skip(9)->take(1)->get()->first())

            ->with('first_top', Post::OrderBy('view_count', 'DESC')->first())
            ->with('second_top', Post::orderBy('view_count', 'DESC')->skip(1)->take(1)->get()->first())
            ->with('third_top', Post::orderBy('view_count', 'DESC')->skip(2)->take(1)->get()->first())
            ->with('four_top', Post::orderBy('view_count', 'DESC')->skip(3)->take(1)->get()->first())
            ->with('five_top', Post::orderBy('view_count', 'DESC')->skip(4)->take(1)->get()->first())
            ->with('six_top', Post::orderBy('view_count', 'DESC')->skip(5)->take(1)->get()->first())
            ->with('seven_top', Post::orderBy('view_count', 'DESC')->skip(6)->take(1)->get()->first())
            ->with('eight_top', Post::orderBy('view_count', 'DESC')->skip(7)->take(1)->get()->first())
            ->with('nine_top', Post::orderBy('view_count', 'DESC')->skip(8)->take(1)->get()->first())
            ->with('ten_top', Post::orderBy('view_count', 'DESC')->skip(9)->take(1)->get()->first())
            ->with('categories', Category::take(11)->get())
            ->with('banner1s', banner1::take(1)->get())
            ->with('banner2s', banner2::take(1)->get())
            ->with('post1s', post1::take(1)->get())
            ->with('post2s', post2::take(1)->get())
            ->with('settings', Setting::first());
    }

    public function category($name)
    {
        $category = Category::where('name', $name)->first();

        return view('front.category')->with('category', $category)
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('four_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('five_post', Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('six_post', Post::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
            ->with('seven_post', Post::orderBy('created_at', 'desc')->skip(6)->take(1)->get()->first())
            ->with('eight_post', Post::orderBy('created_at', 'desc')->skip(7)->take(1)->get()->first())
            ->with('nine_post', Post::orderBy('created_at', 'desc')->skip(8)->take(1)->get()->first())
            ->with('ten_post', Post::orderBy('created_at', 'desc')->skip(9)->take(1)->get()->first())

            ->with('first_top', Post::OrderBy('view_count', 'DESC')->first())
            ->with('second_top', Post::orderBy('view_count', 'DESC')->skip(1)->take(1)->get()->first())
            ->with('third_top', Post::orderBy('view_count', 'DESC')->skip(2)->take(1)->get()->first())
            ->with('four_top', Post::orderBy('view_count', 'DESC')->skip(3)->take(1)->get()->first())
            ->with('five_top', Post::orderBy('view_count', 'DESC')->skip(4)->take(1)->get()->first())
            ->with('six_top', Post::orderBy('view_count', 'DESC')->skip(5)->take(1)->get()->first())
            ->with('seven_top', Post::orderBy('view_count', 'DESC')->skip(6)->take(1)->get()->first())
            ->with('eight_top', Post::orderBy('view_count', 'DESC')->skip(7)->take(1)->get()->first())
            ->with('nine_top', Post::orderBy('view_count', 'DESC')->skip(8)->take(1)->get()->first())
            ->with('ten_top', Post::orderBy('view_count', 'DESC')->skip(9)->take(1)->get()->first())
            ->with('title', $category->name)
            ->with('banner1s', banner1::take(1)->get())
            ->with('banner2s', banner2::take(1)->get())
            ->with('category1s', category1::take(1)->get())
            ->with('category2s', category2::take(1)->get())
            ->with('categories', Category::take(11)->get())
            ->with('settings', Setting::first());
    }



    public function unicode()
    {
        return view('front.unicode')
            ->with('categories', Category::take(11)->get())
            ->with('banner1s', banner1::take(1)->get())
            ->with('banner2s', banner2::take(1)->get())
            ->with('settings', Setting::first());
    }

    public function preetiunicode()
    {
        return view('front.preetiunicode')
            ->with('categories', Category::take(11)->get())
            ->with('banner1s', banner1::take(1)->get())
            ->with('banner2s', banner2::take(1)->get())
            ->with('settings', Setting::first());
    }

    public function contact()
    {
        return view('front.contact')
            ->with('categories', Category::take(11)->get())
            ->with('banner1s', banner1::take(1)->get())
            ->with('banner2s', banner2::take(1)->get())
            ->with('settings', Setting::first());
    }
    public function saving()
    {
        return view('front.saving');
    }

    public function loan()
    {
        return view('front.loan');
    }

    public function boardmember()
    {
        return view('front.boardmember');
    }

    public function loanmember()
    {
        return view('front.loanmember');
    }

    public function accountmember()
    {
        return view('front.accountmember');
    }

    public function othermember()
    {
        return view('front.othermember');
    }
    public function membership()
    {
        return view('front.membership');
    }
}
